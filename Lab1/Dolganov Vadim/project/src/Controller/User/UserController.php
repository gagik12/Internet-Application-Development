<?php

namespace App\Controller\User;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class UserController extends AbstractController
{
    /**
     * @Route("/user_registration")
     */
    public function userRegistrationAction(Request $request)
    {
        $userRegistration = $this->createForm('App\Form\UserRegistration');
        $userRegistration->handleRequest($request);
        dump($userRegistration->getData());
        return $this->render('index.html.twig', [
            'form' => $userRegistration->createView()
        ]);
    }
}
