<?php

namespace Servicos\ApiBundle\Exceptions;

class ApiException extends \Exception
{
    /**
     * @var int $statusCode
     * @access private
     */
    private $statusCode;

    /**
     * @var array $dados
     * @access private
     */
    private $dados;

    /**
     * @author Reinaldo Krinski <reinaldo.krinski@gmail.com>
     * @param int   $statusCode
     * @param array $dados
     * @access public
     * @throws \Exception
     */
    public function __construct(int $statusCode = 500, array $dados = array())
    {
        $this->statusCode     = $statusCode;
        $this->dados         = $dados;

        parent::__construct();
    }

    /**
     * Gets the value of statusCode.
     *
     * @return int
     */
    public function getStatusCode():int
    {
        return $this->statusCode;
    }

    /**
     * Gets the value of dados.
     *
     * @return array
     */
    public function getDados():array
    {
        return $this->dados;
    }
}