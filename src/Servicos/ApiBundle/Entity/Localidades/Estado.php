<?php

namespace Servicos\ApiBundle\Entity\Localidades;

/**
 * Estado
 */
class Estado
{
    /**
     * @var integer
     */
    private $estaCodigoid;

    /**
     * @var string
     */
    private $estaNome;

    /**
     * @var string
     */
    private $estaAcronimo;

    /**
     * @var string
     */
    private $estaCodigoDiscagem;

    /**
     * @var polygon
     */
    private $estaPoligono;

    /**
     * @var \DateTime
     */
    private $estaDatacadastro = 'now()';

    /**
     * @var \Servicos\ApiBundle\Entity\Localidades\Pais
     */
    private $paisCodigoid;


    /**
     * Get estaCodigoid
     *
     * @return integer
     */
    public function getEstaCodigoid()
    {
        return $this->estaCodigoid;
    }

    /**
     * Set estaNome
     *
     * @param string $estaNome
     *
     * @return Estado
     */
    public function setEstaNome($estaNome)
    {
        $this->estaNome = $estaNome;

        return $this;
    }

    /**
     * Get estaNome
     *
     * @return string
     */
    public function getEstaNome()
    {
        return $this->estaNome;
    }

    /**
     * Set estaAcronimo
     *
     * @param string $estaAcronimo
     *
     * @return Estado
     */
    public function setEstaAcronimo($estaAcronimo)
    {
        $this->estaAcronimo = $estaAcronimo;

        return $this;
    }

    /**
     * Get estaAcronimo
     *
     * @return string
     */
    public function getEstaAcronimo()
    {
        return $this->estaAcronimo;
    }

    /**
     * Set estaCodigoDiscagem
     *
     * @param string $estaCodigoDiscagem
     *
     * @return Estado
     */
    public function setEstaCodigoDiscagem($estaCodigoDiscagem)
    {
        $this->estaCodigoDiscagem = $estaCodigoDiscagem;

        return $this;
    }

    /**
     * Get estaCodigoDiscagem
     *
     * @return string
     */
    public function getEstaCodigoDiscagem()
    {
        return $this->estaCodigoDiscagem;
    }

    /**
     * Set estaPoligono
     *
     * @param polygon $estaPoligono
     *
     * @return Estado
     */
    public function setEstaPoligono($estaPoligono)
    {
        $this->estaPoligono = $estaPoligono;

        return $this;
    }

    /**
     * Get estaPoligono
     *
     * @return polygon
     */
    public function getEstaPoligono()
    {
        return $this->estaPoligono;
    }

    /**
     * Set estaDatacadastro
     *
     * @param \DateTime $estaDatacadastro
     *
     * @return Estado
     */
    public function setEstaDatacadastro($estaDatacadastro)
    {
        $this->estaDatacadastro = $estaDatacadastro;

        return $this;
    }

    /**
     * Get estaDatacadastro
     *
     * @return \DateTime
     */
    public function getEstaDatacadastro()
    {
        return $this->estaDatacadastro;
    }

    /**
     * Set paisCodigoid
     *
     * @param \Servicos\ApiBundle\Entity\Localidades\Pais $paisCodigoid
     *
     * @return Estado
     */
    public function setPaisCodigoid(\Servicos\ApiBundle\Entity\Localidades\Pais $paisCodigoid = null)
    {
        $this->paisCodigoid = $paisCodigoid;

        return $this;
    }

    /**
     * Get paisCodigoid
     *
     * @return \Servicos\ApiBundle\Entity\Localidades\Pais
     */
    public function getPaisCodigoid()
    {
        return $this->paisCodigoid;
    }
}
