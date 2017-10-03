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
class UsuariosPermissoesController extends RestController
{
    /**
     *
     * @param int $id id do grupo
     *
     * @access public
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getPermissoeAction(int $usuaCodigoid, int $permCodigoid)
    {
        try {
            
            return $this->success(
                ['msg'=>'getUsuarioPermissaoAction']
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
    public function getPermissoesAction(int $usuaCodigoid, ParamFetcher $objParamFetcher)
    {
        try {
            
            return $this->success(
                ['msg'=>'getUsuariosPermissaoAction']
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
    public function postPermissoeAction(int $usuaCodigoid, int $permCodigoid, ParamFetcher $objParamFetcher)
    {
        try {
            $objPermissoesUsuario = $this->get('servicos_api.permissoes.usuario.criar');
            if(!($objPermissoesUsuario instanceof ServicePermissoesUsuarios\Criar)){
                throw new \Exception('Class "Servicos\ApiBundle\Service\Permissoes\Usuarios\Criar" not found.', 500);
            }
            $objPermissoesUsuario->addPermissao($usuaCodigoid, $permCodigoid, $objParamFetcher);
            
            return $this->success(
                ['msg'=>'postUsuarioPermissaoAction']
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
    public function patchPermissoeAction(int $usuaCodigoid, int $permCodigoid, ParamFetcher $objParamFetcher)
    {
        try {
            
            return $this->success(
                ['msg'=>'patchUsuarioPermissaoAction']
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
    public function putPermissoeAction(int $usuaCodigoid, int $permCodigoid, ParamFetcher $objParamFetcher)
    {
        try {
            
            return $this->success(
                ['msg'=>'putUsuarioPermissaoAction']
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
    public function deletePermissoeAction(int $usuaCodigoid, int $permCodigoid)
    {
        try {
            
            return $this->success(
                ['msg'=>'deleteUsuarioPermissaoAction']
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
