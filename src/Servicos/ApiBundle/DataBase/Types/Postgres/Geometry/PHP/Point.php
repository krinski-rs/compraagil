<?php
namespace Servicos\ApiBundle\DataBase\Types\Postgres\Geometry\PHP;

class Point
{
    /**
     * @param float $latitude
     */
	private $latitude;
	
    /**
     * @param float $longitude
     */
	private $longitude;
	
    /**
     * @param float $latitude
     * @param float $longitude
     */
    public function __construct(float $latitude, float $longitude)
    {
        $this->latitude  = $latitude;
        $this->longitude = $longitude;
    }

    /**
     * @return float
     */
    public function getLatitude():float
    {
        return $this->latitude;
    }

    /**
     * @return float
     */
    public function getLongitude():float
    {
        return $this->longitude;
    }
}