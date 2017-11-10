<?php

namespace Servicos\ApiBundle\Entity\Pessoas;

/**
 * TipoRelacionamento
 */
class TipoRelacionamento
{
    /**
     * @var integer
     */
    private $tiporelaCodigoid;

    /**
     * @var tipo_pessoa
     */
    private $pessTipo;

    /**
     * @var string
     */
    private $tiporelaNome;

    /**
     * @var boolean
     */
    private $tiporelaAtivo = true;

    /**
     * @var boolean
     */
    private $tiporelaRemovido = false;

    /**
     * @var \DateTime
     */
    private $tiporelaDatacadastro = 'now()';


    /**
     * Get tiporelaCodigoid
     *
     * @return integer
     */
    public function getTiporelaCodigoid()
    {
        return $this->tiporelaCodigoid;
    }

    /**
     * Set pessTipo
     *
     * @param tipo_pessoa $pessTipo
     *
     * @return TipoRelacionamento
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
     * Set tiporelaNome
     *
     * @param string $tiporelaNome
     *
     * @return TipoRelacionamento
     */
    public function setTiporelaNome($tiporelaNome)
    {
        $this->tiporelaNome = $tiporelaNome;

        return $this;
    }

    /**
     * Get tiporelaNome
     *
     * @return string
     */
    public function getTiporelaNome()
    {
        return $this->tiporelaNome;
    }

    /**
     * Set tiporelaAtivo
     *
     * @param boolean $tiporelaAtivo
     *
     * @return TipoRelacionamento
     */
    public function setTiporelaAtivo($tiporelaAtivo)
    {
        $this->tiporelaAtivo = $tiporelaAtivo;

        return $this;
    }

    /**
     * Get tiporelaAtivo
     *
     * @return boolean
     */
    public function getTiporelaAtivo()
    {
        return $this->tiporelaAtivo;
    }

    /**
     * Set tiporelaRemovido
     *
     * @param boolean $tiporelaRemovido
     *
     * @return TipoRelacionamento
     */
    public function setTiporelaRemovido($tiporelaRemovido)
    {
        $this->tiporelaRemovido = $tiporelaRemovido;

        return $this;
    }

    /**
     * Get tiporelaRemovido
     *
     * @return boolean
     */
    public function getTiporelaRemovido()
    {
        return $this->tiporelaRemovido;
    }

    /**
     * Set tiporelaDatacadastro
     *
     * @param \DateTime $tiporelaDatacadastro
     *
     * @return TipoRelacionamento
     */
    public function setTiporelaDatacadastro($tiporelaDatacadastro)
    {
        $this->tiporelaDatacadastro = $tiporelaDatacadastro;

        return $this;
    }

    /**
     * Get tiporelaDatacadastro
     *
     * @return \DateTime
     */
    public function getTiporelaDatacadastro()
    {
        return $this->tiporelaDatacadastro;
    }
}
