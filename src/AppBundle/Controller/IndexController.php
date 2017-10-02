<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller
{
    public function welcomeAction(Request $request)
    {            
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        return $this->render(
            'AppBundle:Default:index.html.twig',
            [
                'desktop' => [
                    'icons' => [],
                    'windows' => [],
                    'dock' => [],
                    'bar_top' => []
                ]
            ]
        );
    }
}