<?php

namespace Servicos\ApiBundle\Entity\Localizacoes;

/**
 * Caminhos
 */
class Caminhos
{
    /**
     * @var integer
     */
    private $camiCodigoid;

    /**
     * @var path
     */
    private $camiPath;

    /**
     * @var \DateTime
     */
    private $camiDatacadastro = 'now()';

    /**
     * @var \Servicos\ApiBundle\Entity\Localizacoes\Viabilidades
     */
    private $viabCodigoid;


    /**
     * Get camiCodigoid
     *
     * @return integer
     */
    public function getCamiCodigoid()
    {
        return $this->camiCodigoid;
    }

    /**
     * Set camiPath
     *
     * @param path $camiPath
     *
     * @return Caminhos
     */
    public function setCamiPath($camiPath)
    {
        $this->camiPath = $camiPath;

        return $this;
    }

    /**
     * Get camiPath
     *
     * @return path
     */
    public function getCamiPath()
    {
        return $this->camiPath;
    }

    /**
     * Set camiDatacadastro
     *
     * @param \DateTime $camiDatacadastro
     *
     * @return Caminhos
     */
    public function setCamiDatacadastro($camiDatacadastro)
    {
        $this->camiDatacadastro = $camiDatacadastro;

        return $this;
    }

    /**
     * Get camiDatacadastro
     *
     * @return \DateTime
     */
    public function getCamiDatacadastro()
    {
        return $this->camiDatacadastro;
    }

    /**
     * Set viabCodigoid
     *
     * @param \Servicos\ApiBundle\Entity\Localizacoes\Viabilidades $viabCodigoid
     *
     * @return Caminhos
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
