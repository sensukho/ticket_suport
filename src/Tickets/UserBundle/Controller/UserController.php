<?php

namespace Tickets\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction()
    {
        return $this->render('TicketsUserBundle:User:index.html.twig', array());
    }

    public function newticketAction()
    {
        return $this->render('TicketsUserBundle:User:newticket.html.twig', array());
    }

    public function ticketsAction()
    {
        return $this->render('TicketsUserBundle:User:tickets.html.twig', array());
    }

    public function seeticketsAction()
    {
        return $this->render('TicketsUserBundle:User:seetickets.html.twig', array());
    }

    public function seeticketAction($id)
    {
        return $this->render('TicketsUserBundle:User:seeticket.html.twig', array("id" => $id));
    }
}
