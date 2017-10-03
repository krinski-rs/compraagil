<?php

namespace Servicos\ApiBundle\Entity\Pessoas;

/**
 * TipoEndereco
 */
class TipoEndereco
{
    /**
     * @var integer
     */
    private $tipoendeCodigoid;

    /**
     * @var tipo_pessoa
     */
    private $pessTipo;

    /**
     * @var string
     */
    private $tipoendeNome;

    /**
     * @var boolean
     */
    private $tipoendeAtivo = true;

    /**
     * @var boolean
     */
    private $tipoendeRemovido = false;


    /**
     * Get tipoendeCodigoid
     *
     * @return integer
     */
    public function getTipoendeCodigoid()
    {
        return $this->tipoendeCodigoid;
    }

    /**
     * Set pessTipo
     *
     * @param tipo_pessoa $pessTipo
     *
     * @return TipoEndereco
     */
    public function setPessTipo($pessTipo)
    {
        $this->pessTipo = $pessTipo;

        return $this;
    }

    /**
     * Get pessTipo
     *
     * @return tipo_pessoa
     */
    public function getPessTipo()
    {
        return $this->pessTipo;
    }

    /**
     * Set tipoendeNome
     *
     * @param string $tipoendeNome
     *
     * @return TipoEndereco
     */
    public function setTipoendeNome($tipoendeNome)
    {
        $this->tipoendeNome = $tipoendeNome;

        return $this;
    }

    /**
     * Get tipoendeNome
     *
     * @return string
     */
    public function getTipoendeNome()
    {
        return $this->tipoendeNome;
    }

    /**
     * Set tipoendeAtivo
     *
     * @param boolean $tipoendeAtivo
     *
     * @return TipoEndereco
     */
    public function setTipoendeAtivo($tipoendeAtivo)
    {
        $this->tipoendeAtivo = $tipoendeAtivo;

        return $this;
    }

    /**
     * Get tipoendeAtivo
     *
     * @return boolean
     */
    public function getTipoendeAtivo()
    {
        return $this->tipoendeAtivo;
    }

    /**
     * Set tipoendeRemovido
     *
     * @param boolean $tipoendeRemovido
     *
     * @return TipoEndereco
     */
    public function setTipoendeRemovido($tipoendeRemovido)
    {
        $this->tipoendeRemovido = $tipoendeRemovido;

        return $this;
    }

    /**
     * Get tipoendeRemovido
     *
     * @return boolean
     */
    public function getTipoendeRemovido()
    {
        return $this->tipoendeRemovido;
    }
}

