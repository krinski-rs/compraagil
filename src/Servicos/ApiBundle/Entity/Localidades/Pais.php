<?php

namespace Servicos\ApiBundle\Entity\Localidades;

/**
 * Pais
 */
class Pais
{
    /**
     * @var integer
     */
    private $paisCodigoid;

    /**
     * @var string
     */
    private $paisNome;

    /**
     * @var string
     */
    private $paisAcronimo;

    /**
     * @var boolean
     */
    private $paisAcessoDdi = true;

    /**
     * @var string
     */
    private $paisCodigoDiscagem;

    /**
     * @var boolean
     */
    private $paisAtivo = true;

    /**
     * @var boolean
     */
    private $paisRemovido = false;

    /**
     * @var polygon
     */
    private $paisPoligono;

    /**
     * @var \DateTime
     */
    private $paisDatacadastro = 'now()';


    /**
     * Get paisCodigoid
     *
     * @return integer
     */
    public function getPaisCodigoid()
    {
        return $this->paisCodigoid;
    }

    /**
     * Set paisNome
     *
     * @param string $paisNome
     *
     * @return Pais
     */
    public function setPaisNome($paisNome)
    {
        $this->paisNome = $paisNome;

        return $this;
    }

    /**
     * Get paisNome
     *
     * @return string
     */
    public function getPaisNome()
    {
        return $this->paisNome;
    }

    /**
     * Set paisAcronimo
     *
     * @param string $paisAcronimo
     *
     * @return Pais
     */
    public function setPaisAcronimo($paisAcronimo)
    {
        $this->paisAcronimo = $paisAcronimo;

        return $this;
    }

    /**
     * Get paisAcronimo
     *
     * @return string
     */
    public function getPaisAcronimo()
    {
        return $this->paisAcronimo;
    }

    /**
     * Set paisAcessoDdi
     *
     * @param boolean $paisAcessoDdi
     *
     * @return Pais
     */
    public function setPaisAcessoDdi($paisAcessoDdi)
    {
        $this->paisAcessoDdi = $paisAcessoDdi;

        return $this;
    }

    /**
     * Get paisAcessoDdi
     *
     * @return boolean
     */
    public function getPaisAcessoDdi()
    {
        return $this->paisAcessoDdi;
    }

    /**
     * Set paisCodigoDiscagem
     *
     * @param string $paisCodigoDiscagem
     *
     * @return Pais
     */
    public function setPaisCodigoDiscagem($paisCodigoDiscagem)
    {
        $this->paisCodigoDiscagem = $paisCodigoDiscagem;

        return $this;
    }

    /**
     * Get paisCodigoDiscagem
     *
     * @return string
     */
    public function getPaisCodigoDiscagem()
    {
        return $this->paisCodigoDiscagem;
    }

    /**
     * Set paisAtivo
     *
     * @param boolean $paisAtivo
     *
     * @return Pais
     */
    public function setPaisAtivo($paisAtivo)
    {
        $this->paisAtivo = $paisAtivo;

        return $this;
    }

    /**
     * Get paisAtivo
     *
     * @return boolean
     */
    public function getPaisAtivo()
    {
        return $this->paisAtivo;
    }

    /**
     * Set paisRemovido
     *
     * @param boolean $paisRemovido
     *
     * @return Pais
     */
    public function setPaisRemovido($paisRemovido)
    {
        $this->paisRemovido = $paisRemovido;

        return $this;
    }

    /**
     * Get paisRemovido
     *
     * @return boolean
     */
    public function getPaisRemovido()
    {
        return $this->paisRemovido;
    }

    /**
     * Set paisPoligono
     *
     * @param polygon $paisPoligono
     *
     * @return Pais
     */
    public function setPaisPoligono($paisPoligono)
    {
        $this->paisPoligono = $paisPoligono;

        return $this;
    }

    /**
     * Get paisPoligono
     *
     * @return polygon
     */
    public function getPaisPoligono()
    {
        return $this->paisPoligono;
    }

    /**
     * Set paisDatacadastro
     *
     * @param \DateTime $paisDatacadastro
     *
     * @return Pais
     */
    public function setPaisDatacadastro($paisDatacadastro)
    {
        $this->paisDatacadastro = $paisDatacadastro;

        return $this;
    }

    /**
     * Get paisDatacadastro
     *
     * @return \DateTime
     */
    public function getPaisDatacadastro()
    {
        return $this->paisDatacadastro;
    }
}

