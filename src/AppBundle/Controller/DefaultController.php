<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return new Response('<html><body>ok</body></html>');
    }

    /**
     * @Route("/admin", name="admin")
     */
    public function adminAction()
    {
        return new Response('<html><body>admin</body></html>');
    }
}
