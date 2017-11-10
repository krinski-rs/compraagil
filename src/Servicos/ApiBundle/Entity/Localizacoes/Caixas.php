<?php

namespace Servicos\ApiBundle\Entity\Localizacoes;

/**
 * Caixas
 */
class Caixas
{
    /**
     * @var integer
     */
    private $caixCodigoid;

    /**
     * @var box
     */
    private $caixBox;

    /**
     * @var \DateTime
     */
    private $caixDatacadastro = 'now()';

    /**
     * @var \Servicos\ApiBundle\Entity\Localizacoes\Viabilidades
     */
    private $viabCodigoid;


    /**
     * Get caixCodigoid
     *
     * @return integer
     */
    public function getCaixCodigoid()
    {
        return $this->caixCodigoid;
    }

    /**
     * Set caixBox
     *
     * @param box $caixBox
     *
     * @return Caixas
     */
    public function setCaixBox($caixBox)
    {
        $this->caixBox = $caixBox;

        return $this;
    }

    /**
     * Get caixBox
     *
     * @return box
     */
    public function getCaixBox()
    {
        return $this->caixBox;
    }

    /**
     * Set caixDatacadastro
     *
     * @param \DateTime $caixDatacadastro
     *
     * @return Caixas
     */
    public function setCaixDatacadastro($caixDatacadastro)
    {
        $this->caixDatacadastro = $caixDatacadastro;

        return $this;
    }

    /**
     * Get caixDatacadastro
     *
     * @return \DateTime
     */
    public function getCaixDatacadastro()
    {
        return $this->caixDatacadastro;
    }

    /**
     * Set viabCodigoid
     *
     * @param \Servicos\ApiBundle\Entity\Localizacoes\Viabilidades $viabCodigoid
     *
     * @return Caixas
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
