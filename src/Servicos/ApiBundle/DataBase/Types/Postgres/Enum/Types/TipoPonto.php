<?php
namespace Servicos\ApiBundle\DataBase\Types\Postgres\Enum\Types;

use Servicos\ApiBundle\DataBase\Types\Postgres\Enum\AbstractEnumType;

/**
 * TipoPonto
 * @author Reinaldo Krinski <reinaldo.krinski@gmail.com>
 */
final class TipoPonto extends AbstractEnumType
{
    const CAIXA_EMENDA	= 'CAIXA_EMENDA';
    const SPLITTER      = 'SPLITTER';
    const SWITCH        = 'SWITCH';
    const CIRCUITO      = 'CIRCUITO';
    const POP           = 'POP';
    const DATA_CENTE    = 'DATA_CENTE';
    const LPU           = 'LPU';
    
	/**
     * {@inheritdoc}
     */
    protected $name = 'tipo_ponto';
    
    /**
     * {@inheritdoc}
     */
    protected static $choices = [
        self::CAIXA_EMENDA  => 'CAIXA_EMENDA',
        self::SPLITTER      => 'SPLITTER',
        self::SWITCH        => 'SWITCH',
        self::CIRCUITO      => 'CIRCUITO',
        self::POP           => 'POP',
        self::DATA_CENTE	=> 'DATA_CENTE',
        self::LPU           => 'LPU'
    ];
}