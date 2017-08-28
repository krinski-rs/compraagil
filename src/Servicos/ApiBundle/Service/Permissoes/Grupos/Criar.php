<?php
namespace Servicos\ApiBundle\Service\Permissoes\Grupos;

use Doctrine\Bundle\DoctrineBundle\Registry;
use Servicos\ApiBundle\Strategy\Permissoes\Grupos as StrategyPermissoesGrupos;
use FOS\RestBundle\Request\ParamFetcher;

class Criar {
    /**
     * 
     * @var \Doctrine\ORM\EntityManager
     */
    private $objEntityManager = NULL;
    
    public function __construct(Registry $objRegistry){
        $this->objEntityManager = $objRegistry->getManager('default');
    }
    
    public function validate(ParamFetcher $objParamFetcher){
        $objCriarStrategy = new StrategyPermissoesGrupos\CriarStrategy($objParamFetcher);
        echo "\n" . $objCriarStrategy->getParam('grupNome', true);
        echo "\n" . $objCriarStrategy->getParam('grupDescricao', true);
        echo "\n";
    }
}