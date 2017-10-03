<?php

namespace Servicos\ApiBundle\Entity\Pessoas;

/**
 * Documento
 */
class Documento
{
    /**
     * @var integer
     */
    private $docuCodigoid;

    /**
     * @var boolean
     */
    private $docuAtivo = true;

    /**
     * @var boolean
     */
    private $docuRemovido = false;

    /**
     * @var \DateTime
     */
    private $docuDatacadastro = 'now()';

    /**
     * @var \Servicos\ApiBundle\Entity\Pessoas\Pessoa
     */
    private $pessCodigoid;

    /**
     * @var \Servicos\ApiBundle\Entity\Pessoas\TipoDocumento
     */
    private $tipodocuCodigoid;


    /**
     * Get docuCodigoid
     *
     * @return integer
     */
    public function getDocuCodigoid()
    {
        return $this->docuCodigoid;
    }

    /**
     * Set docuAtivo
     *
     * @param boolean $docuAtivo
     *
     * @return Documento
     */
    public function setDocuAtivo($docuAtivo)
    {
        $this->docuAtivo = $docuAtivo;

        return $this;
    }

    /**
     * Get docuAtivo
     *
     * @return boolean
     */
    public function getDocuAtivo()
    {
        return $this->docuAtivo;
    }

    /**
     * Set docuRemovido
     *
     * @param boolean $docuRemovido
     *
     * @return Documento
     */
    public function setDocuRemovido($docuRemovido)
    {
        $this->docuRemovido = $docuRemovido;

        return $this;
    }

    /**
     * Get docuRemovido
     *
     * @return boolean
     */
    public function getDocuRemovido()
    {
        return $this->docuRemovido;
    }

    /**
     * Set docuDatacadastro
     *
     * @param \DateTime $docuDatacadastro
     *
     * @return Documento
     */
    public function setDocuDatacadastro($docuDatacadastro)
    {
        $this->docuDatacadastro = $docuDatacadastro;

        return $this;
    }

    /**
     * Get docuDatacadastro
     *
     * @return \DateTime
     */
    public function getDocuDatacadastro()
    {
        return $this->docuDatacadastro;
    }

    /**
     * Set pessCodigoid
     *
     * @param \Servicos\ApiBundle\Entity\Pessoas\Pessoa $pessCodigoid
     *
     * @return Documento
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
     * Set tipodocuCodigoid
     *
     * @param \Servicos\ApiBundle\Entity\Pessoas\TipoDocumento $tipodocuCodigoid
     *
     * @return Documento
     */
    public function setTipodocuCodigoid(\Servicos\ApiBundle\Entity\Pessoas\TipoDocumento $tipodocuCodigoid = null)
    {
        $this->tipodocuCodigoid = $tipodocuCodigoid;

        return $this;
    }

    /**
     * Get tipodocuCodigoid
     *
     * @return \Servicos\ApiBundle\Entity\Pessoas\TipoDocumento
     */
    public function getTipodocuCodigoid()
    {
        return $this->tipodocuCodigoid;
    }
}

