<?php

namespace Servicos\ApiBundle\Entity\Localizacoes;

/**
 * ViabilidadesPop
 */
class ViabilidadesPop
{
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $circulos;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->circulos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add circulo
     *
     * @param \Servicos\ApiBundle\Entity\Localizacoes\Circulos $circulo
     *
     * @return ViabilidadesPop
     */
    public function addCirculo(\Servicos\ApiBundle\Entity\Localizacoes\Circulos $circulo)
    {
        $this->circulos[] = $circulo;

        return $this;
    }

    /**
     * Remove circulo
     *
     * @param \Servicos\ApiBundle\Entity\Localizacoes\Circulos $circulo
     */
    public function removeCirculo(\Servicos\ApiBundle\Entity\Localizacoes\Circulos $circulo)
    {
        $this->circulos->removeElement($circulo);
    }

    /**
     * Get circulos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCirculos()
    {
        return $this->circulos;
    }
}
