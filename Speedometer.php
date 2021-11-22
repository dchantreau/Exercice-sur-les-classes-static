<?php

class Speedometer
{
    public const CONVERTER_KM_TO_MILES = 0.621;
    public const CONVERTER_MILES_TO_KM = 1.609;


    public static function convertKmToMiles(int $NumberOfKM): float
    {
        return $NumberOfKM * self::CONVERTER_KM_TO_MILES;
    }

    public static function convertMilesToKm(int $NumberOfMiles): float
    {
        return $NumberOfMiles * self::CONVERTER_MILES_TO_KM;
    }

}
