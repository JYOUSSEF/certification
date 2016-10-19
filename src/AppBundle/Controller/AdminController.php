<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/admin")
 */
class AdminController extends Controller
{
    /**
     * @Route(path="", name="admin")
     */
    public function adminAction()
    {
        return $this->render('admin/index.html.twig');
    }

    /**
     * @Route("/list", name="")
     */
    public function listAction()
    {
        return new Response('<html><body>admin - list</body></html>');
    }
}
