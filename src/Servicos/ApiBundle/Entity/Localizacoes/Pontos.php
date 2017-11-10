<?php

namespace Servicos\ApiBundle\Entity\Localizacoes;

/**
 * Pontos
 */
class Pontos
{
    /**
     * @var integer
     */
    private $pontCodigoid;

    /**
     * @var point
     */
    private $pontPoint;

    /**
     * @var \DateTime
     */
    private $pontDatacadastro = 'now()';

    /**
     * @var \Servicos\ApiBundle\Entity\Localizacoes\ViabilidadesDataCenter
     */
    private $viabilidadesDataCenter;

    /**
     * @var \Servicos\ApiBundle\Entity\Localizacoes\ViabilidadesSwitch
     */
    private $viabilidadesSwitch;

    /**
     * @var \Servicos\ApiBundle\Entity\Localizacoes\ViabilidadeSpliter
     */
    private $viabilidadeSpliter;


    /**
     * Get pontCodigoid
     *
     * @return integer
     */
    public function getPontCodigoid()
    {
        return $this->pontCodigoid;
    }

    /**
     * Set pontPoint
     *
     * @param point $pontPoint
     *
     * @return Pontos
     */
    public function setPontPoint($pontPoint)
    {
        $this->pontPoint = $pontPoint;

        return $this;
    }

    /**
     * Get pontPoint
     *
     * @return point
     */
    public function getPontPoint()
    {
        return $this->pontPoint;
    }

    /**
     * Set pontDatacadastro
     *
     * @param \DateTime $pontDatacadastro
     *
     * @return Pontos
     */
    public function setPontDatacadastro($pontDatacadastro)
    {
        $this->pontDatacadastro = $pontDatacadastro;

        return $this;
    }

    /**
     * Get pontDatacadastro
     *
     * @return \DateTime
     */
    public function getPontDatacadastro()
    {
        return $this->pontDatacadastro;
    }

    /**
     * Set viabilidadesDataCenter
     *
     * @param \Servicos\ApiBundle\Entity\Localizacoes\ViabilidadesDataCenter $viabilidadesDataCenter
     *
     * @return Pontos
     */
    public function setViabilidadesDataCenter(\Servicos\ApiBundle\Entity\Localizacoes\ViabilidadesDataCenter $viabilidadesDataCenter = null)
    {
        $this->viabilidadesDataCenter = $viabilidadesDataCenter;

        return $this;
    }

    /**
     * Get viabilidadesDataCenter
     *
     * @return \Servicos\ApiBundle\Entity\Localizacoes\ViabilidadesDataCenter
     */
    public function getViabilidadesDataCenter()
    {
        return $this->viabilidadesDataCenter;
    }

    /**
     * Set viabilidadesSwitch
     *
     * @param \Servicos\ApiBundle\Entity\Localizacoes\ViabilidadesSwitch $viabilidadesSwitch
     *
     * @return Pontos
     */
    public function setViabilidadesSwitch(\Servicos\ApiBundle\Entity\Localizacoes\ViabilidadesSwitch $viabilidadesSwitch = null)
    {
        $this->viabilidadesSwitch = $viabilidadesSwitch;

        return $this;
    }

    /**
     * Get viabilidadesSwitch
     *
     * @return \Servicos\ApiBundle\Entity\Localizacoes\ViabilidadesSwitch
     */
    public function getViabilidadesSwitch()
    {
        return $this->viabilidadesSwitch;
    }

    /**
     * Set viabilidadeSpliter
     *
     * @param \Servicos\ApiBundle\Entity\Localizacoes\ViabilidadeSpliter $viabilidadeSpliter
     *
     * @return Pontos
     */
    public function setViabilidadeSpliter(\Servicos\ApiBundle\Entity\Localizacoes\ViabilidadeSpliter $viabilidadeSpliter = null)
    {
        $this->viabilidadeSpliter = $viabilidadeSpliter;

        return $this;
    }

    /**
     * Get viabilidadeSpliter
     *
     * @return \Servicos\ApiBundle\Entity\Localizacoes\ViabilidadeSpliter
     */
    public function getViabilidadeSpliter()
    {
        return $this->viabilidadeSpliter;
    }
}
