<?php
namespace Servicos\ApiBundle\Controller\Permissoes;

use FOS\RestBundle\Request\ParamFetcher;
use Servicos\ApiBundle\Controller\RestController;
use Servicos\ApiBundle\Exceptions\ApiException;
use Servicos\ApiBundle\Service\Permissoes\Usuarios as ServicePermissoesUsuarios;

/**
 *
 * @category Controllers
 * @package  Servicos\ApiBundle\Controller\Permissoes
 * @author   Reinaldo Krinski <reinaldo.krinski@gmail.com>
 * @license  http://localhost proprietary
 */
class UsuariosController extends RestController
{
    /**
     *
     * @param int $id id do grupo
     *
     * @access public
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getUsuarioAction(int $id)
    {
        try {
            
            return $this->success(
                ['msg'=>'getUsuarioAction']
            );
        } catch (ApiException $ex) {
            return $this->buildResponse($ex->getStatusCode(), $ex->getDados());
        } catch (\Exception $ex) {
            return $this->internalError($ex->getTraceAsString());
        }
    }
    
    /**
     *
     * @param \FOS\RestBundle\Request\ParamFetcher $objParamFetcher
     *
     * @access public
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getUsuariosAction(ParamFetcher $objParamFetcher)
    {
        try {
            
            return $this->success(
                ['msg'=>'getUsuariosAction']
            );
        } catch (\FOS\RestBundle\Exception\InvalidParameterException $ex) {
            return $this->badRequest(
                [$ex->getParameter()->getName() => $ex->getMessage()]
            );
        } catch (ApiException $ex) {
            return $this->badRequest($ex->getStatusCode(), $ex->getDados());
        } catch (\Exception $ex) {
            return $this->internalError($ex->getTraceAsString());
        }
    }

    /**
     *
     * @param \FOS\RestBundle\Request\ParamFetcher $objParamFetcher
     *
     * @access public
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function postUsuarioAction(ParamFetcher $objParamFetcher)
    {
        
        try {
            $objUsuarioCriar = $this->get('servicos_api.permissoes.usuario.criar');
            if(!($objUsuarioCriar instanceof ServicePermissoesUsuarios\Criar)){
                throw new \Exception('Class "Servicos\ApiBundle\Service\Permissoes\Usuarios\Criar" not found.', 500);
            }
            $objUsuarioCriar->save($objParamFetcher);
            
            return $this->success(
                ['msg'=>'postUsuarioAction']
            );
        } catch (\FOS\RestBundle\Exception\InvalidParameterException $ex) {
            return $this->badRequest(
                [$ex->getParameter()->getName() => $ex->getMessage()]
            );
        } catch (ApiException $ex) {
            return $this->badRequest($ex->getStatusCode(), $ex->getDados());
        } catch (\Exception $ex) {
            return $this->internalError($ex->getTraceAsString());
        }
    }

    /**
     *
     * @param \FOS\RestBundle\Request\ParamFetcher $objParamFetcher
     * @param int $id
     *
     * @access public
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function patchUsuarioAction(int $id, ParamFetcher $objParamFetcher)
    {
        try {
            
            return $this->success(
                ['msg'=>'patchUsuarioAction']
            );
        } catch (\FOS\RestBundle\Exception\InvalidParameterException $ex) {
            return $this->badRequest(
                [$ex->getParameter()->getName() => $ex->getMessage()]
            );
        } catch (ApiException $ex) {
            return $this->badRequest($ex->getStatusCode(), $ex->getDados());
        } catch (\Exception $ex) {
            return $this->internalError($ex->getTraceAsString());
        }
    }

    /**
     *
     * @param \FOS\RestBundle\Request\ParamFetcher $objParamFetcher
     * @param int $id
     *
     * @access public
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function putUsuarioAction(int $id, ParamFetcher $objParamFetcher)
    {
        try {
            
            return $this->success(
                ['msg'=>'putUsuarioAction']
            );
        } catch (\FOS\RestBundle\Exception\InvalidParameterException $ex) {
            return $this->badRequest(
                [$ex->getParameter()->getName() => $ex->getMessage()]
            );
        } catch (ApiException $ex) {
            return $this->badRequest($ex->getStatusCode(), $ex->getDados());
        } catch (\Exception $ex) {
            return $this->internalError($ex->getTraceAsString());
        }
    }

    /**
     *
     * @param int $id
     *
     * @access public
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function deleteUsuarioAction(int $id)
    {
        try {
            
            return $this->success(
                ['msg'=>'deleteUsuarioAction']
            );
        } catch (\FOS\RestBundle\Exception\InvalidParameterException $ex) {
            return $this->badRequest(
                [$ex->getParameter()->getName() => $ex->getMessage()]
            );
        } catch (ApiException $ex) {
            return $this->badRequest($ex->getStatusCode(), $ex->getDados());
        } catch (\Exception $ex) {
            return $this->internalError($ex->getTraceAsString());
        }
    }
}
