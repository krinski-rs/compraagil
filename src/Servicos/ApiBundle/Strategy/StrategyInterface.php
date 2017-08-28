<?php
namespace Servicos\ApiBundle\Strategy;

use FOS\RestBundle\Controller\Annotations\ParamInterface;
use Doctrine\ORM\QueryBuilder;

/**
 * StrategyInterface
 *
 * PHP version 7
 *
 * @category Strategy
 * @package  Servicos\ApiBundle\Strategy
 * @author   Reinaldo Krinski <reinaldo.krinski@gmail.com>
 * @license  http://localhost proprietary
 */
interface StrategyInterface
{
    /**
     * @param string  $name
     * @param boolean $strict
     *
     * @access public
     * @return mixed
     */
    public function getParam(string $name, bool $strict = false);
    
    /**
     *
     * @access protected
     * @return \Servicos\ApiBundle\Strategy\StrategyInterface
     */
    public function createQueryParam():StrategyInterface;
    
    /**
     *
     * @access protected
     * @return \Servicos\ApiBundle\Strategy\StrategyInterface
     */
    public function createRequestParam():StrategyInterface;
    
    /**
     *
     * @param \Doctrine\ORM\QueryBuilder $objQueryBuilder
     *
     * @access protected
     * @return \Servicos\ApiBundle\Strategy\StrategyInterface
     */
    public function createQueryBuilder(QueryBuilder $objQueryBuilder):StrategyInterface;
    
    /**
     *
     * @access public
     * @return integer
     */
    public function getOffset():int;
    
    /**
     * Get limit
     *
     * @access public
     * @return integer
     */
    public function getLimit():int;
    
    /**
     *
     * @param ParamInterface $objParamInterface
     *
     * @access public
     * @return \Servicos\ApiBundle\Strategy\StrategyInterface
     */
    public function addParam(ParamInterface $objParamInterface):StrategyInterface;
    
}
