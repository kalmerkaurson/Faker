<?php

namespace Faker\Provider\es_CO;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
     * @link https://en.wikipedia.org/wiki/Telephone_numbers_in_Colombia
     */
    protected static $formats = array(
        '+57 {{mobileOperatorCode}} ### ####',
        '+57 {{mobileOperatorCode}} #######',
        '+57 {{mobileOperatorCode}}#######',
        '+57 {{mobileOperatorCode}}-###-####',
        '+57 {{mobileOperatorCode}}-#######',
        '+57 {{areaCode}} {{twoToEight}}## ####',
        '+57 {{areaCode}} {{twoToEight}}######',
        '+57 {{areaCode}}{{twoToEight}}######',
        '+57 {{areaCode}}-{{twoToEight}}##-####',
        '+57 {{areaCode}}-{{twoToEight}}######',
    );

    protected static $mobileOperatorCodes = array(
        300, 301, 302, 303, 304, 305, 31, 320, 321, 322, 323, 350, 351
    );

    public static function mobileOperatorCode()
    {
        return self::randomElement(static::$mobileOperatorCodes);
    }

    public static function areaCode()
    {
        return self::numberBetween(1, 8);
    }

    public static function twoToEight()
    {
        return self::numberBetween(2, 8);
    }
}
