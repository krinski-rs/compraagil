<?php

namespace Servicos\ApiBundle\Entity\Localizacoes;

/**
 * ViabilidadeSpliter
 */
class ViabilidadeSpliter extends Viabilidades
{
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $pontos;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pontos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ponto
     *
     * @param \Servicos\ApiBundle\Entity\Localizacoes\Pontos $ponto
     *
     * @return ViabilidadeSpliter
     */
    public function addPonto(\Servicos\ApiBundle\Entity\Localizacoes\Pontos $ponto)
    {
        $this->pontos[] = $ponto;

        return $this;
    }

    /**
     * Remove ponto
     *
     * @param \Servicos\ApiBundle\Entity\Localizacoes\Pontos $ponto
     */
    public function removePonto(\Servicos\ApiBundle\Entity\Localizacoes\Pontos $ponto)
    {
        $this->pontos->removeElement($ponto);
    }

    /**
     * Get pontos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPontos()
    {
        return $this->pontos;
    }
}
