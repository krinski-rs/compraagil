<?php
namespace Servicos\ApiBundle\Util;

use Servicos\ApiBundle\Entity\Permissoes\Usuario;

final class ParsePermissoes
{
    private $objUsuario = NULL;
    
    public function __construct(Usuario $objUsuario)
    {
        $this->objUsuario = $objUsuario;
    }
    
    public function getRules()
    {
        
    }
}