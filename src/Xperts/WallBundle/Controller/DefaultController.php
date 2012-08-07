<?php

namespace Xperts\WallBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Xperts\FooBundle\Model\BasicPost;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }

    /**
     * @Route("/add/{author}/{message}")
     * @Template()
     */
    public function addAction($author, $message)
    {
        $post = new BasicPost($author, $message);
        return array('post' => $post);
    }
}
