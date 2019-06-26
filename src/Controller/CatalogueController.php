<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Horaires;
use App\Repository\ArticleRepository;
use App\Repository\HorairesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CatalogueController extends AbstractController
{
    /**
     * @Route("/catalogue", name="catalogue")
     *
     * @Route("/{_locale}/catalogue", name="catalogue")
     *
     * @Route("/{_locale}/catalogue",name="catalogue",
     * defaults={"_locale": "fr"},requirements={"_locale": "fr|en|de|tr|de|es"})
     */
    public function index(HorairesRepository $horairesRepository, ArticleRepository $articleRepository)
    {
        return $this->render('catalogue/index.html.twig', [
            'controller_name' => 'CatalogueController',
            'menu' => $articleRepository->findBy(array('categoryId' => 31)),
            'entree' =>$articleRepository->findBy(array('categoryId' => 32)),
            'plat' =>$articleRepository->findBy(array('categoryId' => 33)),
            'dessert' =>$articleRepository->findBy(array('categoryId' => 34)),
            'boisson' =>$articleRepository->findBy(array('categoryId' => 35)),
            'promo' =>$articleRepository->findBy(array('categoryId' => 36)),
            'horaires' => $horairesRepository->findAll()

        ]);
    }
}
