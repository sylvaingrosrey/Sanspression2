<?php
namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;

use App\Repository\HorairesRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route("/{_locale}/login",name="app_login",defaults={"_locale": "fr"},
     * requirements={"_locale": "fr|en|de|tr|de|es"})
     */
    public function login(HorairesRepository $horairesRepository, AuthenticationUtils $authenticationUtils): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
            'horaires' => $horairesRepository->findAll(),
        ]);
    }
    /**
     * @Route("/{_locale}/registration", name="registration")
     */
    public function register(
        HorairesRepository $horairesRepository,
        Request $request,
        ObjectManager $manager,
        UserPasswordEncoderInterface $encoder
    ) {
        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);
            $user->setRoles(array('ROLE_USER'));
            $manager->persist($user);
            $manager->flush();
            return $this->redirectToRoute('home');
        }
        return $this->render('security/registration.html.twig', [
            'form' => $form->createView(),
            'horaires' =>$horairesRepository->findAll()
        ]);
    }
    
    /**
     * @Route("/{_locale}/logout", name="app_logout")
     */
    public function logout()
    {
    }
}
