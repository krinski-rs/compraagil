<?php

namespace Servicos\ApiBundle\DataBase\Types\Postgres\Geometry\DBAL;

use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;

use Servicos\ApiBundle\DataBase\Types\Postgres\Geometry\PHP\Circle;

class CircleType extends Type
{
    const CIRCLE = 'circle';

    public function getName()
    {
        return self::CIRCLE;
    }

    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return 'CIRCLE';
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
    	list($longitude, $latitude, $raio) = sscanf($value, '<(%f,%f),%f>');

        return new Circle($latitude, $longitude, $raio);
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        if ($value instanceof Circle) {
            $value = sprintf('<(%F,%F),%F>', $value->getLongitude(), $value->getLatitude(), $value->getRaio());
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