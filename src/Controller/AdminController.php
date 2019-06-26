<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\HorairesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\UserRepository;

/**
 * @IsGranted("ROLE_ADMIN")
 */

class AdminController extends AbstractController
{
    /**
     * @Route("/{_locale}/admin",name="admin",defaults={"_locale": "fr"},
     * requirements={"_locale": "fr|en|de|tr|de|es"})
     */
    public function index(HorairesRepository $horairesRepository)
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'HomeController',
            'horaires' => $horairesRepository->findAll(),
        ]);
    }
}
