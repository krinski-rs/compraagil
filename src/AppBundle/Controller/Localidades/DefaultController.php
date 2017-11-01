<?php
namespace AppBundle\Controller\Localidades;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $objRequest)
    {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
//         echo "<pre>";
//         \Doctrine\Common\Util\Debug::dump($this->getUser()->getRoles());
//         exit();
        return $this->render(
            'AppBundle:Localidades:index.html.twig',
            [
                'desktop' => [
                    'icons' => [
                        [
                            'left' => 20,
                            'top' => 20,
                            'href' => '#icon_dock_country',
                            'src' => '/bundles/app/css/jquery/desktop/images/icons/icon_32_country.png',
                            'text' => 'País'
                        ],
                        [
                            'left' => 20,
                            'top' => 100,
                            'href' => '#icon_dock_province',
                            'src' => '/bundles/app/css/jquery/desktop/images/icons/icon_32_province.png',
                            'text' => 'Estado'
                        ],
                        [
                            'left' => 20,
                            'top' => 180,
                            'href' => '#icon_dock_city',
                            'src' => '/bundles/app/css/jquery/desktop/images/icons/icon_32_city_map.png',
                            'text' => 'Cidade'
                        ]
                    ],
                    'windows' => [
                        [
                            'id' => 'window_country',
                            'window_inner' => [
                                'text' => 'Build: TK421',
                                'window_top' => [
                                    'float_left'=> [
                                        'text' => 'País',
                                        'image' => '<img src="/bundles/app/css/jquery/desktop/images/icons/icon_16_country.png" />'
                                    ],
                                    'float_right'=> [
                                        'href' => 'icon_dock_country'
                                    ],
                                ],
                                'window_content' => []
                            ]
                        ],
                        [
                            'id' => 'window_province',
                            'window_inner' => [
                                'text' => 'Build: TK421',
                                'window_top' => [
                                    'float_left'=> [
                                        'text' => 'Estado',
                                        'image' => '<img src="/bundles/app/css/jquery/desktop/images/icons/icon_16_province.png" />'
                                    ],
                                    'float_right'=> [
                                        'href' => 'icon_dock_province'
                                    ],
                                ],
                                'window_content' => []
                            ]
                        ],
                        [
                            'id' => 'window_city',
                            'window_inner' => [
                                'text' => 'Build: TK421',
                                'window_top' => [
                                    'float_left'=> [
                                        'text' => 'Cidade',
                                        'image' => '<img src="/bundles/app/css/jquery/desktop/images/icons/icon_16_city_map.png" />'
                                    ],
                                    'float_right'=> [
                                        'href' => 'icon_dock_city'
                                    ],
                                ],
                                'window_content' => []
                            ]
                        ]
                    ]
                ],
                'dock' => [
                    [
                        'id' => 'icon_dock_country',
                        'href' => '#window_country',
                        'src' => '/bundles/app/css/jquery/desktop/images/icons/icon_22_country.png',
                        'text' => 'País'
                    ],
                    [
                        'id' => 'icon_dock_province',
                        'href' => '#window_province',
                        'src' => '/bundles/app/css/jquery/desktop/images/icons/icon_22_province.png',
                        'text' => 'Estado'
                    ],
                    [
                        'id' => 'icon_dock_city',
                        'href' => '#window_city',
                        'src' => '/bundles/app/css/jquery/desktop/images/icons/icon_22_city_map.png',
                        'text' => 'Cidade'
                    ]
                ],
                'bar_top' => [
                    [
                        'href' => '/',
                        'text' => 'Home',//Domínio de vendas no mercado
                        'ul'=> []
                    ]
                ]
            ]
        );
    }
}