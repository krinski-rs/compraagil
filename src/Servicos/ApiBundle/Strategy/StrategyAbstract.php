<?php
namespace Servicos\ApiBundle\Strategy;

use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\Annotations\ParamInterface;

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
abstract class StrategyAbstract implements StrategyInterface
{
    /**
     *
     * @var    \FOS\RestBundle\Request\ParamFetcher
     * @access protected
     */
    protected $objParamFetcher    = null;
    
    /**
     *
     * @param \FOS\RestBundle\Request\ParamFetcher $objParamFetcher
     *
     * @access public
     */
    public function __construct(ParamFetcher $objParamFetcher)
    {
        $this->objParamFetcher  = $objParamFetcher;
        $this->createQueryParam();
        $this->createRequestParam();
    }
    
    /**
     *
     * @param string  $name
     * @param boolean $strict
     *
     * @access public
     * @return mixed
     */
    public function getParam(string $name, bool $strict = false)
    {
        return $this->objParamFetcher->get($name, $strict);
    }
    
    /**
     *
     * @access public
     * @return integer
     */
    public function getOffset():int
    {
        return (integer)(($this->getParam('pagina', true)-1) * $this
            ->getParam('itensPagina', true));
        
    }
    
    /**
     *
     * @access public
     * @return integer
     */
    public function getLimit():int
    {
        return (integer)$this->getParam('itensPagina', true);
    }
    
    /**
     *
     * @param ParamInterface $objParamInterface
     *
     * @access public
     * @return \Servicos\ApiBundle\Strategy\StrategyInterface
     */
    public function addParam(ParamInterface $objParamInterface):StrategyInterface
    {
        $this->objParamFetcher->addParam($objParamInterface);
        return $this;
    }
}
