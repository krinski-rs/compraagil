<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller
{
    public function welcomeAction(Request $objRequest)
    {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
//         echo "<pre>";
//         \Doctrine\Common\Util\Debug::dump($this->getUser()->getRoles());
//         exit();
        return $this->render(
            'AppBundle:Default:index.html.twig',
            [
                'desktop' => [
                    'icons' => [
                        [
                            'left' => 20,
                            'top' => 20,
                            'href' => '#icon_dock_permissao',
                            'src' => '/bundles/app/css/jquery/desktop/images/icons/icon_32_addgroup.png',
                            'text' => 'Permissão'
                        ],
                        [
                            'left' => 20,
                            'top' => 100,
                            'href' => '#icon_dock_drive',
                            'src' => '/bundles/app/css/jquery/desktop/images/icons/icon_32_drive.png',
                            'text' => 'Hard Drive'
                        ],
                        [
                            'left' => 20,
                            'top' => 180,
                            'href' => '#icon_dock_map',
                            'src' => '/bundles/app/css/jquery/desktop/images/icons/icon_32_map-with-placeholder.png',
                            'text' => 'Localização'
                        ]
                    ],
                    'windows' => [
                        [
                            'id' => 'window_permissao',
                            'window_inner' => [
                                'text' => 'Build: TK421',
                                'window_top' => [
                                    'float_left'=> [
                                        'text' => 'Permissão',
                                        'image' => '<img src="/bundles/app/css/jquery/desktop/images/icons/icon_16_addgroup.png" />'
                                    ],
                                    'float_right'=> [
                                        'href' => 'icon_dock_permissao'
                                    ],
                                ],
                                'window_content' => []
                            ]
                        ],
                        [
                            'id' => 'window_drive',
                            'window_inner' => [
                                'text' => 'Free: 80.9 GB',
                                'window_top' => [
                                    'float_left'=> [
                                        'text' => 'Hard Drive',
                                        'image' => '<img src="/bundles/app/css/jquery/desktop/images/icons/icon_16_drive.png" />'
                                    ],
                                    'float_right'=> [
                                        'href' => 'icon_dock_drive'
                                    ],
                                ],
                                'window_content' => []
                            ]
                        ],
                        [
                            'id' => 'window_map',
                            'window_inner' => [
                                'text' => 'Free: 80.9 GB',
                                'window_top' => [
                                    'float_left'=> [
                                        'text' => 'Localização',
                                        'image' => '<img src="/bundles/app/css/jquery/desktop/images/icons/icon_16_map-with-placeholder.png" />'
                                    ],
                                    'float_right'=> [
                                        'href' => 'icon_dock_map'
                                    ],
                                ],
                                'window_content' => []
                            ]
                        ]
                    ]
                ],
                'dock' => [
                    [
                        'id' => 'icon_dock_permissao',
                        'href' => '#window_permissao',
                        'src' => '/bundles/app/css/jquery/desktop/images/icons/icon_22_addgroup.png',
                        'text' => 'Permissão'
                    ],
                    [
                        'id' => 'icon_dock_drive',
                        'href' => '#window_drive',
                        'src' => '/bundles/app/css/jquery/desktop/images/icons/icon_22_drive.png',
                        'text' => 'Hard Drive'
                    ],
                    [
                        'id' => 'icon_dock_map',
                        'href' => '#window_map',
                        'src' => '/bundles/app/css/jquery/desktop/images/icons/icon_22_map-with-placeholder.png',
                        'text' => 'Localização'
                    ]
                ],
                'bar_top' => [
                    [
                        'href' => '/localidades',
                        'text' => 'Localidades',//Domínio de vendas no mercado
                        'ul'=> []
                    ],
                    [
                        'href' => '#',
                        'text' => 'Product Domain',//Domínio do Produto
                        'ul'=> []
                    ],
                    [
                        'href' => '#',
                        'text' => 'Customer Domain',//Domínio do Cliente
                        'ul'=> []
                    ],
                    [
                        'href' => '#',
                        'text' => 'Service Domain',//Domínio de Serviço
                        'ul'=> []
                    ],
                    [
                        'href' => '#',
                        'text' => 'Resource Domain',//Domínio de Recursos
                        'ul'=> []
                    ],
                    [
                        'href' => '#',
                        'text' => 'Engaged Party Domain',//Domínio do grupo contratado
                        'ul'=> []
                    ],
                    [
                        'href' => '#',
                        'text' => 'Enterprise Domain',//Domínio Empresarial
                        'ul'=> []
                    ],
                    [
                        'href' => '#',
                        'text' => 'Common Process Patterns Domain',//Padrões comuns de processos
                        'ul'=> []
                    ]
                ]
            ]
        );
    }
}