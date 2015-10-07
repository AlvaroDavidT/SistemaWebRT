<?php

namespace Login\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LoginFirstBundle:Default:index.html.twig', array('name' => $name));
    }
}
