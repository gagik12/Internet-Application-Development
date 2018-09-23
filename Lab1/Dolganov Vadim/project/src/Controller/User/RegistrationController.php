<?php

namespace App\Controller\User;

use Monolog\Logger;
use App\Controller\User\BaseController\UserRegistrationBaseController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\UserRegistration;

class RegistrationController extends UserRegistrationBaseController
{
    /**
     * @Route("/register", name="user_registration")
     */
    public function register(Request $request)
    {
        $userRegistration = $this->createForm(UserRegistration::FORM_NAME);
        $userRegistration->handleRequest($request);

        return $this->render(
            'registration/index.html.twig',
            array('form' => $userRegistration->createView())
        );
    }
}
