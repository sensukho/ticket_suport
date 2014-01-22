<?php

namespace Tickets\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction()
    {
        return $this->render('TicketsUserBundle:Login:index.html.twig', array());
    }

    public function newticketAction()
    {
        return $this->render('TicketsUserBundle:Login:newticket.html.twig', array());
    }

    public function ticketsAction()
    {
        return $this->render('TicketsUserBundle:Login:tickets.html.twig', array());
    }

    public function seeticketsAction()
    {
        return $this->render('TicketsUserBundle:Login:seetickets.html.twig', array());
    }
}
