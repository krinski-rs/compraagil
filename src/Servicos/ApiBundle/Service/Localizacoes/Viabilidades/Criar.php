<?php
namespace Servicos\ApiBundle\Service\Localizacoes\Viabilidades;

use Doctrine\Bundle\DoctrineBundle\Registry;
use FOS\RestBundle\Request\ParamFetcher;
use Servicos\ApiBundle\Entity\Localizacoes\ViabilidadesCaixaEmenda;

class Criar {
    /**
     *
     * @var \Doctrine\ORM\EntityManager
     */
    private $objEntityManager = NULL;
    
    public function __construct(Registry $objRegistry)
    {
        $this->objEntityManager = $objRegistry->getManager('default');
    }
    
    public function save(ParamFetcher $objParamFetcher)
    {
    	try {
    		$objViabilidades = new ViabilidadesCaixaEmenda();
    		$objViabilidades->setViabAtivo(TRUE);
    		$objViabilidades->setViabCor('#000000');
    		$objViabilidades->setViabDatacadastro(new \DateTime());
    		$objViabilidades->setViabNome('01');
    		$objViabilidades->setViabRemovido(FALSE);
    		//$objViabilidades->setViabTipo('CIRCUITO');
    		$this->objEntityManager->persist($objViabilidades);
    		$this->objEntityManager->flush();
    		
    	} catch (\Exception $e) {
    		echo $e->getMessage();
    		exit();
    	}
        return $objViabilidades;
    }
}