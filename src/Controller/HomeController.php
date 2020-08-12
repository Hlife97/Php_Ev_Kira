<?php

namespace App\Controller;

use App\Entity\Ev;
use App\Repository\EvRepository;
use App\Repository\SettingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(SettingRepository $settingRepository, EvRepository $evRepository)
    {
        $setting=$settingRepository->findAll();
        $slider= $evRepository->findBy([], [], 3);
        //dump($slider);
        //die();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'setting'=>$setting,
            'slider'=>$slider,
        ]);
    }

    /**
     * @Route("/ev/{id}", name="ev_show", methods={"GET"})
     */
    public function show(Ev $ev): Response
    {
        return $this->render('home/evshow.html.twig', [
            'ev' => $ev,
        ]);
    }
}