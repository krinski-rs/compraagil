<?php
namespace Servicos\ApiBundle\Strategy\Permissoes\Usuarios;

use Servicos\ApiBundle\Strategy\StrategyAbstract;
use FOS\RestBundle\Controller\Annotations\RequestParam;
use Servicos\ApiBundle\Strategy\StrategyInterface;
use Doctrine\ORM\QueryBuilder;

class CriarStrategy extends StrategyAbstract
{
    public function createRequestParam():StrategyInterface
    {
        $objRequestParam = new RequestParam();
        $objRequestParam->name = 'usuapermValor';
        $objRequestParam->nullable = false;
        $objRequestParam->requirements = '(\d+(\.\d+)?)';
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