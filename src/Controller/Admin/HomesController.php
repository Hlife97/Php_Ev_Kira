<?php

namespace App\Controller\Admin;

use App\Entity\Admin\Homes;
use App\Form\Admin\HomesType;
use App\Repository\Admin\HomesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/homes")
 */
class HomesController extends AbstractController
{
    /**
     * @Route("/", name="admin_homes_index", methods={"GET"})
     */
    public function index(HomesRepository $homesRepository): Response
    {
        return $this->render('admin/homes/index.html.twig', [
            'homes' => $homesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="admin_homes_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $home = new Homes();
        $form = $this->createForm(HomesType::class, $home);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($home);
            $entityManager->flush();

            return $this->redirectToRoute('admin_homes_index');
        }

        return $this->render('admin/homes/new.html.twig', [
            'home' => $home,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_homes_show", methods={"GET"})
     */
    public function show(Homes $home): Response
    {
        return $this->render('admin/homes/show.html.twig', [
            'home' => $home,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="admin_homes_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Homes $home): Response
    {
        $form = $this->createForm(HomesType::class, $home);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_homes_index');
        }

        return $this->render('admin/homes/edit.html.twig', [
            'home' => $home,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_homes_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Homes $home): Response
    {
        if ($this->isCsrfTokenValid('delete'.$home->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($home);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_homes_index');
    }
}
