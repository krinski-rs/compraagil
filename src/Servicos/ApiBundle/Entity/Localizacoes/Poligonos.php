<?php

namespace Servicos\ApiBundle\Entity\Localizacoes;

/**
 * Poligonos
 */
class Poligonos
{
    /**
     * @var integer
     */
    private $poliCodigoid;

    /**
     * @var polygon
     */
    private $poliPolygon;

    /**
     * @var \DateTime
     */
    private $poliDatacadastro = 'now()';

    /**
     * @var \Servicos\ApiBundle\Entity\Localizacoes\viabilidadesLpu
     */
    private $viabilidadesLpu;


    /**
     * Get poliCodigoid
     *
     * @return integer
     */
    public function getPoliCodigoid()
    {
        return $this->poliCodigoid;
    }

    /**
     * Set poliPolygon
     *
     * @param polygon $poliPolygon
     *
     * @return Poligonos
     */
    public function setPoliPolygon($poliPolygon)
    {
        $this->poliPolygon = $poliPolygon;

        return $this;
    }

    /**
     * Get poliPolygon
     *
     * @return polygon
     */
    public function getPoliPolygon()
    {
        return $this->poliPolygon;
    }

    /**
     * Set poliDatacadastro
     *
     * @param \DateTime $poliDatacadastro
     *
     * @return Poligonos
     */
    public function setPoliDatacadastro($poliDatacadastro)
    {
        $this->poliDatacadastro = $poliDatacadastro;

        return $this;
    }

    /**
     * Get poliDatacadastro
     *
     * @return \DateTime
     */
    public function getPoliDatacadastro()
    {
        return $this->poliDatacadastro;
    }

    /**
     * Set viabilidadesLpu
     *
     * @param \Servicos\ApiBundle\Entity\Localizacoes\viabilidadesLpu $viabilidadesLpu
     *
     * @return Poligonos
     */
    public function setViabilidadesLpu(\Servicos\ApiBundle\Entity\Localizacoes\viabilidadesLpu $viabilidadesLpu = null)
    {
        $this->viabilidadesLpu = $viabilidadesLpu;

        return $this;
    }

    /**
     * Get viabilidadesLpu
     *
     * @return \Servicos\ApiBundle\Entity\Localizacoes\viabilidadesLpu
     */
    public function getViabilidadesLpu()
    {
        return $this->viabilidadesLpu;
    }
}
