<?php
namespace Servicos\ApiBundle\Service\CatalagoServicos\Aplicacoes;

use Doctrine\Bundle\DoctrineBundle\Registry;
use FOS\RestBundle\Request\ParamFetcher;
use Servicos\ApiBundle\Strategy\CatalagoServicos\Aplicacoes as StrategyCatalagoServicosAplicacoes;
use Servicos\ApiBundle\Entity\CatalogoServico\Aplicacao;

class Criar {
    /**
     * 
     * @var \Doctrine\ORM\EntityManager
     */
    private $objEntityManager = NULL;
    
    public function __construct(Registry $objRegistry)
    {
        $this->objEntityManager = $objRegistry->getManager('default');
    }
    
    public function save(ParamFetcher $objParamFetcher)
    {
        try {
            $objCriarStrategy = new StrategyCatalagoServicosAplicacoes\CriarStrategy($objParamFetcher);
            $objAplicacao = new Aplicacao();
            $objAplicacao->setApliApelido(trim($objCriarStrategy->getParam('apliApelido', true)));
            $objAplicacao->setApliAtivo(TRUE);
            $objAplicacao->setApliDatacadastro(new \DateTime());
            $objAplicacao->setApliKey(trim($objCriarStrategy->getParam('apliKey', true)));
            $objAplicacao->setApliLeft(1);
            $objAplicacao->setApliNome(trim($objCriarStrategy->getParam('apliNome', true)));
            $objAplicacao->setApliRemovido(FALSE);
            $objAplicacao->setApliRight(2);
            $objAplicacao->setApliTipo(trim($objCriarStrategy->getParam('apliTipo', true)));
            $objAplicacao->setApliUrl(trim($objCriarStrategy->getParam('apliUrl', true)));
            $objAplicacao->setApliParentCodigoid($objCriarStrategy->getParam('apliParentCodigoid'));
            $this->objEntityManager->persist($objAplicacao);
            $this->objEntityManager->flush();
            return $objAplicacao;
        } catch (\Exception $e) {
            throw $e;
        }
    }
}