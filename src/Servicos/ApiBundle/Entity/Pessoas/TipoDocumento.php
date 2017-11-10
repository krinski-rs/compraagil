<?php

namespace Servicos\ApiBundle\Entity\Pessoas;

/**
 * TipoDocumento
 */
class TipoDocumento
{
    /**
     * @var integer
     */
    private $tipodocuCodigoid;

    /**
     * @var tipo_pessoa
     */
    private $pessTipo;

    /**
     * @var string
     */
    private $tipodocuNome;

    /**
     * @var string
     */
    private $tipodocuDescricao;

    /**
     * @var boolean
     */
    private $tipodocuAtivo = true;

    /**
     * @var boolean
     */
    private $tipodocuRemovido = false;

    /**
     * @var \DateTime
     */
    private $tipodocuDatacadastro = 'now()';


    /**
     * Get tipodocuCodigoid
     *
     * @return integer
     */
    public function getTipodocuCodigoid()
    {
        return $this->tipodocuCodigoid;
    }

    /**
     * Set pessTipo
     *
     * @param tipo_pessoa $pessTipo
     *
     * @return TipoDocumento
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
     * Set tipodocuNome
     *
     * @param string $tipodocuNome
     *
     * @return TipoDocumento
     */
    public function setTipodocuNome($tipodocuNome)
    {
        $this->tipodocuNome = $tipodocuNome;

        return $this;
    }

    /**
     * Get tipodocuNome
     *
     * @return string
     */
    public function getTipodocuNome()
    {
        return $this->tipodocuNome;
    }

    /**
     * Set tipodocuDescricao
     *
     * @param string $tipodocuDescricao
     *
     * @return TipoDocumento
     */
    public function setTipodocuDescricao($tipodocuDescricao)
    {
        $this->tipodocuDescricao = $tipodocuDescricao;

        return $this;
    }

    /**
     * Get tipodocuDescricao
     *
     * @return string
     */
    public function getTipodocuDescricao()
    {
        return $this->tipodocuDescricao;
    }

    /**
     * Set tipodocuAtivo
     *
     * @param boolean $tipodocuAtivo
     *
     * @return TipoDocumento
     */
    public function setTipodocuAtivo($tipodocuAtivo)
    {
        $this->tipodocuAtivo = $tipodocuAtivo;

        return $this;
    }

    /**
     * Get tipodocuAtivo
     *
     * @return boolean
     */
    public function getTipodocuAtivo()
    {
        return $this->tipodocuAtivo;
    }

    /**
     * Set tipodocuRemovido
     *
     * @param boolean $tipodocuRemovido
     *
     * @return TipoDocumento
     */
    public function setTipodocuRemovido($tipodocuRemovido)
    {
        $this->tipodocuRemovido = $tipodocuRemovido;

        return $this;
    }

    /**
     * Get tipodocuRemovido
     *
     * @return boolean
     */
    public function getTipodocuRemovido()
    {
        return $this->tipodocuRemovido;
    }

    /**
     * Set tipodocuDatacadastro
     *
     * @param \DateTime $tipodocuDatacadastro
     *
     * @return TipoDocumento
     */
    public function setTipodocuDatacadastro($tipodocuDatacadastro)
    {
        $this->tipodocuDatacadastro = $tipodocuDatacadastro;

        return $this;
    }

    /**
     * Get tipodocuDatacadastro
     *
     * @return \DateTime
     */
    public function getTipodocuDatacadastro()
    {
        return $this->tipodocuDatacadastro;
    }
}
