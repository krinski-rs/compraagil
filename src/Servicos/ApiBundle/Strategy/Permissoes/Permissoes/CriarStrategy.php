<?php
namespace Servicos\ApiBundle\Strategy\Permissoes\Permissoes;

use Servicos\ApiBundle\Strategy\StrategyAbstract;
use FOS\RestBundle\Controller\Annotations\RequestParam;
use Servicos\ApiBundle\Strategy\StrategyInterface;
use Doctrine\ORM\QueryBuilder;

class CriarStrategy extends StrategyAbstract
{
    public function createRequestParam():StrategyInterface
    {
        $objRequestParam = new RequestParam();
        $objRequestParam->name = 'permNome';
        $objRequestParam->nullable = false;
        $objRequestParam->strict = true;
        $this->objParamFetcher->addParam($objRequestParam);
        
        $objRequestParam = new RequestParam();
        $objRequestParam->name = 'permDescricao';
        $objRequestParam->nullable = false;
        $objRequestParam->strict = true;
        $this->objParamFetcher->addParam($objRequestParam);
        
        $objRequestParam = new RequestParam();
        $objRequestParam->name = 'permValor';
        $objRequestParam->nullable = false;
        $objRequestParam->requirements = '[1-7]';
        $objRequestParam->strict = true;
        $this->objParamFetcher->addParam($objRequestParam);
        return $this;
    }
    
    public function createQueryParam():StrategyInterface
    {
        return $this;
    }
    
    public function createQueryBuilder(QueryBuilder $objQueryBuilder):StrategyInterface
    {
        return $this;
    }
}