<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\Admin\CommentRepository;
use App\Repository\Admin\ReservationRepository;
use App\Repository\CategoryRepository;
use App\Repository\UserRepository;
use App\Form\Admin\CommentType;
use App\Entity\Admin\Comment;
use App\Repository\EvRepository;
use App\Form\Admin\MessagesType;
use App\Form\Admin\ReservationType;
use App\Entity\Admin\Reservation;
use ContainerYCYCLVv\getReservationRepositoryService;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @Route("/user")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/", name="user_index", methods={"GET"})
     */
    public function index(CategoryRepository $categoryRepository): Response
    {
        return $this->render('user/show.html.twig',[
            'categori'=>$categoryRepository->findBy(['status'=>'True']),
        ]);
    }

    /**
     * @Route("/comments", name="user_comments", methods={"GET"})
     */
    public function comments(CommentRepository $commentRepository,CategoryRepository $categoryRepository): Response
    {
        $user = $this->getUser();
        //echo $user->getId();
        //die();
        $comments = $commentRepository->getAllCommentsUser($user->getId());
        //dump($comments);
        //die();
        return $this->render('user/comments.html.twig',[
            'comments'=>$comments,
            'categori'=>$categoryRepository->findBy(['status'=>'True']),
        ]);
    }
    /**
     * @Route("/reservations", name="user_reservations", methods={"GET"})
     */
    public function reservations(ReservationRepository $reservationRepository,CategoryRepository $categoryRepository): Response
    {
        $user = $this->getUser();
        //$reservations = $reservationRepository->findBy(['userid'=>$user->getId()]);
        $reservations = $reservationRepository->getUserReservation($user->getId());
        //dump($reservations);
        //die();
        return $this->render('user/reservations.html.twig',[
            'reservations'=>$reservations,
            'categori'=>$categoryRepository->findBy(['status'=>'True']),

            ]);
    }
    /**
     * @Route("/ev", name="user_ev", methods={"GET"})
     */
    public function ev(): Response
    {
        return $this->render('user/ev.html.twig');
    }

    /**
     * @Route("/new", name="user_new", methods={"GET","POST"})
     */
    public function new(Request $request, UserPasswordEncoderInterface $passwordEncoder,CategoryRepository $categoryRepository): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

             //------------------Image Upload--------------//
            /** @var file $flie */
            $file = $form['image']->getData();
            if ($file) {
                $fileName = $this->generateUniqueFileName() . '.' . $file->guessExtension();


                // Move the file to the directory where brochures are stored
                try {
                    $file->move(
                        $this->getParameter('images_directory'), // in Service.yaml defined images directory
                        $fileName
                    );
                } catch (FileException $e) {
                    //..handle exception if something happens during file upload
                }
                $user->setImage($fileName);
            }
            //------------------Image Upload--------------//
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('password')->getData()
                )
            );
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
            'categori'=>$categoryRepository->findBy(['status'=>'True']),
        ]);
    }

    /**
     * @Route("/{id}", name="user_show", methods={"GET"})
     */
    public function show(User $user,CategoryRepository $categoryRepository): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
            'categori'=>$categoryRepository->findBy(['status'=>'True']),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="user_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, $id, User $user, UserPasswordEncoderInterface $passwordEncoder,CategoryRepository $categoryRepository): Response
    {
        $user = $this->getUser();
        if($user->getId() != $id){
            return $this->redirectToRoute('home');

        }
        
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

              //------------------Image Upload--------------//
            /** @var file $flie */
            $file = $form['image']->getData();
            if ($file) {
                $fileName = $this->generateUniqueFileName() . '.' . $file->guessExtension();


                // Move the file to the directory where brochures are stored
                try {
                    $file->move(
                        $this->getParameter('images_directory'), // in Service.yaml defined images directory
                        $fileName
                    );
                } catch (FileException $e) {
                    //..handle exception if something happens during file upload
                }
                $user->setImage($fileName);
            }
            //------------------Image Upload--------------//
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('password')->getData()
                )
            );
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
            'categori'=>$categoryRepository->findBy(['status'=>'True']),
        ]);
    }

    /**
     * @Route("/{id}", name="user_delete", methods={"DELETE"})
     */
    public function delete(Request $request, User $user,CategoryRepository $categoryRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('user_index');
    }
    /**
     * @return string
     */
    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }


    /**
     * @Route("/newcomment/{id}", name="user_new_comment", methods={"GET","POST"})
     */
    public function newcomment(Request $request, $id): Response
    {
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);
        $submittedToken = $request->request->get('token');

        if ($form->isSubmitted()) {
            if ($this->isCsrfTokenValid('comment', $submittedToken)) {
                $entityManager = $this->getDoctrine()->getManager();
                $comment->setStatus('New');
                $comment->setIp($_SERVER['REMOTE_ADDR']);
                $comment->setEvid($id);
                $comment->getUserid();
                $user = $this->getUser();
                $comment->setUserid($user->getId());
                
                $entityManager->persist($comment);
                $entityManager->flush();
                
                //$this->addFlash('success', 'Your comment has been sent successfuly');
                return $this->redirectToRoute('ev_show', ['id'=>$id]);
            }
        }

            return $this->redirectToRoute('ev_show', ['id'=>$id]);
    }

  /**
     * @Route("/reservation/{id}", name="user_reservation_new", methods={"GET","POST"})
     */
    public function newreservation(Request $request, $id,  EvRepository $evRepository,CategoryRepository $categoryRepository): Response
    {
        $ev = $evRepository->findOneBy(['id'=>$id]);

        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        $submittedToken = $request->request->get('token');
        if ($form->isSubmitted() ) {
            if ($this->isCsrfTokenValid('form-reservation', $submittedToken)) {
                $entityManager = $this->getDoctrine()->getManager();

                $reservation->setStatus('New');
                $reservation->setIp($_SERVER['REMOTE_ADDR']);
                $reservation->setEvid($id);
                $user = $this->getUser();
                $reservation->setUserid($user->getId());
                //$reservation->setAmount($amount);
                //$reservation->setTotalprice($total);
                //$reservation->setPrice($ev->getPrice());
                $reservation->setCreatedAt(new \Datetime());
                
                $entityManager->persist($reservation);
                $entityManager->flush();
                return $this->redirectToRoute('user_reservations');
            }
        }

        return $this->render('user/newreservation.html.twig', [
            'reservation' => $reservation,
            'ev' => $ev,
            'categori'=>$categoryRepository->findBy(['status'=>'True']),
            'form' => $form->createView(),
        ]);
    }

}