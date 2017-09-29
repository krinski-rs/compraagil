<?php

namespace Servicos\SsoBundle\Controller;

use FOS\RestBundle\Request\ParamFetcher;
use Servicos\ApiBundle\Controller\RestController;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Delete;
use FOS\RestBundle\Controller\Annotations\Get;
use Servicos\SsoBundle\Service\Auth\Sso;

class AuthController extends RestController
{
    /**
     * @Post("/login")
     */
    public function loginAction(ParamFetcher $objParamFetcher)
    {
        try {
            $objSsoService = $this->get('auth.sso');
            
            if(!($objSsoService instanceof Sso)){
                throw new \Exception("Serviço de autenticação não encontrado.", 500);
            }
            
            $userData = $objSsoService->login($objParamFetcher);
            return $this->success($userData);
            
        }catch (\Exception $ex){
            return $this->badRequest([$ex->getFile(), $ex->getCode(), $ex->getMessage()]);
        }
    }
    
    /**
     * @Delete("/logout")
     */
    public function logoutAction(ParamFetcher $objParamFetcher)
    {
        try {
            $objSsoService = $this->get('auth.sso');
            
            if(!($objSsoService instanceof Sso)){
                throw new \Exception("Serviço de autenticação não encontrado.", 500);
            }
            
            $objSsoService->invalidate();
            return $this->success();
        }catch (\Exception $ex){
            return $this->badRequest([$ex->getFile(), $ex->getCode(), $ex->getMessage()]);
        }
    }
    
    /**
     * @Get("/me")
     */
    public function meAction(ParamFetcher $objParamFetcher)
    {
        try {
            $objSsoService = $this->get('auth.sso');
            
            if(!($objSsoService instanceof Sso)){
                throw new \Exception("Serviço de autenticação não encontrado.", 500);
            }
            
            $userData = $objSsoService->getCredentials();
            return $this->success($userData);
            
        }catch (\Exception $ex){
            return $this->badRequest([$ex->getFile(), $ex->getCode(), $ex->getMessage()]);
        }
    }
}
