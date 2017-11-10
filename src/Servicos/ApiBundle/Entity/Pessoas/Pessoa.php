<?php

namespace Servicos\ApiBundle\Entity\Pessoas;

/**
 * Pessoa
 */
class Pessoa
{
    /**
     * @var integer
     */
    private $pessCodigoid;

    /**
     * @var tipo_pessoa
     */
    private $pessTipo;

    /**
     * @var sexo_pessoa
     */
    private $pessSexo;

    /**
     * @var nacionalidade_pessoa
     */
    private $pessNacionalidade;

    /**
     * @var string
     */
    private $pessNome;

    /**
     * @var \DateTime
     */
    private $pessDataaniversario;

    /**
     * @var boolean
     */
    private $pessAtivo = true;

    /**
     * @var boolean
     */
    private $pessRemovido = false;

    /**
     * @var \DateTime
     */
    private $pessDatacadastro = 'now()';

    /**
     * @var \Servicos\ApiBundle\Entity\Pessoas\Segmento
     */
    private $segmCodigoid;


    /**
     * Get pessCodigoid
     *
     * @return integer
     */
    public function getPessCodigoid()
    {
        return $this->pessCodigoid;
    }

    /**
     * Set pessTipo
     *
     * @param tipo_pessoa $pessTipo
     *
     * @return Pessoa
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
     * Set pessSexo
     *
     * @param sexo_pessoa $pessSexo
     *
     * @return Pessoa
     */
    public function setPessSexo($pessSexo)
    {
        $this->pessSexo = $pessSexo;

        return $this;
    }

    /**
     * Get pessSexo
     *
     * @return sexo_pessoa
     */
    public function getPessSexo()
    {
        return $this->pessSexo;
    }

    /**
     * Set pessNacionalidade
     *
     * @param nacionalidade_pessoa $pessNacionalidade
     *
     * @return Pessoa
     */
    public function setPessNacionalidade($pessNacionalidade)
    {
        $this->pessNacionalidade = $pessNacionalidade;

        return $this;
    }

    /**
     * Get pessNacionalidade
     *
     * @return nacionalidade_pessoa
     */
    public function getPessNacionalidade()
    {
        return $this->pessNacionalidade;
    }

    /**
     * Set pessNome
     *
     * @param string $pessNome
     *
     * @return Pessoa
     */
    public function setPessNome($pessNome)
    {
        $this->pessNome = $pessNome;

        return $this;
    }

    /**
     * Get pessNome
     *
     * @return string
     */
    public function getPessNome()
    {
        return $this->pessNome;
    }

    /**
     * Set pessDataaniversario
     *
     * @param \DateTime $pessDataaniversario
     *
     * @return Pessoa
     */
    public function setPessDataaniversario($pessDataaniversario)
    {
        $this->pessDataaniversario = $pessDataaniversario;

        return $this;
    }

    /**
     * Get pessDataaniversario
     *
     * @return \DateTime
     */
    public function getPessDataaniversario()
    {
        return $this->pessDataaniversario;
    }

    /**
     * Set pessAtivo
     *
     * @param boolean $pessAtivo
     *
     * @return Pessoa
     */
    public function setPessAtivo($pessAtivo)
    {
        $this->pessAtivo = $pessAtivo;

        return $this;
    }

    /**
     * Get pessAtivo
     *
     * @return boolean
     */
    public function getPessAtivo()
    {
        return $this->pessAtivo;
    }

    /**
     * Set pessRemovido
     *
     * @param boolean $pessRemovido
     *
     * @return Pessoa
     */
    public function setPessRemovido($pessRemovido)
    {
        $this->pessRemovido = $pessRemovido;

        return $this;
    }

    /**
     * Get pessRemovido
     *
     * @return boolean
     */
    public function getPessRemovido()
    {
        return $this->pessRemovido;
    }

    /**
     * Set pessDatacadastro
     *
     * @param \DateTime $pessDatacadastro
     *
     * @return Pessoa
     */
    public function setPessDatacadastro($pessDatacadastro)
    {
        $this->pessDatacadastro = $pessDatacadastro;

        return $this;
    }

    /**
     * Get pessDatacadastro
     *
     * @return \DateTime
     */
    public function getPessDatacadastro()
    {
        return $this->pessDatacadastro;
    }

    /**
     * Set segmCodigoid
     *
     * @param \Servicos\ApiBundle\Entity\Pessoas\Segmento $segmCodigoid
     *
     * @return Pessoa
     */
    public function setSegmCodigoid(\Servicos\ApiBundle\Entity\Pessoas\Segmento $segmCodigoid = null)
    {
        $this->segmCodigoid = $segmCodigoid;

        return $this;
    }

    /**
     * Get segmCodigoid
     *
     * @return \Servicos\ApiBundle\Entity\Pessoas\Segmento
     */
    public function getSegmCodigoid()
    {
        return $this->segmCodigoid;
    }
}
