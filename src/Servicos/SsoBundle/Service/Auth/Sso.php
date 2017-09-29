<?php
namespace Servicos\SsoBundle\Service\Auth;

use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\Annotations\RequestParam;

class Sso extends SsoAbstract
{
    public function login(ParamFetcher $objParamFetcher):array
    {
        try {
            if($this->isLoggedIn()){
                $this->invalidate();
            }
            $this->validate($objParamFetcher);
            return $this->setUserData(['a'=>1,'b'=>2])
            ->getUserData();
        } catch (\Exception $ex){
            throw $ex;
        }
    }
    
    public function validate(ParamFetcher $objParamFetcher):bool
    {
        try {
            $objRequestParam = new RequestParam();
            $objRequestParam->name = 'login';
            $objRequestParam->nullable = false;
            $objRequestParam->allowBlank = false;
            $objRequestParam->strict = true;
            $objParamFetcher->addParam($objRequestParam);
            
            $objRequestParam = new RequestParam();
            $objRequestParam->name = 'password';
            $objRequestParam->nullable = false;
            $objRequestParam->allowBlank = false;
            $objRequestParam->strict = true;
            $objParamFetcher->addParam($objRequestParam);
            
            $objParamFetcher->get('login', true);
            $objParamFetcher->get('password', true);
            
            $objRequest = $this->getRequest();
            $objHeaderBag = $objRequest->headers;
            
            $appKey = trim($objHeaderBag->get('AppKey'));
            $authVersion = trim($objHeaderBag->get('AuthVersion'));
            
            if(!$appKey){
                throw new \InvalidArgumentException("Parameter 'AppKey' of value '' violated a constraint 'This value should not be blank.'");
            }
            
            if(!$authVersion){
                throw new \InvalidArgumentException("Parameter 'AuthVersion' of value '' violated a constraint 'This value should not be blank.'");
            }
            
        } catch (\InvalidArgumentException $ex){
            throw $ex;
        } catch (\Exception $ex){
            throw $ex;
        }
        return true;
    }
}
