<?php

namespace Servicos\ApiBundle\Entity\Pessoas;

/**
 * Endereco
 */
class Endereco
{
    /**
     * @var integer
     */
    private $endeCodigoid;

    /**
     * @var string
     */
    private $endeNumero;

    /**
     * @var string
     */
    private $endeLogradouro;

    /**
     * @var string
     */
    private $endeComplemento;

    /**
     * @var boolean
     */
    private $endeAtivo = true;

    /**
     * @var boolean
     */
    private $endeRemovido = false;

    /**
     * @var point
     */
    private $endePonto;

    /**
     * @var \DateTime
     */
    private $endeDatacadastro = 'now()';

    /**
     * @var \Servicos\ApiBundle\Entity\Pessoas\Pessoa
     */
    private $pessCodigoid;

    /**
     * @var \Servicos\ApiBundle\Entity\Localidades\Cidade
     */
    private $cidaCodigoid;

    /**
     * @var \Servicos\ApiBundle\Entity\Pessoas\TipoEndereco
     */
    private $tipoendeCodigoid;


    /**
     * Get endeCodigoid
     *
     * @return integer
     */
    public function getEndeCodigoid()
    {
        return $this->endeCodigoid;
    }

    /**
     * Set endeNumero
     *
     * @param string $endeNumero
     *
     * @return Endereco
     */
    public function setEndeNumero($endeNumero)
    {
        $this->endeNumero = $endeNumero;

        return $this;
    }

    /**
     * Get endeNumero
     *
     * @return string
     */
    public function getEndeNumero()
    {
        return $this->endeNumero;
    }

    /**
     * Set endeLogradouro
     *
     * @param string $endeLogradouro
     *
     * @return Endereco
     */
    public function setEndeLogradouro($endeLogradouro)
    {
        $this->endeLogradouro = $endeLogradouro;

        return $this;
    }

    /**
     * Get endeLogradouro
     *
     * @return string
     */
    public function getEndeLogradouro()
    {
        return $this->endeLogradouro;
    }

    /**
     * Set endeComplemento
     *
     * @param string $endeComplemento
     *
     * @return Endereco
     */
    public function setEndeComplemento($endeComplemento)
    {
        $this->endeComplemento = $endeComplemento;

        return $this;
    }

    /**
     * Get endeComplemento
     *
     * @return string
     */
    public function getEndeComplemento()
    {
        return $this->endeComplemento;
    }

    /**
     * Set endeAtivo
     *
     * @param boolean $endeAtivo
     *
     * @return Endereco
     */
    public function setEndeAtivo($endeAtivo)
    {
        $this->endeAtivo = $endeAtivo;

        return $this;
    }

    /**
     * Get endeAtivo
     *
     * @return boolean
     */
    public function getEndeAtivo()
    {
        return $this->endeAtivo;
    }

    /**
     * Set endeRemovido
     *
     * @param boolean $endeRemovido
     *
     * @return Endereco
     */
    public function setEndeRemovido($endeRemovido)
    {
        $this->endeRemovido = $endeRemovido;

        return $this;
    }

    /**
     * Get endeRemovido
     *
     * @return boolean
     */
    public function getEndeRemovido()
    {
        return $this->endeRemovido;
    }

    /**
     * Set endePonto
     *
     * @param point $endePonto
     *
     * @return Endereco
     */
    public function setEndePonto($endePonto)
    {
        $this->endePonto = $endePonto;

        return $this;
    }

    /**
     * Get endePonto
     *
     * @return point
     */
    public function getEndePonto()
    {
        return $this->endePonto;
    }

    /**
     * Set endeDatacadastro
     *
     * @param \DateTime $endeDatacadastro
     *
     * @return Endereco
     */
    public function setEndeDatacadastro($endeDatacadastro)
    {
        $this->endeDatacadastro = $endeDatacadastro;

        return $this;
    }

    /**
     * Get endeDatacadastro
     *
     * @return \DateTime
     */
    public function getEndeDatacadastro()
    {
        return $this->endeDatacadastro;
    }

    /**
     * Set pessCodigoid
     *
     * @param \Servicos\ApiBundle\Entity\Pessoas\Pessoa $pessCodigoid
     *
     * @return Endereco
     */
    public function setPessCodigoid(\Servicos\ApiBundle\Entity\Pessoas\Pessoa $pessCodigoid = null)
    {
        $this->pessCodigoid = $pessCodigoid;

        return $this;
    }

    /**
     * Get pessCodigoid
     *
     * @return \Servicos\ApiBundle\Entity\Pessoas\Pessoa
     */
    public function getPessCodigoid()
    {
        return $this->pessCodigoid;
    }

    /**
     * Set cidaCodigoid
     *
     * @param \Servicos\ApiBundle\Entity\Localidades\Cidade $cidaCodigoid
     *
     * @return Endereco
     */
    public function setCidaCodigoid(\Servicos\ApiBundle\Entity\Localidades\Cidade $cidaCodigoid = null)
    {
        $this->cidaCodigoid = $cidaCodigoid;

        return $this;
    }

    /**
     * Get cidaCodigoid
     *
     * @return \Servicos\ApiBundle\Entity\Localidades\Cidade
     */
    public function getCidaCodigoid()
    {
        return $this->cidaCodigoid;
    }

    /**
     * Set tipoendeCodigoid
     *
     * @param \Servicos\ApiBundle\Entity\Pessoas\TipoEndereco $tipoendeCodigoid
     *
     * @return Endereco
     */
    public function setTipoendeCodigoid(\Servicos\ApiBundle\Entity\Pessoas\TipoEndereco $tipoendeCodigoid = null)
    {
        $this->tipoendeCodigoid = $tipoendeCodigoid;

        return $this;
    }

    /**
     * Get tipoendeCodigoid
     *
     * @return \Servicos\ApiBundle\Entity\Pessoas\TipoEndereco
     */
    public function getTipoendeCodigoid()
    {
        return $this->tipoendeCodigoid;
    }
}
