<?php
namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\CarouselRepository;
use App\Repository\HorairesRepository;
use App\Repository\MenuRepository;
use App\Repository\ParallaxRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/{_locale}",name="home")
     *
     * @Route("/{_locale}",name="home",defaults={"_locale": "fr"},requirements={"_locale": "fr|en|de|tr|de|es"})
     *
     */
    public function index(
        CarouselRepository $carouselRepository,
        ArticleRepository $articleRepository,
        HorairesRepository $horairesRepository,
        ParallaxRepository $parallaxRepository,
        MenuRepository $menuRepository
    ) {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'carouselactive' => $carouselRepository->findby(['Active' => 1], null, 1),
            'carousel' => $carouselRepository->findBy(array('Active' => 0)),
            'news' => $articleRepository->findBy(['newActive'=>1], null, 4),
            'horaires' => $horairesRepository->findAll(),
            'parallax' => $parallaxRepository->findAll(),
            'menu' => $menuRepository ->findAll()
        ]);
    }
}
