<?php

namespace Servicos\ApiBundle\Entity\Permissoes;

/**
 * Permissao
 */
class Permissao
{
    /**
     * @var integer
     */
    private $permCodigoid;

    /**
     * @var string
     */
    private $permNome;

    /**
     * @var string
     */
    private $permDescricao;

    /**
     * @var \DateTime
     */
    private $permDatacadastro = 'now()';

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $grupCodigoid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $usuaCodigoid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->grupCodigoid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->usuaCodigoid = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get permCodigoid
     *
     * @return integer
     */
    public function getPermCodigoid()
    {
        return $this->permCodigoid;
    }

    /**
     * Set permNome
     *
     * @param string $permNome
     *
     * @return Permissao
     */
    public function setPermNome($permNome)
    {
        $this->permNome = $permNome;

        return $this;
    }

    /**
     * Get permNome
     *
     * @return string
     */
    public function getPermNome()
    {
        return $this->permNome;
    }

    /**
     * Set permDescricao
     *
     * @param string $permDescricao
     *
     * @return Permissao
     */
    public function setPermDescricao($permDescricao)
    {
        $this->permDescricao = $permDescricao;

        return $this;
    }

    /**
     * Get permDescricao
     *
     * @return string
     */
    public function getPermDescricao()
    {
        return $this->permDescricao;
    }

    /**
     * Set permDatacadastro
     *
     * @param \DateTime $permDatacadastro
     *
     * @return Permissao
     */
    public function setPermDatacadastro($permDatacadastro)
    {
        $this->permDatacadastro = $permDatacadastro;

        return $this;
    }

    /**
     * Get permDatacadastro
     *
     * @return \DateTime
     */
    public function getPermDatacadastro()
    {
        return $this->permDatacadastro;
    }

    /**
     * Add grupCodigoid
     *
     * @param \Servicos\ApiBundle\Entity\Permissoes\Grupo $grupCodigoid
     *
     * @return Permissao
     */
    public function addGrupCodigoid(\Servicos\ApiBundle\Entity\Permissoes\Grupo $grupCodigoid)
    {
        $this->grupCodigoid[] = $grupCodigoid;

        return $this;
    }

    /**
     * Remove grupCodigoid
     *
     * @param \Servicos\ApiBundle\Entity\Permissoes\Grupo $grupCodigoid
     */
    public function removeGrupCodigoid(\Servicos\ApiBundle\Entity\Permissoes\Grupo $grupCodigoid)
    {
        $this->grupCodigoid->removeElement($grupCodigoid);
    }

    /**
     * Get grupCodigoid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGrupCodigoid()
    {
        return $this->grupCodigoid;
    }

    /**
     * Add usuaCodigoid
     *
     * @param \Servicos\ApiBundle\Entity\Permissoes\Usuario $usuaCodigoid
     *
     * @return Permissao
     */
    public function addUsuaCodigoid(\Servicos\ApiBundle\Entity\Permissoes\Usuario $usuaCodigoid)
    {
        $this->usuaCodigoid[] = $usuaCodigoid;

        return $this;
    }

    /**
     * Remove usuaCodigoid
     *
     * @param \Servicos\ApiBundle\Entity\Permissoes\Usuario $usuaCodigoid
     */
    public function removeUsuaCodigoid(\Servicos\ApiBundle\Entity\Permissoes\Usuario $usuaCodigoid)
    {
        $this->usuaCodigoid->removeElement($usuaCodigoid);
    }

    /**
     * Get usuaCodigoid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsuaCodigoid()
    {
        return $this->usuaCodigoid;
    }
}
