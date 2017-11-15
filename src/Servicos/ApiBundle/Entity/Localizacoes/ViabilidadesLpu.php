<?php

namespace Servicos\ApiBundle\Entity\Localizacoes;

/**
 * ViabilidadesLpu
 */
class ViabilidadesLpu extends Viabilidades
{
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $poligonos;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->poligonos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add poligono
     *
     * @param \Servicos\ApiBundle\Entity\Localizacoes\Poligonos $poligono
     *
     * @return ViabilidadesLpu
     */
    public function addPoligono(\Servicos\ApiBundle\Entity\Localizacoes\Poligonos $poligono)
    {
        $this->poligonos[] = $poligono;

        return $this;
    }

    /**
     * Remove poligono
     *
     * @param \Servicos\ApiBundle\Entity\Localizacoes\Poligonos $poligono
     */
    public function removePoligono(\Servicos\ApiBundle\Entity\Localizacoes\Poligonos $poligono)
    {
        $this->poligonos->removeElement($poligono);
    }

    /**
     * Get poligonos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPoligonos()
    {
        return $this->poligonos;
    }
}
