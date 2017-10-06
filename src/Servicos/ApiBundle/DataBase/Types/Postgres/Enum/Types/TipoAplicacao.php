<?php
namespace Servicos\ApiBundle\DataBase\Types\Postgres\Enum\Types;

use Servicos\ApiBundle\DataBase\Types\Postgres\Enum\AbstractEnumType;

/**
 * TipoAplicacao
 * @author Reinaldo Krinski <reinaldo.krinski@gmail.com>
 */
final class TipoAplicacao extends AbstractEnumType
{
    const CORPORATIVO	= 'CORPORATIVO';
    const ESPECIALISTA	= 'ESPECIALISTA';
    const MIDDLEWARE	= 'MIDDLEWARE';
    
	/**
     * {@inheritdoc}
     */
    protected $name = 'tipo_aplicacao';
    
    /**
     * {@inheritdoc}
     */
    protected static $choices = [
        self::CORPORATIVO	=> 1,
        self::ESPECIALISTA	=> 2,
        self::MIDDLEWARE	=> 3
    ];
}