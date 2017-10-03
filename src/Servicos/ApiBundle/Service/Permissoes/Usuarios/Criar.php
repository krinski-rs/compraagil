<?php
namespace Servicos\ApiBundle\Service\Permissoes\Usuarios;

use Doctrine\Bundle\DoctrineBundle\Registry;
use Servicos\ApiBundle\Strategy\Permissoes\Usuarios as StrategyPermissoesUsuarios;
use FOS\RestBundle\Request\ParamFetcher;
use Servicos\ApiBundle\Entity\Permissoes\Usuario;
use Servicos\ApiBundle\Entity\Permissoes\UsuarioPermissao;
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
//         $objCriarUsuarioPermissaoStrategy = new StrategyPermissoesUsuarios\CriarUsuarioPermissaoStrategy($objParamFetcher);
//         $objCriarUsuarioPermissaoStrategy->createQueryBuilder($this->objEntityManager->createQueryBuilder());
//         return $objUsuario;
    }
    
    public function addPermissao(int $usuaCodigoid, int $permCodigoid, ParamFetcher $objParamFetcher)
    {
        try {
            $objCriarUsuarioPermissaoStrategy = new StrategyPermissoesUsuarios\CriarUsuarioPermissaoStrategy($objParamFetcher);
            $objCriarUsuarioPermissaoStrategy->getParam('usuapermValor', true);
            
            $objUsuario = $this->objEntityManager->getRepository('ServicosApiBundle:Permissoes\Usuario')->find($usuaCodigoid);
            
            if(!$objUsuario instanceof Usuario){
                throw new \Exception("Usuário $usuaCodigoid não encontrado.");
            }
            
            $objPermissao = $this->objEntityManager->getRepository('ServicosApiBundle:Permissoes\Permissao')->find($permCodigoid);
            if(!$objPermissao instanceof Permissao){
                throw new \Exception("Permissão $permCodigoid não encontrada.");
            }
            
            $objUsuarioPermissao = new UsuarioPermissao();
            $objUsuarioPermissao->setPermCodigoid($objPermissao);
            $objUsuarioPermissao->setUsuaCodigoid($objUsuario);
            $objUsuarioPermissao->setUsuapermDatacadastro(new \DateTime());
            $objUsuarioPermissao->setUsuapermValor($objCriarUsuarioPermissaoStrategy->getParam('usuapermValor', true));
            
            $objUsuario->addUsuarioPermissao($objUsuarioPermissao);
            $this->objEntityManager->merge($objUsuario);
            $this->objEntityManager->flush();
            
            return $objUsuarioPermissao;
        } catch (\Exception $ex) {
            throw $ex;
        }
    }
}