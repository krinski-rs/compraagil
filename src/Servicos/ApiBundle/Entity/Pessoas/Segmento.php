<?php

namespace Servicos\ApiBundle\Entity\Pessoas;

/**
 * Segmento
 */
class Segmento
{
    /**
     * @var integer
     */
    private $segmCodigoid;

    /**
     * @var string
     */
    private $segmNome;

    /**
     * @var string
     */
    private $segmDescricao;

    /**
     * @var boolean
     */
    private $segmAtivo = true;

    /**
     * @var boolean
     */
    private $segmRemovido = false;

    /**
     * @var \DateTime
     */
    private $segmDatacadastro = 'now()';


    /**
     * Get segmCodigoid
     *
     * @return integer
     */
    public function getSegmCodigoid()
    {
        return $this->segmCodigoid;
    }

    /**
     * Set segmNome
     *
     * @param string $segmNome
     *
     * @return Segmento
     */
    public function setSegmNome($segmNome)
    {
        $this->segmNome = $segmNome;

        return $this;
    }

    /**
     * Get segmNome
     *
     * @return string
     */
    public function getSegmNome()
    {
        return $this->segmNome;
    }

    /**
     * Set segmDescricao
     *
     * @param string $segmDescricao
     *
     * @return Segmento
     */
    public function setSegmDescricao($segmDescricao)
    {
        $this->segmDescricao = $segmDescricao;

        return $this;
    }

    /**
     * Get segmDescricao
     *
     * @return string
     */
    public function getSegmDescricao()
    {
        return $this->segmDescricao;
    }

    /**
     * Set segmAtivo
     *
     * @param boolean $segmAtivo
     *
     * @return Segmento
     */
    public function setSegmAtivo($segmAtivo)
    {
        $this->segmAtivo = $segmAtivo;

        return $this;
    }

    /**
     * Get segmAtivo
     *
     * @return boolean
     */
    public function getSegmAtivo()
    {
        return $this->segmAtivo;
    }

    /**
     * Set segmRemovido
     *
     * @param boolean $segmRemovido
     *
     * @return Segmento
     */
    public function setSegmRemovido($segmRemovido)
    {
        $this->segmRemovido = $segmRemovido;

        return $this;
    }

    /**
     * Get segmRemovido
     *
     * @return boolean
     */
    public function getSegmRemovido()
    {
        return $this->segmRemovido;
    }

    /**
     * Set segmDatacadastro
     *
     * @param \DateTime $segmDatacadastro
     *
     * @return Segmento
     */
    public function setSegmDatacadastro($segmDatacadastro)
    {
        $this->segmDatacadastro = $segmDatacadastro;

        return $this;
    }

    /**
     * Get segmDatacadastro
     *
     * @return \DateTime
     */
    public function getSegmDatacadastro()
    {
        return $this->segmDatacadastro;
    }
}

