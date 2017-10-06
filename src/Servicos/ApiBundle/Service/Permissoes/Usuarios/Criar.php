<?php
namespace Servicos\ApiBundle\Service\Permissoes\Usuarios;

use Doctrine\Bundle\DoctrineBundle\Registry;
use Servicos\ApiBundle\Strategy\Permissoes\Usuarios as StrategyPermissoesUsuarios;
use FOS\RestBundle\Request\ParamFetcher;
use Servicos\ApiBundle\Entity\Permissoes\Usuario;
use Servicos\ApiBundle\Entity\Permissoes\UsuarioPermissao;
use Servicos\ApiBundle\Entity\Permissoes\Permissao;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Servicos\ApiBundle\Entity\Permissoes\Grupo;

class Criar {
    /**
     *
     * @var \Doctrine\ORM\EntityManager
     */
    private $objEntityManager = NULL;
    
    /**
     *
     * @var \Symfony\Component\Security\Core\Tests\Encoder\PasswordEncoder
     */
    private $objUserPasswordEncoder = NULL;
    
    public function __construct(Registry $objRegistry, UserPasswordEncoder $objUserPasswordEncoder)
    {
        $this->objEntityManager = $objRegistry->getManager('default');
        $this->objUserPasswordEncoder = $objUserPasswordEncoder;
    }
    
    public function save(ParamFetcher $objParamFetcher)
    {
        $objCriarStrategy = new StrategyPermissoesUsuarios\CriarStrategy($objParamFetcher);
        
        $objUsuario = new Usuario();
        $objUsuario->setAtivo(TRUE);
        $objUsuario->setDataCadastro(new \DateTime());
        $objUsuario->setEmail($objCriarStrategy->getParam('email', true));
        $objUsuario->setSalt(uniqid(mt_rand()));
        
        $password = $this->objUserPasswordEncoder->encodePassword($objUsuario, $objCriarStrategy->getParam('password', true).$objUsuario->getSalt());
        
        $objUsuario->setPassword($password);
        $objUsuario->setRemovido(FALSE);
        $objUsuario->setUsername($objCriarStrategy->getParam('username', true));
        $this->objEntityManager->persist($objUsuario);
        $this->objEntityManager->flush();
        return $objUsuario;
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