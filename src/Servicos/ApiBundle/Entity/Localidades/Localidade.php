<?php

namespace Servicos\ApiBundle\Entity\Localidades;

/**
 * Localidade
 */
class Localidade
{
    /**
     * @var integer
     */
    private $locaCodigoid;

    /**
     * @var string
     */
    private $cidaCnlAcronimo;

    /**
     * @var integer
     */
    private $locaCnlCodigo;

    /**
     * @var string
     */
    private $cidaCnlAcronimoLocal;

    /**
     * @var integer
     */
    private $locaCnlCodigoLocal;

    /**
     * @var integer
     */
    private $locaCnlCodigoLocal2;

    /**
     * @var polygon
     */
    private $locaPoligono;

    /**
     * @var \DateTime
     */
    private $locaDatacadastro = 'now()';

    /**
     * @var \Servicos\ApiBundle\Entity\Localidades\Cidade
     */
    private $cidaCodigoid;


    /**
     * Get locaCodigoid
     *
     * @return integer
     */
    public function getLocaCodigoid()
    {
        return $this->locaCodigoid;
    }

    /**
     * Set cidaCnlAcronimo
     *
     * @param string $cidaCnlAcronimo
     *
     * @return Localidade
     */
    public function setCidaCnlAcronimo($cidaCnlAcronimo)
    {
        $this->cidaCnlAcronimo = $cidaCnlAcronimo;

        return $this;
    }

    /**
     * Get cidaCnlAcronimo
     *
     * @return string
     */
    public function getCidaCnlAcronimo()
    {
        return $this->cidaCnlAcronimo;
    }

    /**
     * Set locaCnlCodigo
     *
     * @param integer $locaCnlCodigo
     *
     * @return Localidade
     */
    public function setLocaCnlCodigo($locaCnlCodigo)
    {
        $this->locaCnlCodigo = $locaCnlCodigo;

        return $this;
    }

    /**
     * Get locaCnlCodigo
     *
     * @return integer
     */
    public function getLocaCnlCodigo()
    {
        return $this->locaCnlCodigo;
    }

    /**
     * Set cidaCnlAcronimoLocal
     *
     * @param string $cidaCnlAcronimoLocal
     *
     * @return Localidade
     */
    public function setCidaCnlAcronimoLocal($cidaCnlAcronimoLocal)
    {
        $this->cidaCnlAcronimoLocal = $cidaCnlAcronimoLocal;

        return $this;
    }

    /**
     * Get cidaCnlAcronimoLocal
     *
     * @return string
     */
    public function getCidaCnlAcronimoLocal()
    {
        return $this->cidaCnlAcronimoLocal;
    }

    /**
     * Set locaCnlCodigoLocal
     *
     * @param integer $locaCnlCodigoLocal
     *
     * @return Localidade
     */
    public function setLocaCnlCodigoLocal($locaCnlCodigoLocal)
    {
        $this->locaCnlCodigoLocal = $locaCnlCodigoLocal;

        return $this;
    }

    /**
     * Get locaCnlCodigoLocal
     *
     * @return integer
     */
    public function getLocaCnlCodigoLocal()
    {
        return $this->locaCnlCodigoLocal;
    }

    /**
     * Set locaCnlCodigoLocal2
     *
     * @param integer $locaCnlCodigoLocal2
     *
     * @return Localidade
     */
    public function setLocaCnlCodigoLocal2($locaCnlCodigoLocal2)
    {
        $this->locaCnlCodigoLocal2 = $locaCnlCodigoLocal2;

        return $this;
    }

    /**
     * Get locaCnlCodigoLocal2
     *
     * @return integer
     */
    public function getLocaCnlCodigoLocal2()
    {
        return $this->locaCnlCodigoLocal2;
    }

    /**
     * Set locaPoligono
     *
     * @param polygon $locaPoligono
     *
     * @return Localidade
     */
    public function setLocaPoligono($locaPoligono)
    {
        $this->locaPoligono = $locaPoligono;

        return $this;
    }

    /**
     * Get locaPoligono
     *
     * @return polygon
     */
    public function getLocaPoligono()
    {
        return $this->locaPoligono;
    }

    /**
     * Set locaDatacadastro
     *
     * @param \DateTime $locaDatacadastro
     *
     * @return Localidade
     */
    public function setLocaDatacadastro($locaDatacadastro)
    {
        $this->locaDatacadastro = $locaDatacadastro;

        return $this;
    }

    /**
     * Get locaDatacadastro
     *
     * @return \DateTime
     */
    public function getLocaDatacadastro()
    {
        return $this->locaDatacadastro;
    }

    /**
     * Set cidaCodigoid
     *
     * @param \Servicos\ApiBundle\Entity\Localidades\Cidade $cidaCodigoid
     *
     * @return Localidade
     */
    public function setCidaCodigoid(\Servicos\ApiBundle\Entity\Localidades\Cidade $cidaCodigoid = null)
    {
        $this->cidaCodigoid = $cidaCodigoid;

        return $this;
    }

    /**
     * Get cidaCodigoid
     *
     * @return \Servicos\ApiBundle\Entity\Localidades\Cidade
     */
    public function getCidaCodigoid()
    {
        return $this->cidaCodigoid;
    }
}
