<?php

namespace Servicos\ApiBundle\DataBase\Types\Postgres\Geometry\DBAL;

use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;

use Servicos\ApiBundle\DataBase\Types\Postgres\Geometry\PHP\Point;
use Servicos\ApiBundle\DataBase\Types\Postgres\Geometry\PHP\Polygon;

class PolygonType extends Type
{
    const POLYGON = 'polygon';

    public function getName()
    {
        return self::POLYGON;
    }

    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return 'POLYGON';
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        $points = explode('),(', str_replace(array('((', '))'), array('(', ')'), $value));
        $objPolygon = new Polygon();
        if(count($points)){
            reset($points);
            while($point = current($points)){
                list($longitude, $latitude) = sscanf(str_replace(array('(', ')'), array('', ''), $point), '%f,%f');
                $objPolygon->addPoint(new Point($latitude, $longitude));
                next($points);
            }
        }
        
        return $objPolygon;
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        if ($value instanceof Polygon) {
            $arrayPoints = $value->getPoints();
            $value = '';
            if($arrayPoints->count()){
                $arrayPoints->rewind();
                while($objPoint = $arrayPoints->current()){
                    if($arrayPoints->key()){
                        $value.= ',';
                    }
                    $value.= sprintf('(%F,%F)', $objPoint->getLongitude(), $objPoint->getLatitude());
                    $arrayPoints->next();
                }
                $value = "($value)";
            }
        }

        return $value;
    }

    public function canRequireSQLConversion()
    {
        return true;
    }

    public function convertToPHPValueSQL($sqlExpr, $platform)
    {
        return sprintf('%s', $sqlExpr);
    }

    public function convertToDatabaseValueSQL($sqlExpr, AbstractPlatform $platform)
    {
        return sprintf('%s', $sqlExpr);
    }
}