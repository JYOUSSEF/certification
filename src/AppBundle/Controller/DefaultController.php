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
     * @Route("/post/{tag}/{slug}", name="")
     */
    public function viewPostAction($slug, $tag)
    {
        return new Response("<html><body>$tag / $slug</body></html>");
    }

    /**
     * @Route("/blog/{page}", name="blog_list", requirements={"page": "\d+"}, defaults={"page": 1})
     */
    public function blogAction($page)
    {
        return new Response("<html><body>Blog page : $page</body></html>");
    }
}
