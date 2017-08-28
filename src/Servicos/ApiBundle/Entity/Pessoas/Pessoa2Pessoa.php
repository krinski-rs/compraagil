<?php

namespace Servicos\ApiBundle\Entity\Pessoas;

/**
 * Pessoa2Pessoa
 */
class Pessoa2Pessoa
{
    /**
     * @var boolean
     */
    private $pess2pessAtivo = true;

    /**
     * @var boolean
     */
    private $pess2pessRemovido = false;

    /**
     * @var \DateTime
     */
    private $pess2pessDatacadastro = 'now()';

    /**
     * @var \Servicos\ApiBundle\Entity\Pessoas\Pessoa
     */
    private $pessMandatario;

    /**
     * @var \Servicos\ApiBundle\Entity\Pessoas\Pessoa
     */
    private $pessSubordinado;

    /**
     * @var \Servicos\ApiBundle\Entity\Pessoas\TipoRelacionamento
     */
    private $tiporelaCodigoid;


    /**
     * Set pess2pessAtivo
     *
     * @param boolean $pess2pessAtivo
     *
     * @return Pessoa2Pessoa
     */
    public function setPess2pessAtivo($pess2pessAtivo)
    {
        $this->pess2pessAtivo = $pess2pessAtivo;

        return $this;
    }

    /**
     * Get pess2pessAtivo
     *
     * @return boolean
     */
    public function getPess2pessAtivo()
    {
        return $this->pess2pessAtivo;
    }

    /**
     * Set pess2pessRemovido
     *
     * @param boolean $pess2pessRemovido
     *
     * @return Pessoa2Pessoa
     */
    public function setPess2pessRemovido($pess2pessRemovido)
    {
        $this->pess2pessRemovido = $pess2pessRemovido;

        return $this;
    }

    /**
     * Get pess2pessRemovido
     *
     * @return boolean
     */
    public function getPess2pessRemovido()
    {
        return $this->pess2pessRemovido;
    }

    /**
     * Set pess2pessDatacadastro
     *
     * @param \DateTime $pess2pessDatacadastro
     *
     * @return Pessoa2Pessoa
     */
    public function setPess2pessDatacadastro($pess2pessDatacadastro)
    {
        $this->pess2pessDatacadastro = $pess2pessDatacadastro;

        return $this;
    }

    /**
     * Get pess2pessDatacadastro
     *
     * @return \DateTime
     */
    public function getPess2pessDatacadastro()
    {
        return $this->pess2pessDatacadastro;
    }

    /**
     * Set pessMandatario
     *
     * @param \Servicos\ApiBundle\Entity\Pessoas\Pessoa $pessMandatario
     *
     * @return Pessoa2Pessoa
     */
    public function setPessMandatario(\Servicos\ApiBundle\Entity\Pessoas\Pessoa $pessMandatario)
    {
        $this->pessMandatario = $pessMandatario;

        return $this;
    }

    /**
     * Get pessMandatario
     *
     * @return \Servicos\ApiBundle\Entity\Pessoas\Pessoa
     */
    public function getPessMandatario()
    {
        return $this->pessMandatario;
    }

    /**
     * Set pessSubordinado
     *
     * @param \Servicos\ApiBundle\Entity\Pessoas\Pessoa $pessSubordinado
     *
     * @return Pessoa2Pessoa
     */
    public function setPessSubordinado(\Servicos\ApiBundle\Entity\Pessoas\Pessoa $pessSubordinado)
    {
        $this->pessSubordinado = $pessSubordinado;

        return $this;
    }

    /**
     * Get pessSubordinado
     *
     * @return \Servicos\ApiBundle\Entity\Pessoas\Pessoa
     */
    public function getPessSubordinado()
    {
        return $this->pessSubordinado;
    }

    /**
     * Set tiporelaCodigoid
     *
     * @param \Servicos\ApiBundle\Entity\Pessoas\TipoRelacionamento $tiporelaCodigoid
     *
     * @return Pessoa2Pessoa
     */
    public function setTiporelaCodigoid(\Servicos\ApiBundle\Entity\Pessoas\TipoRelacionamento $tiporelaCodigoid)
    {
        $this->tiporelaCodigoid = $tiporelaCodigoid;

        return $this;
    }

    /**
     * Get tiporelaCodigoid
     *
     * @return \Servicos\ApiBundle\Entity\Pessoas\TipoRelacionamento
     */
    public function getTiporelaCodigoid()
    {
        return $this->tiporelaCodigoid;
    }
}

