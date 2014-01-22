<?php

namespace Tickets\SuportBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TicketsSuportBundle:Default:index.html.twig', array('name' => $name));
    }
}
