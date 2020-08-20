<?php

namespace App\Controller;

use App\Entity\Ev;
use App\Entity\Admin\Messages;
use App\Repository\CategoryRepository;
use App\Repository\EvRepository;
use App\Repository\SettingRepository;
use App\Form\Admin\MessagesType;
use App\Repository\Admin\ImageRepository;
use App\Repository\Admin\CommentRepository;
use App\Repository\ImageRepository as RepositoryImageRepository;
use App\Entity\Admin\Reservation;
use App\Form\Admin\ReservationType;
use App\Repository\Admin\ReservationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\Bridge\Google\Transport\GmailSmtpTransport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(SettingRepository $settingRepository, EvRepository $evRepository,CategoryRepository $categoryRepository)
    {
        $setting=$settingRepository->findAll();
        $slider= $evRepository->findBy(['status'=>'True'], ['title'=>'ASC'], 5);
        $evs= $evRepository->findBy(['status'=>'True'], ['title'=>'DESC'], 8);
        //$newevs= $evRepository->findBy([], ['title'=>'DESC'], 8);
        //dump($slider);
        //die();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'setting'=>$setting,
            'slider'=>$slider,
            'evs'=>$evs,
            'categori'=>$categoryRepository->findBy(['status'=>'True']),
        ]);
    }
    /**
     * @Route("/categori_ev/{id}", name="categori_ev")
     */
    public function categori_ev($id,SettingRepository $settingRepository, EvRepository $evRepository,CategoryRepository  $categoryRepository)
    {
        $setting=$settingRepository->findAll();
        $categori=$categoryRepository->findBy(['id'=>$id]);
        $evler= $evRepository->findBy(['category'=>$id], ['title'=>'ASC']);
        //$newevs= $evRepository->findBy([], ['title'=>'DESC'], 8);
        //dump($slider);
        //die();
        return $this->render('home/categori_ev.html.twig', [
            'controller_name' => 'HomeController',
            'setting'=>$setting,
            'category'=>$categori,
            'evs'=>$evler,
            'categori'=>$categoryRepository->findBy(['status'=>'True']),
        ]);
    }


    /**
     * @Route("/ev/{id}", name="ev_show", methods={"GET"})
     */
    public function show(Ev $ev, $id, RepositoryImageRepository $imageRepository, CommentRepository $commentRepository,CategoryRepository $categoryRepository): Response
    {
        $images= $imageRepository->findBy(['ev'=>$ev]);
        $comments= $commentRepository->findBy(['evid'=>$id, 'status'=>'True']);
        return $this->render('home/evshow.html.twig', [
            'ev' => $ev,
            'images' => $images,
            'comments' => $comments,
            'categori'=>$categoryRepository->findBy(['status'=>'True']),
        ]);
    }

    /**
     * @Route("/about", name="home_about")
     */
    public function about(SettingRepository $settingRepository,CategoryRepository $categoryRepository): Response
    {
        $setting = $settingRepository->findAll();
        return $this->render('home/aboutus.html.twig', [
            'setting'=>$setting,
            'categori'=>$categoryRepository->findBy(['status'=>'True']),
        ]);
    }

    /**
     * @Route("/contact", name="home_contact", methods={"GET","POST"})
     */
    public function contact(SettingRepository $settingRepository, Request $request,CategoryRepository $categoryRepository): Response
    {
        $message = new Messages();
        $form = $this->createForm(MessagesType::class, $message);
        $form->handleRequest($request);
        $submittedToken = $request->request->get('token');
        //$setting = $settingRepository->findAll();
        
        if ($form->isSubmitted()) {
            if($this->isCsrfTokenValid('form-messeage', $submittedToken )) {
                $entityManager = $this->getDoctrine()->getManager();
                $message->setStatus('New');
                $message->setIp($_SERVER['REMOTE_ADDR']);
                $entityManager->persist($message);
                $entityManager->flush();
                //--------------------Send Email------------------//

                // $email = (new Email())

                //     ->from($setting[0]->getSmtpemail())
                //     ->to($form['email']->getData())
                //     ->subject('Time for Symfony Mailer!')
                //     //->text('Sending emails is fun again!')
                //     ->html(
                //         "Dear" . $form['name']->getData() . "<br>
                //             <p> We will evalute your requests and contact you as soon as possible</p>
                //             Thank you <br>
                //             ==========================================================
                //             <br>" . $setting[0]->getCompany() . "<br>
                //             Address:" . $setting[0]->getCompany() . "<br>
                //             Phone:" . $setting[0]->getPhone() . "<br>"
                //     );
                // $transport = new GmailSmtpTransport($setting[0]->getSmtpemail(), $setting[0]->getSmtppassword());
                // $mailer = new Mailer($transport);
                // $mailer->send($email);

                //--------------------Send Email------------------//
                
                $this->addFlash('success', 'Your message has been sent successfuly');

                return $this->redirectToRoute('home_contact');
            }
        }
        $setting=$settingRepository->findAll();
        return $this->render('home/contact.html.twig', [
            'setting'=>$setting,
            'form' => $form->createView(),
            'categori'=>$categoryRepository->findBy(['status'=>'True']),
        ]);
    }
    
}