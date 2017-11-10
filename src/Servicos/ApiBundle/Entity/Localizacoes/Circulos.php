<?php

namespace Servicos\ApiBundle\Entity\Localizacoes;

/**
 * Circulos
 */
class Circulos
{
    /**
     * @var integer
     */
    private $circCodigodi;

    /**
     * @var circle
     */
    private $circCircle;

    /**
     * @var \DateTime
     */
    private $circDatacadastro = 'now()';

    /**
     * @var \Servicos\ApiBundle\Entity\Localizacoes\ViabilidadesPop
     */
    private $viabilidadesPop;

    /**
     * @var \Servicos\ApiBundle\Entity\Localizacoes\ViabilidadesCaixaEmenda
     */
    private $viabilidadesCaixaEmenda;

    /**
     * @var \Servicos\ApiBundle\Entity\Localizacoes\ViabilidadesCircuito
     */
    private $viabilidadesCircuito;


    /**
     * Get circCodigodi
     *
     * @return integer
     */
    public function getCircCodigodi()
    {
        return $this->circCodigodi;
    }

    /**
     * Set circCircle
     *
     * @param circle $circCircle
     *
     * @return Circulos
     */
    public function setCircCircle($circCircle)
    {
        $this->circCircle = $circCircle;

        return $this;
    }

    /**
     * Get circCircle
     *
     * @return circle
     */
    public function getCircCircle()
    {
        return $this->circCircle;
    }

    /**
     * Set circDatacadastro
     *
     * @param \DateTime $circDatacadastro
     *
     * @return Circulos
     */
    public function setCircDatacadastro($circDatacadastro)
    {
        $this->circDatacadastro = $circDatacadastro;

        return $this;
    }

    /**
     * Get circDatacadastro
     *
     * @return \DateTime
     */
    public function getCircDatacadastro()
    {
        return $this->circDatacadastro;
    }

    /**
     * Set viabilidadesPop
     *
     * @param \Servicos\ApiBundle\Entity\Localizacoes\ViabilidadesPop $viabilidadesPop
     *
     * @return Circulos
     */
    public function setViabilidadesPop(\Servicos\ApiBundle\Entity\Localizacoes\ViabilidadesPop $viabilidadesPop = null)
    {
        $this->viabilidadesPop = $viabilidadesPop;

        return $this;
    }

    /**
     * Get viabilidadesPop
     *
     * @return \Servicos\ApiBundle\Entity\Localizacoes\ViabilidadesPop
     */
    public function getViabilidadesPop()
    {
        return $this->viabilidadesPop;
    }

    /**
     * Set viabilidadesCaixaEmenda
     *
     * @param \Servicos\ApiBundle\Entity\Localizacoes\ViabilidadesCaixaEmenda $viabilidadesCaixaEmenda
     *
     * @return Circulos
     */
    public function setViabilidadesCaixaEmenda(\Servicos\ApiBundle\Entity\Localizacoes\ViabilidadesCaixaEmenda $viabilidadesCaixaEmenda = null)
    {
        $this->viabilidadesCaixaEmenda = $viabilidadesCaixaEmenda;

        return $this;
    }

    /**
     * Get viabilidadesCaixaEmenda
     *
     * @return \Servicos\ApiBundle\Entity\Localizacoes\ViabilidadesCaixaEmenda
     */
    public function getViabilidadesCaixaEmenda()
    {
        return $this->viabilidadesCaixaEmenda;
    }

    /**
     * Set viabilidadesCircuito
     *
     * @param \Servicos\ApiBundle\Entity\Localizacoes\ViabilidadesCircuito $viabilidadesCircuito
     *
     * @return Circulos
     */
    public function setViabilidadesCircuito(\Servicos\ApiBundle\Entity\Localizacoes\ViabilidadesCircuito $viabilidadesCircuito = null)
    {
        $this->viabilidadesCircuito = $viabilidadesCircuito;

        return $this;
    }

    /**
     * Get viabilidadesCircuito
     *
     * @return \Servicos\ApiBundle\Entity\Localizacoes\ViabilidadesCircuito
     */
    public function getViabilidadesCircuito()
    {
        return $this->viabilidadesCircuito;
    }
}
