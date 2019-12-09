<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\SomeService;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(SomeService $someService): Response
    {
        return new Response('foo');
    }

}
