<?php

namespace Tickets\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TicketsAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
