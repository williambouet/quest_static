<?php
class Speedometer
{
    public const ONE_MILE_IN_KM = 0.621;

    public static function convertKmToMiles(int $km): float
    {
        return $km * self::ONE_MILE_IN_KM;
    }

    public static function convertMilesToKm(int $miles): float
    {
        return $miles / self::ONE_MILE_IN_KM;
    }

}



