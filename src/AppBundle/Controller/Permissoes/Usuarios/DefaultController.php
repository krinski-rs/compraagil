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
        //         echo "<pre>";
        //         \Doctrine\Common\Util\Debug::dump($this->getUser()->getRoles());
        //         exit();
        return $this->render(
            'AppBundle:Usuarios:window.html.twig',
            [
                'window_content' => [
                    'text'=> 'Hello. You look nice today!asdfasdfasdfsadf',
                    'table'=> [
                        'thead' => [
                            [
                                [
                                    'class' => 'shrink',
                                    'text' => '&nbsp;'
                                ],
                                ['text' => 'Name'],
                                ['text' => 'Date Modified'],
                                ['text' => 'Date Created'],
                                ['text' => 'Size'],
                                ['text' => 'Kind']
                            ]
                        ],
                        'tbody' => [
                            [
                                ['text' => '<img src="/bundles/app/css/jquery/desktop/images/icons/icon_16_drive.png" />'],
                                ['text' => 'Hard Drive'],
                                ['text' => 'Today'],
                                ['text' => '&mdash;'],
                                ['text' => '200 GB'],
                                ['text' => 'Volume']
                            ],
                            [
                                ['text' => '<img src="/bundles/app/css/jquery/desktop/images/icons/icon_16_disc.png" />'],
                                ['text' => 'Audio CD'],
                                ['text' => '&mdash;'],
                                ['text' => '&mdash;'],
                                ['text' => '2.92 GB'],
                                ['text' => 'Media']
                            ],
                            [
                                ['text' => '<img src="/bundles/app/css/jquery/desktop/images/icons/icon_16_network.png" />'],
                                ['text' => 'Network'],
                                ['text' => '&mdash;'],
                                ['text' => '&mdash;'],
                                ['text' => '&mdash;'],
                                ['text' => 'LAN']
                            ],
                            [
                                ['text' => '<img src="/bundles/app/css/jquery/desktop/images/icons/icon_16_folder_remote.png" />'],
                                ['text' => 'Shared Project Files'],
                                ['text' => 'Yesterday'],
                                ['text' => '12/29/08'],
                                ['text' => '524 MB'],
                                ['text' => 'Folder']
                            ],
                            [
                                ['text' => '<img src="/bundles/app/css/jquery/desktop/images/icons/icon_16_documents.png" />'],
                                ['text' => 'Documents'],
                                ['text' => 'Yesterday'],
                                ['text' => '12/29/08'],
                                ['text' => '524 MB'],
                                ['text' => 'Folder']
                            ],
                            [
                                ['text' => '<img src="/bundles/app/css/jquery/desktop/images/icons/icon_16_system.png" />'],
                                ['text' => 'Preferences'],
                                ['text' => '&mdash;'],
                                ['text' => '&mdash;'],
                                ['text' => '&mdash;'],
                                ['text' => 'System']
                            ],
                            [
                                ['text' => '<img src="/bundles/app/css/jquery/desktop/images/icons/icon_16_trash.png" />'],
                                ['text' => 'Trash'],
                                ['text' => 'Today'],
                                ['text' => '&mdash;'],
                                ['text' => '&mdash;'],
                                ['text' => 'Bin']
                            ]
                        ]
                    ]
                ]
            ]
        );
    }
}