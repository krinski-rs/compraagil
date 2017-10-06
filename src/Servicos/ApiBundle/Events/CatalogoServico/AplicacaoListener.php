<?php
namespace Servicos\ApiBundle\Events\CatalogoServico;

use Servicos\ApiBundle\Entity\CatalogoServico\Aplicacao;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Doctrine\DBAL\LockMode;

class AplicacaoListener
{
    public function postPersist(Aplicacao $objAplicacao, LifecycleEventArgs $objLifecycleEventArgs)
    {
        $entity = $objLifecycleEventArgs->getObject();
        $entityManager = $objLifecycleEventArgs->getObjectManager();
        if($entity instanceof Aplicacao)
        {
            echo "\n".$entity->getApliCodigoid();
            echo "\n".$objAplicacao->getApliParentCodigoid();
            $objAplicacaoRepository = $entityManager->getRepository("ServicosApiBundle:CatalogoServico\Aplicacao");
            if($objAplicacao->getApliParentCodigoid())
            {
                $objAplicacaoParent = $objAplicacaoRepository->find($objAplicacao->getApliParentCodigoid());
                if($objAplicacaoParent instanceof Aplicacao)
                {
                    $left = $objAplicacaoParent->getApliLeft();
                    
                    $objAplicacao->setApliLeft(($left + 1));
                    $objAplicacao->setApliRight(($left + 2));
                    
                    $entityManager->merge($objAplicacao);
                    
                    
                    $arrayResultRight = $objAplicacaoRepository->createQueryBuilder('aplic')
                    ->where('aplic.apliRight > :apliRight')
                    ->setParameter('apliRight', $left)
                    ->getQuery()
                    ->getResult();
                    if(count($arrayResultRight))
                    {
                        reset($arrayResultRight);
                        while($objAplicacaoRight = current($arrayResultRight))
                        {
                            $objAplicacaoRight->setApliRight(($objAplicacaoRight->getApliRight() + 2));
                            $entityManager->merge($objAplicacaoRight);
                            next($arrayResultRight);
                        }
                    }
                    
                    $arrayResultLeft = $objAplicacaoRepository->createQueryBuilder('aplic')
                    ->andWhere('aplic.apliLeft > :apliLeft')
                    ->setParameter('apliLeft', $left)
                    ->getQuery()
                    ->getResult();
                    if(count($arrayResultLeft))
                    {
                        reset($arrayResultLeft);
                        while($objAplicacaoLeft = current($arrayResultLeft))
                        {
                            $objAplicacaoLeft->setApliLeft(($objAplicacaoLeft->getApliLeft() + 2));
                            $entityManager->merge($objAplicacaoLeft);
                            next($arrayResultLeft);
                        }
                    }
                }else
                {
                    $arrayResultRight = $objAplicacaoRepository->createQueryBuilder('aplic')
                    ->where('aplic.apliRight = MAX(aplic.apliRight)')
                    ->getQuery()
                    ->getResult();
                    
                    \Doctrine\Common\Util\Debug::dump($arrayResultRight);
                    exit();
                    
                    $right = $objAplicacaoParent->getApliLeft();
                    
                    $objAplicacao->setApliLeft(($right + 1));
                    $objAplicacao->setApliRight(($right + 2));
                    
                    $entityManager->merge($objAplicacao);
                    
                    
                    $arrayResultRight = $objAplicacaoRepository->createQueryBuilder('aplic')
                    ->where('aplic.apliRight > :apliRight')
                    ->setParameter('apliRight', $left)
                    ->getQuery()
                    ->getResult();
                    if(count($arrayResultRight))
                    {
                        reset($arrayResultRight);
                        while($objAplicacaoRight = current($arrayResultRight))
                        {
                            $objAplicacaoRight->setApliRight(($objAplicacaoRight->getApliRight() + 2));
                            $entityManager->merge($objAplicacaoRight);
                            next($arrayResultRight);
                        }
                    }
                    
                    $arrayResultLeft = $objAplicacaoRepository->createQueryBuilder('aplic')
                    ->andWhere('aplic.apliLeft > :apliLeft')
                    ->setParameter('apliLeft', $left)
                    ->getQuery()
                    ->getResult();
                    if(count($arrayResultLeft))
                    {
                        reset($arrayResultLeft);
                        while($objAplicacaoLeft = current($arrayResultLeft))
                        {
                            $objAplicacaoLeft->setApliLeft(($objAplicacaoLeft->getApliLeft() + 2));
                            $entityManager->merge($objAplicacaoLeft);
                            next($arrayResultLeft);
                        }
                    }
                }
            } else
            {
                try {
                    $arrayResultRight = $objAplicacaoRepository->createQueryBuilder('aplic')
                    ->orderBy('aplic.apliRight','DESC')
                    ->setMaxResults(1)
                    ->getQuery()
                    ->getResult();
                    
                    if(count($arrayResultRight) && array_key_exists(0, $arrayResultRight)){
                        $objAplicacao->setApliLeft(($arrayResultRight[0]->getApliRight()+1));
                        $objAplicacao->setApliRight(($arrayResultRight[0]->getApliRight()+2));
                        
                    }else{
                        $objAplicacao->setApliLeft(1);
                        $objAplicacao->setApliRight(2);
                    }
                    $entityManager->merge($objAplicacao);
                } catch (\Exception $e) {
                    \Doctrine\Common\Util\Debug::dump($e);
                }
            }
            $entityManager->flush();
        }
    }
}