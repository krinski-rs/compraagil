<?php
namespace Servicos\ApiBundle\DataBase\Types\Postgres\Geometry\PHP;

class Circle
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
	 * @param float $raio
	 */
	private $raio;
	
    /**
     * @param float $latitude
     * @param float $longitude
     */
    public function __construct(float $latitude, float $longitude, float $raio)
    {
        $this->latitude  = $latitude;
        $this->longitude = $longitude;
        $this->raio = $raio;
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

    /**
     * @return float
     */
    public function getRaio():float
    {
        return $this->raio;
    }
}