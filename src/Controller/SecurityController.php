<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function login(Request $request)
    {
        $error = "";
        $lastUsername = "";

        print_r($request->getContent());
        //print_r($request->getMethod());
        //print_r($_POST['email']);
        //print_r(file_get_contents("php://input"));
        //var_dump($request->get('email'));
        //dump($this->getUser());

        return $this->json([
            'message' => 'Welcome to your new controller!',
            'username' => $lastUsername,
            'error' => $error
        ]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        return $this->json([
            'success' => 'Logout!'
        ]);
    }
}
