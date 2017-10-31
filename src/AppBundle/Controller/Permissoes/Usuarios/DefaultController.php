<?php
namespace AppBundle\Controller\Permissoes\Usuarios;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    public function defaultAction(Request $objRequest)
    {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        
        $objUsuarioListar = $this->get('servicos_api.permissoes.usuarios.listar');
        $arrayContent = $objUsuarioListar->listar();
        
        
        /*
         * 
         * <div class="abs window_bottom">Build: TK421ss</div>
         * 
         * 
         */
        return $this->render(
            'AppBundle:Usuarios:window.html.twig',
            [
                'window_content' => [
                    'text'=> 'chubaca',
                    'table'=> [
                        'thead' => [
                            [
                                [
                                    'class' => 'shrink',
                                    'text' => '&nbsp;'
                                ],
                                ['text' => 'ID'],
                                ['text' => 'Username'],
                                ['text' => 'Ativo'],
                                ['text' => 'Email'],
                                ['text' => 'Data Cadastro']
                            ]
                        ],
                        'tbody' => $arrayContent['data']
                    ]
                ]
            ]
        );
    }
}