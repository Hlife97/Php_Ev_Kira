<?php

namespace App\Controller;

use App\Entity\Ev;
use App\Entity\Admin\Messages;
use App\Repository\EvRepository;
use App\Repository\SettingRepository;
use App\Form\Admin\MessagesType;
use App\Repository\Admin\ImageRepository;
use App\Repository\Admin\CommentRepository;
use App\Repository\ImageRepository as RepositoryImageRepository;
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
    public function index(SettingRepository $settingRepository, EvRepository $evRepository)
    {
        $setting=$settingRepository->findAll();
        $slider= $evRepository->findBy([], ['title'=>'ASC'], 5);
        $evs= $evRepository->findBy([], ['title'=>'DESC'], 8);
        //$newevs= $evRepository->findBy([], ['title'=>'DESC'], 8);
        //dump($slider);
        //die();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'setting'=>$setting,
            'slider'=>$slider,
            'evs'=>$evs,
        ]);
    }

    /**
     * @Route("/ev/{id}", name="ev_show", methods={"GET"})
     */
    public function show(Ev $ev, $id, RepositoryImageRepository $imageRepository, CommentRepository $commentRepository): Response
    {
        $images= $imageRepository->findBy(['ev'=>$ev]);
        $comments= $commentRepository->findBy(['evid'=>$id, 'status'=>'True']);
        return $this->render('home/evshow.html.twig', [
            'ev' => $ev,
            'images' => $images,
            'comments' => $comments,
        ]);
    }

    /**
     * @Route("/about", name="home_about")
     */
    public function about(SettingRepository $settingRepository): Response
    {
        $setting = $settingRepository->findAll();
        return $this->render('home/aboutus.html.twig', [
            'setting'=>$setting,
        ]);
    }

    /**
     * @Route("/contact", name="home_contact", methods={"GET","POST"})
     */
    public function contact(SettingRepository $settingRepository, Request $request): Response
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
        ]);
    }
    
}