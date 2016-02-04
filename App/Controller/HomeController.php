<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    /**
     * @Route("/")
     */
    function indexAction()
    {
        return new Response("<h2>Welcome to Symfony Micro Edition!</h2>");
    }
}
