<?php
namespace Servicos\ApiBundle\Service\Permissoes\Grupos;

use Doctrine\Bundle\DoctrineBundle\Registry;
use Servicos\ApiBundle\Strategy\Permissoes\Grupos as StrategyPermissoesGrupos;
use FOS\RestBundle\Request\ParamFetcher;
use Servicos\ApiBundle\Entity\Permissoes\Grupo;

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
        $objCriarStrategy = new StrategyPermissoesGrupos\CriarStrategy($objParamFetcher);
        $objGrupo = new Grupo();
        $objGrupo->setGrupDatacadastro(new \DateTime());
        $objGrupo->setGrupDescricao(trim($objCriarStrategy->getParam('grupDescricao', true)));
        $objGrupo->setGrupNome(trim($objCriarStrategy->getParam('grupDescricao', true)));
        $this->objEntityManager->persist($objGrupo);
        $this->objEntityManager->flush();
        return $objGrupo;
    }
}