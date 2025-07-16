<?php

namespace E00Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
    * @Route("/e00/firstpage", name="e00_firstpage")
    */
    public function firstPageAction()
    {
        return new Response("Hello world!");
    }
}
