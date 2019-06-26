<?php

namespace App\Controller;

use App\Entity\Carousel;
use App\Form\CarouselType;
use App\Repository\CarouselRepository;
use App\Repository\HorairesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/carousel")
 */
class CarouselController extends AbstractController
{
    /**
     * @Route("/", name="carousel_index", methods={"GET"})
     */
    public function index(CarouselRepository $carouselRepository, HorairesRepository $horaires): Response
    {
        return $this->render('carousel/index.html.twig', [
            'carousels' => $carouselRepository->findAll(),
            'horaires' => $horaires->findAll()
        ]);
    }

    /**
     * @Route("/new", name="carousel_new", methods={"GET","POST"})
     */
    public function new(Request $request, HorairesRepository $horaires): Response
    {
        $carousel = new Carousel();
        $form = $this->createForm(CarouselType::class, $carousel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($carousel);
            $entityManager->flush();

            return $this->redirectToRoute('carousel_index');
        }

        return $this->render('carousel/new.html.twig', [
            'carousel' => $carousel,
            'form' => $form->createView(),
            'horaires' => $horaires->findAll()
        ]);
    }

    /**
     * @Route("/{id}", name="carousel_show", methods={"GET"})
     */
    public function show(Carousel $carousel, HorairesRepository $horaires): Response
    {
        return $this->render('carousel/show.html.twig', [
            'carousel' => $carousel,
            'horaires' => $horaires->findAll()
        ]);
    }

    /**
     * @Route("/{id}/edit", name="carousel_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Carousel $carousel, HorairesRepository $horaires): Response
    {
        $form = $this->createForm(CarouselType::class, $carousel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('carousel_index', [
                'id' => $carousel->getId(),
            ]);
        }

        return $this->render('carousel/edit.html.twig', [
            'carousel' => $carousel,
            'form' => $form->createView(),
            'horaires' => $horaires->findAll()
        ]);
    }

    /**
     * @Route("/{id}", name="carousel_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Carousel $carousel, HorairesRepository $horaires): Response
    {
        if ($this->isCsrfTokenValid('delete'.$carousel->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($carousel);
            $entityManager->flush();
        }

        return $this->redirectToRoute('carousel_index');
    }
}
