<?php
namespace Servicos\SsoBundle\Service\Auth;
use Symfony\Component\HttpFoundation\Session\Session;
use FOS\RestBundle\Request\ParamFetcher;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Request;

interface SsoInterface {
    
    public function isLoggedIn():bool;
    
    public function login(ParamFetcher $objParamFetcher):array;
    
    public function logout():bool;
    
    public function invalidate():bool;
    
    public function getUserSession():Session;
    
    public function getUserData():array;
    
    public function setUserData(array $userData):SsoInterface;
    
    public function validate(ParamFetcher $objParamFetcher):bool;
    
    public function getRequest():Request;
    
    public function setRequestStack(RequestStack $objRequestStack):SsoInterface;
    
    public function getParams():array;
    
    public function getCredentials():array;
}
