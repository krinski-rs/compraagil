<?php

namespace Servicos\ApiBundle\Entity\Permissoes;

/**
 * UsuarioPermissao
 */
class UsuarioPermissao
{
    /**
     * @var integer
     */
    private $usuapermValor;

    /**
     * @var \DateTime
     */
    private $usuapermDatacadastro = 'now()';

    /**
     * @var \Servicos\ApiBundle\Entity\Permissoes\Permissao
     */
    private $permCodigoid;

    /**
     * @var \Servicos\ApiBundle\Entity\Permissoes\Usuario
     */
    private $usuaCodigoid;


    /**
     * Set usuapermValor
     *
     * @param integer $usuapermValor
     *
     * @return UsuarioPermissao
     */
    public function setUsuapermValor($usuapermValor)
    {
        $this->usuapermValor = $usuapermValor;

        return $this;
    }

    /**
     * Get usuapermValor
     *
     * @return integer
     */
    public function getUsuapermValor()
    {
        return $this->usuapermValor;
    }

    /**
     * Set usuapermDatacadastro
     *
     * @param \DateTime $usuapermDatacadastro
     *
     * @return UsuarioPermissao
     */
    public function setUsuapermDatacadastro($usuapermDatacadastro)
    {
        $this->usuapermDatacadastro = $usuapermDatacadastro;

        return $this;
    }

    /**
     * Get usuapermDatacadastro
     *
     * @return \DateTime
     */
    public function getUsuapermDatacadastro()
    {
        return $this->usuapermDatacadastro;
    }

    /**
     * Set permCodigoid
     *
     * @param \Servicos\ApiBundle\Entity\Permissoes\Permissao $permCodigoid
     *
     * @return UsuarioPermissao
     */
    public function setPermCodigoid(\Servicos\ApiBundle\Entity\Permissoes\Permissao $permCodigoid)
    {
        $this->permCodigoid = $permCodigoid;

        return $this;
    }

    /**
     * Get permCodigoid
     *
     * @return \Servicos\ApiBundle\Entity\Permissoes\Permissao
     */
    public function getPermCodigoid()
    {
        return $this->permCodigoid;
    }

    /**
     * Set usuaCodigoid
     *
     * @param \Servicos\ApiBundle\Entity\Permissoes\Usuario $usuaCodigoid
     *
     * @return UsuarioPermissao
     */
    public function setUsuaCodigoid(\Servicos\ApiBundle\Entity\Permissoes\Usuario $usuaCodigoid)
    {
        $this->usuaCodigoid = $usuaCodigoid;

        return $this;
    }

    /**
     * Get usuaCodigoid
     *
     * @return \Servicos\ApiBundle\Entity\Permissoes\Usuario
     */
    public function getUsuaCodigoid()
    {
        return $this->usuaCodigoid;
    }
}
