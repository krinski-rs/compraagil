<?php

namespace Servicos\ApiBundle\Entity\Permissoes;

/**
 * Grupo
 */
class Grupo
{
    /**
     * @var integer
     */
    private $grupCodigoid;

    /**
     * @var string
     */
    private $grupNome;

    /**
     * @var string
     */
    private $grupDescricao;

    /**
     * @var \DateTime
     */
    private $grupDatacadastro = 'now()';

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $usuaCodigoid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $permCodigoid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->usuaCodigoid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->permCodigoid = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get grupCodigoid
     *
     * @return integer
     */
    public function getGrupCodigoid()
    {
        return $this->grupCodigoid;
    }

    /**
     * Set grupNome
     *
     * @param string $grupNome
     *
     * @return Grupo
     */
    public function setGrupNome($grupNome)
    {
        $this->grupNome = $grupNome;

        return $this;
    }

    /**
     * Get grupNome
     *
     * @return string
     */
    public function getGrupNome()
    {
        return $this->grupNome;
    }

    /**
     * Set grupDescricao
     *
     * @param string $grupDescricao
     *
     * @return Grupo
     */
    public function setGrupDescricao($grupDescricao)
    {
        $this->grupDescricao = $grupDescricao;

        return $this;
    }

    /**
     * Get grupDescricao
     *
     * @return string
     */
    public function getGrupDescricao()
    {
        return $this->grupDescricao;
    }

    /**
     * Set grupDatacadastro
     *
     * @param \DateTime $grupDatacadastro
     *
     * @return Grupo
     */
    public function setGrupDatacadastro($grupDatacadastro)
    {
        $this->grupDatacadastro = $grupDatacadastro;

        return $this;
    }

    /**
     * Get grupDatacadastro
     *
     * @return \DateTime
     */
    public function getGrupDatacadastro()
    {
        return $this->grupDatacadastro;
    }

    /**
     * Add usuaCodigoid
     *
     * @param \Servicos\ApiBundle\Entity\Permissoes\Usuario $usuaCodigoid
     *
     * @return Grupo
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

    /**
     * Add permCodigoid
     *
     * @param \Servicos\ApiBundle\Entity\Permissoes\Permissao $permCodigoid
     *
     * @return Grupo
     */
    public function addPermCodigoid(\Servicos\ApiBundle\Entity\Permissoes\Permissao $permCodigoid)
    {
        $this->permCodigoid[] = $permCodigoid;

        return $this;
    }

    /**
     * Remove permCodigoid
     *
     * @param \Servicos\ApiBundle\Entity\Permissoes\Permissao $permCodigoid
     */
    public function removePermCodigoid(\Servicos\ApiBundle\Entity\Permissoes\Permissao $permCodigoid)
    {
        $this->permCodigoid->removeElement($permCodigoid);
    }

    /**
     * Get permCodigoid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPermCodigoid()
    {
        return $this->permCodigoid;
    }
}

