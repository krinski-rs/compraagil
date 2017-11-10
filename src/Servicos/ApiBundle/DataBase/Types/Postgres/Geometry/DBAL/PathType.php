<?php

namespace Servicos\ApiBundle\DataBase\Types\Postgres\Geometry\DBAL;

use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;

use Servicos\ApiBundle\DataBase\Types\Postgres\Geometry\PHP\Point;
use Servicos\ApiBundle\DataBase\Types\Postgres\Geometry\PHP\Path;

class PathType extends Type
{
    const PATH = 'path';

    public function getName()
    {
        return self::PATH;
    }

    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return 'PATH';
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        $points = explode('),(', str_replace(array('[(', ')]'), array('(', ')'), $value));
        $objPath = new Path();
        if(count($points)){
            reset($points);
            while($point = current($points)){
                list($longitude, $latitude) = sscanf(str_replace(array('(', ')'), array('', ''), $point), '%f,%f');
                $objPath->addPoint(new Point($latitude, $longitude));
                next($points);
            }
        }
        
        return $objPath;
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        if ($value instanceof Path) {
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
                $value = "[$value]";
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