<?php

namespace Servicos\ApiBundle\Entity\Localizacoes;

/**
 * Linhas
 */
class Linhas
{
    /**
     * @var integer
     */
    private $linhCodigoid;

    /**
     * @var lseg
     */
    private $linhLinha;

    /**
     * @var \DateTime
     */
    private $linhDatacadastro = 'now()';

    /**
     * @var \Servicos\ApiBundle\Entity\Localizacoes\Viabilidades
     */
    private $viabCodigoid;


    /**
     * Get linhCodigoid
     *
     * @return integer
     */
    public function getLinhCodigoid()
    {
        return $this->linhCodigoid;
    }

    /**
     * Set linhLinha
     *
     * @param lseg $linhLinha
     *
     * @return Linhas
     */
    public function setLinhLinha($linhLinha)
    {
        $this->linhLinha = $linhLinha;

        return $this;
    }

    /**
     * Get linhLinha
     *
     * @return lseg
     */
    public function getLinhLinha()
    {
        return $this->linhLinha;
    }

    /**
     * Set linhDatacadastro
     *
     * @param \DateTime $linhDatacadastro
     *
     * @return Linhas
     */
    public function setLinhDatacadastro($linhDatacadastro)
    {
        $this->linhDatacadastro = $linhDatacadastro;

        return $this;
    }

    /**
     * Get linhDatacadastro
     *
     * @return \DateTime
     */
    public function getLinhDatacadastro()
    {
        return $this->linhDatacadastro;
    }

    /**
     * Set viabCodigoid
     *
     * @param \Servicos\ApiBundle\Entity\Localizacoes\Viabilidades $viabCodigoid
     *
     * @return Linhas
     */
    public function setViabCodigoid(\Servicos\ApiBundle\Entity\Localizacoes\Viabilidades $viabCodigoid = null)
    {
        $this->viabCodigoid = $viabCodigoid;

        return $this;
    }

    /**
     * Get viabCodigoid
     *
     * @return \Servicos\ApiBundle\Entity\Localizacoes\Viabilidades
     */
    public function getViabCodigoid()
    {
        return $this->viabCodigoid;
    }
}
