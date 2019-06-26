<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Panier;
use App\Repository\ArticleRepository;
use App\Repository\HorairesRepository;
use App\Repository\PanierRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class PanierController extends AbstractController
{
    /**
     * @Route("/panier/", name="panier")
     *
     */
    public function index(
        PanierRepository $panierRepository,
        ArticleRepository $articleRepository,
        HorairesRepository $horairesRepository
    ) {
        $panier = $panierRepository->findBy(array("userId" => $this->getUser()->getId()));
        $count=0;
        $article=[];
        for ($i=0; $i<count($panier); $i++) {
            $article[$panier[$i]->getId()]= $articleRepository->findBy(array("id"=>$panier[$i]->getArticleId()));
            $count+=$article[$panier[$i]->getId()][0]->getPrice();
        }

        return $this->render('panier/index.html.twig', [
            'panier' => $panier,
            'article' =>$article,
            'count' =>$count,
            'horaires' => $horairesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/panier/add/{idarticle}", name="panieradd")
     *
     */
    public function addPanier(int $idarticle, EntityManagerInterface $entityManager) :Response
    {

        $panier = new Panier();
        $panier->setArticleId($idarticle);
        $panier->setUserId($this->getUser()->getId());
        $entityManager->persist($panier);
        $entityManager->flush();

        return $this->redirectToRoute('catalogue');
    }

    /**
     * @Route("/panier/delete/{id}", name="panier_delete")
     */
    public function delete(int $id, ObjectManager $manager): Response
    {
        $em=$manager->getRepository(Panier::class)->find($id);

        $manager->remove($em);
        $manager->flush();

        return $this->redirectToRoute("panier", array(
            'user' => $this->getUser()->getId()
        ));
    }

    /**
     * @Route("/panier/deleteall", name="panier_delete_all")
     */
    public function deleteAll(ObjectManager $manager): Response
    {

        $em=$manager->getRepository(Panier::class)->findBy(["userId"=> $this->getUser()->getId()]);
        foreach ($em as $value) {
            $manager->remove($value);
        }
        $manager->flush();
        return $this->redirectToRoute("panier", array(
            'user' => $this->getUser()->getId()
        ));
    }
}
