<?php

namespace Servicos\ApiBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 *
 * @category Controllers
 * @package  Servicos\ApiBundle\Controller
 * @author   Reinaldo Krinski <reinaldo.krinski@gmail.com>
 * @license  http://localhost proprietary
 */

abstract class RestController extends Controller
{
    
    /**
     * @var \Symfony\Component\HttpFoundation\JsonResponse
     * @access private
     */
    private $objJsonResponse = NULL;
    
    /**
     * @access public
     */
    public function __construct()
    {
        $this->objJsonResponse = new JsonResponse();
    }
    
    /**
     *
     * @param mixed $chave
     * @param mixed $valor
     *
     * @access protected
     * @return void
     */
    protected function addHeader($chave, $valor)
    {
        $this->objJsonResponse->headers->set($chave, $valor);
    }
    
    /**
     *
     * @param array $data
     *
     * @access protected
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    protected function success(array $data = array())
    {
        if (count($data)) {
            $status = Response::HTTP_OK;
        } else {
            $status = Response::HTTP_NO_CONTENT;
        }
        return $this->buildResponse($status, $data);
    }
    
    /**
     *
     * @param array $data
     *
     * @access protected
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    protected function created(array $data)
    {
        return $this->buildResponse(Response::HTTP_CREATED, $data);
    }
    
    /**
     *
     * @param array $data
     *
     * @access protected
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    protected function badRequest(array $data)
    {
        return $this->buildResponse(Response::HTTP_BAD_REQUEST, $data);
    }
    
    /**
     *
     * @param string $msg
     *
     * @access protected
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    protected function internalError($msg = 'Ocorreu um erro interno no servidor!')
    {
        return $this->buildResponse(Response::HTTP_INTERNAL_SERVER_ERROR, ['msg' => $msg]);
    }
    
    /**
     *
     * @param string $msg
     *
     * @access protected
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    protected function notImplemented($msg = 'Recurso não implementado!')
    {
        return $this->buildResponse(Response::HTTP_NOT_IMPLEMENTED, ['msg' => $msg]);
    }
    
    /**
     *
     * @param string $msg
     *
     * @access protected
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    protected function notFound($msg = 'Recurso não encontrado!')
    {
        return $this->buildResponse(Response::HTTP_NOT_FOUND, ['msg' => $msg]);
    }
    
    /**
     *
     * @param string $msg
     *
     * @access protected
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    protected function unauthorized($msg = 'Você não tem permisão para acessar este recurso!')
    {
        return $this->buildResponse(Response::HTTP_UNAUTHORIZED, ['msg' => $msg]);
    }
    
    /**
     *
     * @param string $msg
     *
     * @access protected
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    protected function forbidden($msg = 'Acesso negado!')
    {
        return $this->buildResponse(Response::HTTP_FORBIDDEN, ['msg' => $msg]);
    }
    
    /**
     * 
     * @param int $status
     * @param array $data
     *
     * @access private
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    private function buildResponse(int $status, array $data = array())
    {
        if ($data) {
            $this->objJsonResponse->setData($data);
        }
        $this->objJsonResponse->setStatusCode($status);
        return $this->objJsonResponse;
    }
}
