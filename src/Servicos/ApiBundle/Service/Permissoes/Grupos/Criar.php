<?php
namespace Servicos\ApiBundle\Service\Permissoes\Grupos;

use Doctrine\Bundle\DoctrineBundle\Registry;
use FOS\RestBundle\Request\ParamFetcher;
use Servicos\ApiBundle\Entity\Permissoes\Grupo;
use Servicos\ApiBundle\Strategy\Permissoes\Grupos as StrategyPermissoesGrupos;
use Servicos\ApiBundle\Entity\Permissoes\Permissao;
use Servicos\ApiBundle\Entity\Permissoes\GrupoPermissao;

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
            $objCriarStrategy = new StrategyPermissoesGrupos\CriarStrategy($objParamFetcher);
            $objGrupo = new Grupo();
            $objGrupo->setGrupDatacadastro(new \DateTime());
            $objGrupo->setGrupDescricao(trim($objCriarStrategy->getParam('grupDescricao', true)));
            $objGrupo->setGrupNome(trim($objCriarStrategy->getParam('grupDescricao', true)));
            $this->objEntityManager->persist($objGrupo);
            $this->objEntityManager->flush();
            return $objGrupo;
        } catch (\Exception $e) {
            throw $e;
        }
    }
    
    public function addPermissao(int $grupCodigoid, int $permCodigoid, ParamFetcher $objParamFetcher)
    {
        try {
            $objCriarGrupoPermissaoStrategy = new StrategyPermissoesGrupos\CriarGrupoPermissaoStrategy($objParamFetcher);
            
            $objGrupo = $this->objEntityManager->getRepository('ServicosApiBundle:Permissoes\Grupo')->find($grupCodigoid);
            
            if(!$objGrupo instanceof Grupo){
                throw new \Exception("Grupo $grupCodigoid não encontrado.");
            }
            
            $objPermissao = $this->objEntityManager->getRepository('ServicosApiBundle:Permissoes\Permissao')->find($permCodigoid);
            if(!$objPermissao instanceof Permissao){
                throw new \Exception("Permissão $permCodigoid não encontrada.");
            }
            
            $objGrupoPermissao = new GrupoPermissao();
            $objGrupoPermissao->setGrupCodigoid($objGrupo);
            $objGrupoPermissao->setGruppermDatacadastro(new \DateTime());
            $objGrupoPermissao->setGruppermValor($objCriarGrupoPermissaoStrategy->getParam('gruppermValor', true));
            $objGrupoPermissao->setPermCodigoid($objPermissao);
            
            $objGrupo->addGrupoPermissao($objGrupoPermissao);
            
            $this->objEntityManager->merge($objGrupo);
            $this->objEntityManager->flush();
            
            return $objGrupoPermissao;
        } catch (\Exception $ex) {
            throw $ex;
        }
    }
}