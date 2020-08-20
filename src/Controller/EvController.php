<?php

namespace App\Controller;

use App\Entity\Ev;
use App\Form\Ev1Type;
use App\Repository\CategoryRepository;
use App\Repository\EvRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/user/ev")
 */
class EvController extends AbstractController
{
    /**
     * @Route("/", name="user_ev_index", methods={"GET"})
     */
    public function index(EvRepository $evRepository,CategoryRepository $categoryRepository): Response
    {   
        $user = $this->getUser();
        return $this->render('ev/index.html.twig', [
            'evs' => $evRepository->findBy(['userid'=>$user->getId()]),
            'categori'=>$categoryRepository->findBy(['status'=>'True']),
        ]);
    }

    /**
     * @Route("/new", name="user_ev_new", methods={"GET","POST"})
     */
    public function new(Request $request,CategoryRepository $categoryRepository): Response
    {
        $ev = new Ev();
        $form = $this->createForm(Ev1Type::class, $ev);
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
                $ev->setImage($fileName);
            }
            //------------------Image Upload--------------//
            $user = $this->getUser();
            $ev->setUserid($user->getId());
            $ev->setStatus("New");
            $entityManager->persist($ev);
            $entityManager->flush();

            return $this->redirectToRoute('user_ev_index');
        }

        return $this->render('ev/new.html.twig', [
            'ev' => $ev,
            'form' => $form->createView(),
            'categori'=>$categoryRepository->findBy(['status'=>'True']),
        ]);
    }

    /**
     * @Route("/{id}", name="user_ev_show", methods={"GET"})
     */
    public function show(Ev $ev,CategoryRepository $categoryRepository): Response
    {
        return $this->render('ev/show.html.twig', [
            'ev' => $ev,
            'categori'=>$categoryRepository->findBy(['status'=>'True']),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="user_ev_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Ev $ev,CategoryRepository $categoryRepository): Response
    {
        $form = $this->createForm(Ev1Type::class, $ev);
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
                $ev->setImage($fileName);
            }
            //------------------Image Upload--------------//
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_ev_index');
        }

        return $this->render('ev/edit.html.twig', [
            'ev' => $ev,
            'form' => $form->createView(),
            'categori'=>$categoryRepository->findBy(['status'=>'True']),
        ]);
    }

    /**
     * @Route("/{id}", name="user_ev_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Ev $ev): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ev->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($ev);
            $entityManager->flush();
        }

        return $this->redirectToRoute('user_ev_index');
    }

    /**
     * @return string
    */
    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // unigid(), which is based on timestomps
        return md5(uniqid());
    }

}