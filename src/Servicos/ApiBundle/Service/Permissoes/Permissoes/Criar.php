<?php
namespace Servicos\ApiBundle\Service\Permissoes\Permissoes;

use Doctrine\Bundle\DoctrineBundle\Registry;
use Servicos\ApiBundle\Strategy\Permissoes\Permissoes as StrategyPermissoesPermissoes;
use FOS\RestBundle\Request\ParamFetcher;
use Servicos\ApiBundle\Entity\Permissoes\Permissao;

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
            $objCriarStrategy = new StrategyPermissoesPermissoes\CriarStrategy($objParamFetcher);
            $objPermissao = new Permissao();
            $objPermissao->setPermDatacadastro(new \DateTime());
            $objPermissao->setPermDescricao(trim($objCriarStrategy->getParam('permDescricao', true)));
            $objPermissao->setPermNome(trim($objCriarStrategy->getParam('permNome', true)));
            $this->objEntityManager->persist($objPermissao);
            $this->objEntityManager->flush();
            return $objPermissao;
        } catch (\Exception $e) {
            throw $e;
        }
    }
}