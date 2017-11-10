<?php

namespace Servicos\ApiBundle\Entity\Localidades;

/**
 * Cidade
 */
class Cidade
{
    /**
     * @var integer
     */
    private $cidaCodigoid;

    /**
     * @var string
     */
    private $cidaNome;

    /**
     * @var string
     */
    private $cidaCodigoDiscagem;

    /**
     * @var polygon
     */
    private $cidaPoligono;

    /**
     * @var \DateTime
     */
    private $cidaDatacadastro = 'now()';

    /**
     * @var \Servicos\ApiBundle\Entity\Localidades\Estado
     */
    private $estaCodigoid;


    /**
     * Get cidaCodigoid
     *
     * @return integer
     */
    public function getCidaCodigoid()
    {
        return $this->cidaCodigoid;
    }

    /**
     * Set cidaNome
     *
     * @param string $cidaNome
     *
     * @return Cidade
     */
    public function setCidaNome($cidaNome)
    {
        $this->cidaNome = $cidaNome;

        return $this;
    }

    /**
     * Get cidaNome
     *
     * @return string
     */
    public function getCidaNome()
    {
        return $this->cidaNome;
    }

    /**
     * Set cidaCodigoDiscagem
     *
     * @param string $cidaCodigoDiscagem
     *
     * @return Cidade
     */
    public function setCidaCodigoDiscagem($cidaCodigoDiscagem)
    {
        $this->cidaCodigoDiscagem = $cidaCodigoDiscagem;

        return $this;
    }

    /**
     * Get cidaCodigoDiscagem
     *
     * @return string
     */
    public function getCidaCodigoDiscagem()
    {
        return $this->cidaCodigoDiscagem;
    }

    /**
     * Set cidaPoligono
     *
     * @param polygon $cidaPoligono
     *
     * @return Cidade
     */
    public function setCidaPoligono($cidaPoligono)
    {
        $this->cidaPoligono = $cidaPoligono;

        return $this;
    }

    /**
     * Get cidaPoligono
     *
     * @return polygon
     */
    public function getCidaPoligono()
    {
        return $this->cidaPoligono;
    }

    /**
     * Set cidaDatacadastro
     *
     * @param \DateTime $cidaDatacadastro
     *
     * @return Cidade
     */
    public function setCidaDatacadastro($cidaDatacadastro)
    {
        $this->cidaDatacadastro = $cidaDatacadastro;

        return $this;
    }

    /**
     * Get cidaDatacadastro
     *
     * @return \DateTime
     */
    public function getCidaDatacadastro()
    {
        return $this->cidaDatacadastro;
    }

    /**
     * Set estaCodigoid
     *
     * @param \Servicos\ApiBundle\Entity\Localidades\Estado $estaCodigoid
     *
     * @return Cidade
     */
    public function setEstaCodigoid(\Servicos\ApiBundle\Entity\Localidades\Estado $estaCodigoid = null)
    {
        $this->estaCodigoid = $estaCodigoid;

        return $this;
    }

    /**
     * Get estaCodigoid
     *
     * @return \Servicos\ApiBundle\Entity\Localidades\Estado
     */
    public function getEstaCodigoid()
    {
        return $this->estaCodigoid;
    }
}
