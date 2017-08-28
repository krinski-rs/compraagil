<?php
namespace Servicos\ApiBundle\DataBase\Types\Postgres\Enum\Types;

use Servicos\ApiBundle\DataBase\Types\Postgres\Enum\AbstractEnumType;

/**
 * TipoPessoa
 * @author Reinaldo Krinski <reinaldo.krinski@gmail.com>
 */
final class TipoPessoa extends AbstractEnumType
{
    const FISICA	= 'Física';
    const JURIDICA	= 'Jurídica';
    
	/**
     * {@inheritdoc}
     */
    protected $name = 'tipo_pessoa';
    
    /**
     * {@inheritdoc}
     */
    protected static $choices = [
        self::FISICA	=> 1,
        self::JURIDICA	=> 2
    ];
}