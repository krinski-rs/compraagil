<?php
namespace Servicos\ApiBundle\DataBase\Types\Postgres\Geometry\PHP;

class Path
{
    /**
     * @param \SplQueue $objSplQueue
     */
    private $objSplQueue;
	
    public function __construct()
    {
        $this->objSplQueue  = new \SplQueue();
    }

    /**
     * @return float
     */
    public function addPoint(Point $objPoint)
    {
        $this->objSplQueue->push($objPoint);
        return $this;
    }

    /**
     * @return \SplQueue
     */
    public function getPoints():\SplQueue
    {
        return $this->objSplQueue;
    }
}