<?php

namespace Servicos\SsoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ServicosSsoBundle:Default:index.html.twig');
    }
}
