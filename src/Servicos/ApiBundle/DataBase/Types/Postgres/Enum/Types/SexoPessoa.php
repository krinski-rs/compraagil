<?php
namespace Servicos\ApiBundle\DataBase\Types\Postgres\Enum\Types;

use Servicos\ApiBundle\DataBase\Types\Postgres\Enum\AbstractEnumType;

/**
 * SexoPessoa
 * @author Reinaldo Krinski <reinaldo.krinski@gmail.com>
 */
final class SexoPessoa extends AbstractEnumType
{
    const M	= 'Masculino';
    const F	= 'Feminino';
    const E	= 'Empresa';
    
	/**
     * {@inheritdoc}
     */
    protected $name = 'sexo_pessoa';
    
    /**
     * {@inheritdoc}
     */
    protected static $choices = [
        self::M	=> 1,
        self::F	=> 2,
        self::E	=> 3
    ];
}