<?php

namespace Servicos\ApiBundle\Entity\CatalogoServico;

use Doctrine\Common\Persistence\Event\LifecycleEventArgs;

/**
 * Aplicacao
 */
class Aplicacao
{
    /**
     * @var integer
     */
    private $apliParentCodigoid;
    
    /**
     * @var integer
     */
    private $apliCodigoid;
    
    /**
     * @var string
     */
    private $apliNome;

    /**
     * @var string
     */
    private $apliApelido;

    /**
     * @var string
     */
    private $apliKey;

    /**
     * @var boolean
     */
    private $apliAtivo = true;

    /**
     * @var boolean
     */
    private $apliRemovido = false;

    /**
     * @var string
     */
    private $apliUrl;

    /**
     * @var tipo_aplicacao
     */
    private $apliTipo;

    /**
     * @var \DateTime
     */
    private $apliDatacadastro = 'now()';

    /**
     * @var integer
     */
    private $apliLeft = '1';

    /**
     * @var integer
     */
    private $apliRight = '1';


    /**
     * Get apliCodigoid
     *
     * @return integer
     */
    public function getApliCodigoid()
    {
        return $this->apliCodigoid;
    }

    /**
     * Set apliParentCodigoid
     *
     * @return Aplicacao
     */
    public function setApliParentCodigoid($apliParentCodigoid)
    {
        $this->apliParentCodigoid = $apliParentCodigoid;
        return $this;
    }
    
    /**
     * Get apliParentCodigoid
     *
     * @return integer
     */
    public function getApliParentCodigoid()
    {
        return $this->apliParentCodigoid;
    }
    
    /**
     * Set apliNome
     *
     * @param string $apliNome
     *
     * @return Aplicacao
     */
    public function setApliNome($apliNome)
    {
        $this->apliNome = $apliNome;

        return $this;
    }

    /**
     * Get apliNome
     *
     * @return string
     */
    public function getApliNome()
    {
        return $this->apliNome;
    }

    /**
     * Set apliApelido
     *
     * @param string $apliApelido
     *
     * @return Aplicacao
     */
    public function setApliApelido($apliApelido)
    {
        $this->apliApelido = $apliApelido;

        return $this;
    }

    /**
     * Get apliApelido
     *
     * @return string
     */
    public function getApliApelido()
    {
        return $this->apliApelido;
    }

    /**
     * Set apliKey
     *
     * @param string $apliKey
     *
     * @return Aplicacao
     */
    public function setApliKey($apliKey)
    {
        $this->apliKey = $apliKey;

        return $this;
    }

    /**
     * Get apliKey
     *
     * @return string
     */
    public function getApliKey()
    {
        return $this->apliKey;
    }

    /**
     * Set apliAtivo
     *
     * @param boolean $apliAtivo
     *
     * @return Aplicacao
     */
    public function setApliAtivo($apliAtivo)
    {
        $this->apliAtivo = $apliAtivo;

        return $this;
    }

    /**
     * Get apliAtivo
     *
     * @return boolean
     */
    public function getApliAtivo()
    {
        return $this->apliAtivo;
    }

    /**
     * Set apliRemovido
     *
     * @param boolean $apliRemovido
     *
     * @return Aplicacao
     */
    public function setApliRemovido($apliRemovido)
    {
        $this->apliRemovido = $apliRemovido;

        return $this;
    }

    /**
     * Get apliRemovido
     *
     * @return boolean
     */
    public function getApliRemovido()
    {
        return $this->apliRemovido;
    }

    /**
     * Set apliUrl
     *
     * @param string $apliUrl
     *
     * @return Aplicacao
     */
    public function setApliUrl($apliUrl)
    {
        $this->apliUrl = $apliUrl;

        return $this;
    }

    /**
     * Get apliUrl
     *
     * @return string
     */
    public function getApliUrl()
    {
        return $this->apliUrl;
    }

    /**
     * Set apliTipo
     *
     * @param tipo_aplicacao $apliTipo
     *
     * @return Aplicacao
     */
    public function setApliTipo($apliTipo)
    {
        $this->apliTipo = $apliTipo;

        return $this;
    }

    /**
     * Get apliTipo
     *
     * @return tipo_aplicacao
     */
    public function getApliTipo()
    {
        return $this->apliTipo;
    }

    /**
     * Set apliDatacadastro
     *
     * @param \DateTime $apliDatacadastro
     *
     * @return Aplicacao
     */
    public function setApliDatacadastro($apliDatacadastro)
    {
        $this->apliDatacadastro = $apliDatacadastro;

        return $this;
    }

    /**
     * Get apliDatacadastro
     *
     * @return \DateTime
     */
    public function getApliDatacadastro()
    {
        return $this->apliDatacadastro;
    }

    /**
     * Set apliLeft
     *
     * @param integer $apliLeft
     *
     * @return Aplicacao
     */
    public function setApliLeft($apliLeft)
    {
        $this->apliLeft = $apliLeft;

        return $this;
    }

    /**
     * Get apliLeft
     *
     * @return integer
     */
    public function getApliLeft()
    {
        return $this->apliLeft;
    }

    /**
     * Set apliRight
     *
     * @param integer $apliRight
     *
     * @return Aplicacao
     */
    public function setApliRight($apliRight)
    {
        $this->apliRight = $apliRight;

        return $this;
    }

    /**
     * Get apliRight
     *
     * @return integer
     */
    public function getApliRight()
    {
        return $this->apliRight;
    }
}
