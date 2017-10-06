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
class UsuariosGruposController extends RestController
{
    /**
     *
     * @param int $id id do grupo
     *
     * @access public
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getGrupoAction(int $usuaCodigoid, int $grupCodigoid)
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
    public function getGruposAction(int $usuaCodigoid, ParamFetcher $objParamFetcher)
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
    public function postGrupoAction(int $usuaCodigoid, int $grupCodigoid, ParamFetcher $objParamFetcher)
    {
        try {
            $objGruposUsuario = $this->get('servicos_api.permissoes.usuarios.criar');
            if(!($objGruposUsuario instanceof ServicePermissoesUsuarios\Criar)){
                throw new \Exception('Class "Servicos\ApiBundle\Service\Permissoes\Usuarios\Criar" not found.', 500);
            }
            $objGruposUsuario->addGrupo($usuaCodigoid, $grupCodigoid, $objParamFetcher);
            
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
    public function patchGrupoAction(int $usuaCodigoid, int $grupCodigoid, ParamFetcher $objParamFetcher)
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
    public function putGrupoAction(int $usuaCodigoid, int $grupCodigoid, ParamFetcher $objParamFetcher)
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
    public function deleteGrupoAction(int $usuaCodigoid, int $grupCodigoid)
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
