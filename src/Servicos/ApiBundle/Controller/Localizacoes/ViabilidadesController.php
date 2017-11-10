<?php
namespace Servicos\ApiBundle\Controller\Localizacoes;

use FOS\RestBundle\Request\ParamFetcher;
use Servicos\ApiBundle\Controller\RestController;
use Servicos\ApiBundle\Exceptions\ApiException;
use Servicos\ApiBundle\Service\Localizacoes\Viabilidades as ServiceLocalizacoesViabilidades;

/**
 *
 * @category Controllers
 * @package  Servicos\ApiBundle\Controller\Permissoes
 * @author   Reinaldo Krinski <reinaldo.krinski@gmail.com>
 * @license  http://localhost proprietary
 */
class ViabilidadesController extends RestController
{
    /**
     *
     * @param int $id id da viabilidade
     *
     * @access public
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getViabilidadeAction(int $id)
    {
        try {
            
            return $this->success(
                ['msg'=>'getViabilidadeAction']
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
    public function getViabilidadesAction(ParamFetcher $objParamFetcher)
    {
        try {
            
            return $this->success(
                ['msg'=>'getViabilidadesAction']
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
    public function postViabilidadeAction(ParamFetcher $objParamFetcher)
    {
        
        try {
            $objViabilidadeCriar = $this->get('servicos_api.localizacoes.viabilidades.criar');
            if(!($objViabilidadeCriar instanceof ServiceLocalizacoesViabilidades\Criar)){
                throw new \Exception('Class "Servicos\ApiBundle\Service\Localizacoes\Viabilidades\Criar" not found.', 500);
            }
            $objViabilidadeCriar->save($objParamFetcher);
            
            return $this->success(
                ['msg'=>'postViabilidadeAction']
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
    public function patchViabilidadeAction(int $id, ParamFetcher $objParamFetcher)
    {
        try {
            
            return $this->success(
                ['msg'=>'patchViabilidadeAction']
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
    public function putViabilidadeAction(int $id, ParamFetcher $objParamFetcher)
    {
        try {
            
            return $this->success(
                ['msg'=>'putViabilidadeAction']
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
    public function deleteViabilidadeAction(int $id)
    {
        try {
            
            return $this->success(
                ['msg'=>'deleteViabilidadeAction']
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
