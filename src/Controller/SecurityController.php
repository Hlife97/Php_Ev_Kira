<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils,CategoryRepository $categoryRepository): Response
    {
        if ($this->getUser()) {
            $user = $this->getUser();
            if ($user->getRoles()[0]=='ROLE_ADMIN')
                return $this->redirectToRoute('admin_admin');
            else
                return $this->redirectToRoute('home');
        }
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/adminlogin.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
            'categori'=>$categoryRepository->findBy(['status'=>'True']),
        ]);
    }
    
    /**
     * @Route("/loginuser", name="login_user")
     */
    public function loginuser(AuthenticationUtils $authenticationUtils,CategoryRepository $categoryRepository): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/userlogin.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
            'categori'=>$categoryRepository->findBy(['status'=>'True']),

        ]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}