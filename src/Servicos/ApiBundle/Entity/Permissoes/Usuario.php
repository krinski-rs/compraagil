<?php

namespace Servicos\ApiBundle\Entity\Permissoes;

use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Usuario
 */
class Usuario implements UserInterface
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $salt;

    /**
     * @var boolean
     */
    private $ativo = true;

    /**
     * @var boolean
     */
    private $removido = false;

    /**
     * @var \DateTime
     */
    private $dataCadastro = 'now()';

    /**
     * @var string
     */
    private $email;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $usuarioPermissao;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $grupCodigoid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $permCodigoid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->usuarioPermissao = new \Doctrine\Common\Collections\ArrayCollection();
        $this->grupCodigoid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->permCodigoid = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Usuario
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     *
     * @return Usuario
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set ativo
     *
     * @param boolean $ativo
     *
     * @return Usuario
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;

        return $this;
    }

    /**
     * Get ativo
     *
     * @return boolean
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * Set removido
     *
     * @param boolean $removido
     *
     * @return Usuario
     */
    public function setRemovido($removido)
    {
        $this->removido = $removido;

        return $this;
    }

    /**
     * Get removido
     *
     * @return boolean
     */
    public function getRemovido()
    {
        return $this->removido;
    }

    /**
     * Set dataCadastro
     *
     * @param \DateTime $dataCadastro
     *
     * @return Usuario
     */
    public function setDataCadastro($dataCadastro)
    {
        $this->dataCadastro = $dataCadastro;

        return $this;
    }

    /**
     * Get dataCadastro
     *
     * @return \DateTime
     */
    public function getDataCadastro()
    {
        return $this->dataCadastro;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Add usuarioPermissao
     *
     * @param \Servicos\ApiBundle\Entity\Permissoes\UsuarioPermissao $usuarioPermissao
     *
     * @return Usuario
     */
    public function addUsuarioPermissao(\Servicos\ApiBundle\Entity\Permissoes\UsuarioPermissao $usuarioPermissao)
    {
        $this->usuarioPermissao[] = $usuarioPermissao;

        return $this;
    }

    /**
     * Remove usuarioPermissao
     *
     * @param \Servicos\ApiBundle\Entity\Permissoes\UsuarioPermissao $usuarioPermissao
     */
    public function removeUsuarioPermissao(\Servicos\ApiBundle\Entity\Permissoes\UsuarioPermissao $usuarioPermissao)
    {
        $this->usuarioPermissao->removeElement($usuarioPermissao);
    }

    /**
     * Get usuarioPermissao
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsuarioPermissao()
    {
        return $this->usuarioPermissao;
    }

    /**
     * Add grupCodigoid
     *
     * @param \Servicos\ApiBundle\Entity\Permissoes\Grupo $grupCodigoid
     *
     * @return Usuario
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
     * Add permCodigoid
     *
     * @param \Servicos\ApiBundle\Entity\Permissoes\Permissao $permCodigoid
     *
     * @return Usuario
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
    
    public function getRoles()
    {
        return [];
    }
    
    public function setRole($role = null)
    {
        $this->role = $role;
    }
    
    
    public function eraseCredentials()
    {
        return null;
    }
}

