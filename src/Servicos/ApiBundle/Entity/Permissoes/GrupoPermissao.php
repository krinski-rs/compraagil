<?php

namespace Servicos\ApiBundle\Entity\Permissoes;

/**
 * GrupoPermissao
 */
class GrupoPermissao
{
    /**
     * @var integer
     */
    private $gruppermValor;

    /**
     * @var \DateTime
     */
    private $gruppermDatacadastro = 'now()';

    /**
     * @var \Servicos\ApiBundle\Entity\Permissoes\Permissao
     */
    private $permCodigoid;

    /**
     * @var \Servicos\ApiBundle\Entity\Permissoes\Grupo
     */
    private $grupCodigoid;


    /**
     * Set gruppermValor
     *
     * @param integer $gruppermValor
     *
     * @return GrupoPermissao
     */
    public function setGruppermValor($gruppermValor)
    {
        $this->gruppermValor = $gruppermValor;

        return $this;
    }

    /**
     * Get gruppermValor
     *
     * @return integer
     */
    public function getGruppermValor()
    {
        return $this->gruppermValor;
    }

    /**
     * Set gruppermDatacadastro
     *
     * @param \DateTime $gruppermDatacadastro
     *
     * @return GrupoPermissao
     */
    public function setGruppermDatacadastro($gruppermDatacadastro)
    {
        $this->gruppermDatacadastro = $gruppermDatacadastro;

        return $this;
    }

    /**
     * Get gruppermDatacadastro
     *
     * @return \DateTime
     */
    public function getGruppermDatacadastro()
    {
        return $this->gruppermDatacadastro;
    }

    /**
     * Set permCodigoid
     *
     * @param \Servicos\ApiBundle\Entity\Permissoes\Permissao $permCodigoid
     *
     * @return GrupoPermissao
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
     * Set grupCodigoid
     *
     * @param \Servicos\ApiBundle\Entity\Permissoes\Grupo $grupCodigoid
     *
     * @return GrupoPermissao
     */
    public function setGrupCodigoid(\Servicos\ApiBundle\Entity\Permissoes\Grupo $grupCodigoid)
    {
        $this->grupCodigoid = $grupCodigoid;

        return $this;
    }

    /**
     * Get grupCodigoid
     *
     * @return \Servicos\ApiBundle\Entity\Permissoes\Grupo
     */
    public function getGrupCodigoid()
    {
        return $this->grupCodigoid;
    }
}
