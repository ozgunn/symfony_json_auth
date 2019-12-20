<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function login(Request $request, Security $security)
    {
        $username = "";
        $roles = [];

        if ($this->getUser()) {
            $username = $this->getUser()->getEmail();
            $roles = $this->getUser()->getRoles();
        }

        return $this->json([
            'message' => 'Welcome!',
            'username' => $username,
            'roles' => $roles
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
