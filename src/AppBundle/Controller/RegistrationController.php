<?php
namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Servicos\ApiBundle\Entity\Permissoes\Usuario;
use Servicos\ApiBundle\Form\Permissoes\UsuarioType;

class RegistrationController extends Controller
{
    public function registerAction(Request $request)
    {
        // Create a new blank user and process the form
        $user = new Usuario();
        $form = $this->createForm(UsuarioType::class, $user);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            // Encode the new users password
            $encoder = $this->get('security.password_encoder');
            $password = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);
            
            // Set their role
            $user->setRole('ROLE_USER');
            
            // Save
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            
            return $this->redirectToRoute('login');
        }
        
        return $this->render('auth/register.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}