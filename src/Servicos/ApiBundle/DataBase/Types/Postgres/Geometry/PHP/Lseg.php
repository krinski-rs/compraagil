<?php
namespace Servicos\ApiBundle\DataBase\Types\Postgres\Geometry\PHP;

class Lseg
{
    /**
     * @param Point $objPointX
     */
    private $objPointX;
    /**
     * @param Point $objPointY
     */
    private $objPointY;
    
    public function __construct(Point $objPointX, Point $objPointY)
    {
        $this->objPointX  = $objPointX;
        $this->objPointY  = $objPointY;
    }

    /**
     * @return Point
     */
    public function getPointX()
    {
        return $this->objPointX;
    }

    /**
     * @return Point
     */
    public function getPointY()
    {
        return $this->objPointY;
    }
}