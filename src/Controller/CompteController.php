<?php
namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Form\ReloadPassWordType;
use App\Repository\HorairesRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class CompteController extends AbstractController
{
    
    /**
     * @Route("/{_locale}/ReloadPassword", name="reloadpassword")
     */
    public function reloadPassword(
        Request $request,
        ObjectManager $manager,
        UserRepository $userRepository,
        HorairesRepository $horairesRepository,
        UserPasswordEncoderInterface $encoder
    ): Response {
        $form = $this->createForm(ReloadPassWordType::class, $this->getUser());
        $form->handleRequest($request);
        $user = $this->getUser();
       // echo '<pre>' . print_r($currenttable, true) . '</pre>';
        $message="";
        if ($form->isSubmitted() && $form->isValid()) {
            // currenttablepass password de la table
            // 'user' => $userRepository->findAll();
            //echo '<pre>'. print_r($request->request, true). '</pre>';
            // echo '<pre>' . print_r( $form, true ) . '</pre>';
            
            echo '<pre>'. print_r($request->request->get('reloadpassword')['password'], true). '</pre>';
            //echo '<pre>'. print_r($user->getCurrentPassword(), true). '</pre>';
            if (password_verify($user->getCurrentPassword(), $user->getPassword()) === true) {
                echo 'ok check good';
                $currentformpass = $encoder->encodePassword($user, $user->getNewPassword());
                $user->setPassword($currentformpass);
                $manager->persist($user);
                $manager->flush();
                return $this->redirectToRoute('app_logout');
            } else {
                $message= 'votre mot de passe est different! entrez le même';
              //return $this->redirectToRoute('ReloadPassword');
            }
            
            // $currenttablepass= $currenttable->findAll();
            // currentformpass password de controle a check avec table
            // $currentformpass = $encoder->encodePassword($user, $user->getPassword());
            // echo '<pre>' . print_r( $currentformpass, true ) . '</pre>';
           
            //on check les 2 pass si ok on continue
           // if ($currenttablepass ==  $currentformpass) {

                //encode le nouveau pass
              //  $hash = $encoder->encodePassword($user, $user->setNewPassword());
                //enregistre dans la table
              //  $user->setNewPassword($hash);
                
                
           // }
           // $manager->persist($user);
            //    $manager->flush();
        }

        return $this->render('compte/reloadpassword.html.twig', [
            'user' => $this->getUser(),
            'message' => $message,
            'form' => $form->createView(),
            'horaires' =>$horairesRepository->findAll()
        ]);
    }
}
