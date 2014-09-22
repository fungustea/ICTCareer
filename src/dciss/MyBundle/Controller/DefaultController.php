<?php

namespace dciss\MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('dcissMyBundle:Default:index.html.twig');
    }
}
