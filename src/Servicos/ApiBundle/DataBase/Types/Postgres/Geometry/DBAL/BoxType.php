<?php

namespace Servicos\ApiBundle\DataBase\Types\Postgres\Geometry\DBAL;

use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;

use Servicos\ApiBundle\DataBase\Types\Postgres\Geometry\PHP\Point;
use Servicos\ApiBundle\DataBase\Types\Postgres\Geometry\PHP\Lseg;
use Servicos\ApiBundle\DataBase\Types\Postgres\Geometry\PHP\Box;

class BoxType extends Type
{
    const BOX = 'box';
    
    public function getName()
    {
        return self::BOX;
    }
    
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return 'BOX';
    }
    
    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        $points = explode('),(', str_replace(array('((', '))'), array('(', ')'), $value));
        if(count($points) == 2){
            list($longitude, $latitude) = sscanf(str_replace(array('(', ')'), array('', ''), $points[0]), '%f,%f');
            $objPointX = new Point($latitude, $longitude);
            list($longitude, $latitude) = sscanf(str_replace(array('(', ')'), array('', ''), $points[1]), '%f,%f');
            $objPointY = new Point($latitude, $longitude);
            $objBox = new Box($objPointX, $objPointY);
            return $objBox;
        }
        
        return null;
    }
    
    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        if ($value instanceof Box) {
            $objPointX = $value->getPointX();
            $objPointY = $value->getPointY();
            $value = '';
            $value.= sprintf('(%F,%F)', $objPointX->getLongitude(), $objPointX->getLatitude());
            $value.= ',';
            $value.= sprintf('(%F,%F)', $objPointY->getLongitude(), $objPointY->getLatitude());
            $value = "($value)";
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