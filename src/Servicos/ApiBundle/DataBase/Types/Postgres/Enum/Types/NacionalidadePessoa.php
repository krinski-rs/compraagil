<?php
namespace Servicos\ApiBundle\DataBase\Types\Postgres\Enum\Types;

use Servicos\ApiBundle\DataBase\Types\Postgres\Enum\AbstractEnumType;

/**
 * NacionalidadePessoa
 * @author Reinaldo Krinski <reinaldo.krinski@gmail.com>
 */
final class NacionalidadePessoa extends AbstractEnumType
{
    const NACIONAL      = 'Nacional';
    const ESTRANGEIRA   = 'Estrangeira';
    
	/**
     * {@inheritdoc}
     */
    protected $name = 'nacionalidade_pessoa';
    
    /**
     * {@inheritdoc}
     */
    protected static $choices = [
        self::NACIONAL      => 1,
        self::ESTRANGEIRA   => 2
    ];
}