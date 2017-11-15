<?php

namespace Servicos\ApiBundle\Entity\Localizacoes;

/**
 * Viabilidades
 */
abstract class Viabilidades
{
    /**
     * @var integer
     */
    private $viabCodigoid;

    /**
     * @var string
     */
    private $viabNome;

    /**
     * @var string
     */
    private $viabCor = '#FFFFFF';

    /**
     * @var tipo_ponto
     */
    private $viabTipo;

    /**
     * @var boolean
     */
    private $viabAtivo = true;

    /**
     * @var boolean
     */
    private $viabRemovido = false;

    /**
     * @var \DateTime
     */
    private $viabDatacadastro = 'now()';


    /**
     * Get viabCodigoid
     *
     * @return integer
     */
    public function getViabCodigoid()
    {
        return $this->viabCodigoid;
    }

    /**
     * Set viabNome
     *
     * @param string $viabNome
     *
     * @return Viabilidades
     */
    public function setViabNome($viabNome)
    {
        $this->viabNome = $viabNome;

        return $this;
    }

    /**
     * Get viabNome
     *
     * @return string
     */
    public function getViabNome()
    {
        return $this->viabNome;
    }

    /**
     * Set viabCor
     *
     * @param string $viabCor
     *
     * @return Viabilidades
     */
    public function setViabCor($viabCor)
    {
        $this->viabCor = $viabCor;

        return $this;
    }

    /**
     * Get viabCor
     *
     * @return string
     */
    public function getViabCor()
    {
        return $this->viabCor;
    }

    /**
     * Set viabTipo
     *
     * @param tipo_ponto $viabTipo
     *
     * @return Viabilidades
     */
    public function setViabTipo($viabTipo)
    {
        $this->viabTipo = $viabTipo;

        return $this;
    }

    /**
     * Get viabTipo
     *
     * @return tipo_ponto
     */
    public function getViabTipo()
    {
        return $this->viabTipo;
    }

    /**
     * Set viabAtivo
     *
     * @param boolean $viabAtivo
     *
     * @return Viabilidades
     */
    public function setViabAtivo($viabAtivo)
    {
        $this->viabAtivo = $viabAtivo;

        return $this;
    }

    /**
     * Get viabAtivo
     *
     * @return boolean
     */
    public function getViabAtivo()
    {
        return $this->viabAtivo;
    }

    /**
     * Set viabRemovido
     *
     * @param boolean $viabRemovido
     *
     * @return Viabilidades
     */
    public function setViabRemovido($viabRemovido)
    {
        $this->viabRemovido = $viabRemovido;

        return $this;
    }

    /**
     * Get viabRemovido
     *
     * @return boolean
     */
    public function getViabRemovido()
    {
        return $this->viabRemovido;
    }

    /**
     * Set viabDatacadastro
     *
     * @param \DateTime $viabDatacadastro
     *
     * @return Viabilidades
     */
    public function setViabDatacadastro($viabDatacadastro)
    {
        $this->viabDatacadastro = $viabDatacadastro;

        return $this;
    }

    /**
     * Get viabDatacadastro
     *
     * @return \DateTime
     */
    public function getViabDatacadastro()
    {
        return $this->viabDatacadastro;
    }
}
