<?php

namespace AppBundle\Controller;

// use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
//     /**
//      * @Route("/", name="homepage")
//      */
//     public function indexAction(Request $request)
//     {
//         // replace this example code with whatever you need
//         return $this->render('default/index.html.twig', [
//             'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
//         ]);
//     }
    
    public function loginAction(Request $request)
    {
        // replace this example code with whatever you need
//         return $this->render('default/login.html.twig', [
//             'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
//         ]);
        
        
        
        $helper = $this->get('security.authentication_utils');
        
        return $this->render(
            'auth/login.html.twig',
            array(
                'last_username' => $helper->getLastUsername(),
                'error'         => $helper->getLastAuthenticationError(),
            )
            );
        
    }
    
    public function loginCheckAction()
    {
        
    }
    
    
    public function logoutAction()
    {
        
    }
    
}
