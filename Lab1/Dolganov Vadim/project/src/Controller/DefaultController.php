<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return new Response('<h1>Hello, world!</h1>');
    }
}
