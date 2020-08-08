<?php

namespace App\Controller\Admin;

use App\Entity\Ev;
use App\Form\EvType;
use App\Repository\EvRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormBuilderInterface;


/**
 * @Route("admin/ev")
 */
class EvController extends AbstractController
{
    /**
     * @Route("/", name="admin_ev_index", methods={"GET"})
     */
    public function index(EvRepository $evRepository): Response
    {
        return $this->render('admin/ev/index.html.twig', [
            'evs' => $evRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="admin_ev_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {

        $ev = new Ev();
        $form = $this->createForm(EvType::class, $ev);
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
            $entityManager->persist($ev);
            $entityManager->flush();

            return $this->redirectToRoute('admin_ev_index');
        }

        return $this->render('admin/ev/new.html.twig', [
            'ev' => $ev,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_ev_show", methods={"GET"})
     */
    public function show(Ev $ev): Response
    {
        return $this->render('admin/ev/show.html.twig', [
            'ev' => $ev,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="admin_ev_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Ev $ev): Response
    {
        $form = $this->createForm(EvType::class, $ev);
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

            return $this->redirectToRoute('ev_index');
        }

        return $this->render('admin/ev/edit.html.twig', [
            'ev' => $ev,
            'form' => $form->createView(),
        ]);
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

    /**
     * @Route("/{id}", name="admin_ev_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Ev $ev): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ev->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($ev);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_ev_index');
    }
}