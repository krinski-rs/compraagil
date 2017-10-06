<?php
namespace Servicos\ApiBundle\Strategy\CatalagoServicos\Aplicacoes;

use Servicos\ApiBundle\Strategy\StrategyAbstract;
use FOS\RestBundle\Controller\Annotations\RequestParam;
use Servicos\ApiBundle\Strategy\StrategyInterface;
use Doctrine\ORM\QueryBuilder;

class CriarStrategy extends StrategyAbstract
{
    public function createRequestParam():StrategyInterface
    {
        $objRequestParam = new RequestParam();
        $objRequestParam->name = 'apliNome';
        $objRequestParam->nullable = false;
        $objRequestParam->strict = true;
        $this->objParamFetcher->addParam($objRequestParam);
        
        $objRequestParam = new RequestParam();
        $objRequestParam->name = 'apliApelido';
        $objRequestParam->nullable = false;
        $objRequestParam->strict = true;
        $this->objParamFetcher->addParam($objRequestParam);
        
        $objRequestParam = new RequestParam();
        $objRequestParam->name = 'apliKey';
        $objRequestParam->nullable = false;
        $objRequestParam->strict = true;
        $this->objParamFetcher->addParam($objRequestParam);
        
        $objRequestParam = new RequestParam();
        $objRequestParam->name = 'apliAtivo';
        $objRequestParam->nullable = false;
        $objRequestParam->strict = true;
        $this->objParamFetcher->addParam($objRequestParam);
        
        $objRequestParam = new RequestParam();
        $objRequestParam->name = 'apliRemovido';
        $objRequestParam->nullable = false;
        $objRequestParam->strict = true;
        $this->objParamFetcher->addParam($objRequestParam);
        
        $objRequestParam = new RequestParam();
        $objRequestParam->name = 'apliUrl';
        $objRequestParam->nullable = false;
        $objRequestParam->strict = true;
        $this->objParamFetcher->addParam($objRequestParam);
        
        $objRequestParam = new RequestParam();
        $objRequestParam->name = 'apliTipo';
        $objRequestParam->nullable = false;
        $objRequestParam->strict = true;
        $this->objParamFetcher->addParam($objRequestParam);
        
        $objRequestParam = new RequestParam();
        $objRequestParam->name = 'apliParentCodigoid';
        $objRequestParam->nullable = true;
        $objRequestParam->default = 0;
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