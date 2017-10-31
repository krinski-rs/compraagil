<?php
namespace Servicos\ApiBundle\Service\Permissoes\Usuarios;

use Doctrine\Bundle\DoctrineBundle\Registry;
use Servicos\ApiBundle\Strategy\Permissoes\Usuarios as StrategyPermissoesUsuarios;
use FOS\RestBundle\Request\ParamFetcher;
use Servicos\ApiBundle\Entity\Permissoes\Usuario;
use Servicos\ApiBundle\Entity\Permissoes\UsuarioPermissao;
use Servicos\ApiBundle\Entity\Permissoes\Permissao;
use Servicos\ApiBundle\Entity\Permissoes\Grupo;

class Listar {
    /**
     *
     * @var \Doctrine\ORM\EntityManager
     */
    private $objEntityManager = NULL;
    
    public function __construct(Registry $objRegistry)
    {
        $this->objEntityManager = $objRegistry->getManager('default');
    }
    
//     public function listar(ParamFetcher $objParamFetcher)
    public function listar()
    {
        $arrayUsuarios = ['data' => [], 'total' => 0];
        $arrayUsuario = $this->objEntityManager->getRepository('ServicosApiBundle:Permissoes\Usuario')->findAll();
        if(count($arrayUsuario)){
            reset($arrayUsuario);
            while($objUsuario = current($arrayUsuario)){
                
                $arrayUsuarios['data'][] = [
                    ['text' => ''],
                    ['text' => $objUsuario->getId()],
                    ['text' => $objUsuario->getUsername()],
                    ['text' => ($objUsuario->getAtivo() ? 'SIM' : 'NÃO')],
                    ['text' => $objUsuario->getEmail()],
                    ['text' => $objUsuario->getDataCadastro()->format("d/m/Y H:i:s")]
                ];
                
                next($arrayUsuario);
            }
            $arrayUsuarios['total'] = count($arrayUsuario);
        }
        return $arrayUsuarios;
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
            \Doctrine\Common\Util\Debug::dump($ex);
            throw $ex;
        }
    }
    
    public function addGrupo(int $usuaCodigoid, int $grupCodigoid, ParamFetcher $objParamFetcher)
    {
        try {
            $objUsuario = $this->objEntityManager->getRepository('ServicosApiBundle:Permissoes\Usuario')->find($usuaCodigoid);
            
            if(!$objUsuario instanceof Usuario){
                throw new \Exception("Usuário $usuaCodigoid não encontrado.");
            }
            
            $objGrupo = $this->objEntityManager->getRepository('ServicosApiBundle:Permissoes\Grupo')->find($grupCodigoid);
            if(!$objGrupo instanceof Grupo){
                throw new \Exception("Grupo $grupCodigoid não encontrado.");
            }
            
            $objUsuario->addGrupCodigoid($objGrupo);
            $this->objEntityManager->merge($objUsuario);
            $this->objEntityManager->flush();
            
            return $objUsuario;
        } catch (\Exception $ex) {
            throw $ex;
        }
    }
}