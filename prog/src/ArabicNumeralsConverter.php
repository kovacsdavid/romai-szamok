<?php
/**
 * Created by PhpStorm.
 * User: munka
 * Date: 2018.11.12.
 * Time: 14:24
 */

class ArabicNumeralsConverter
{
    /**
     * @var array
     */
    protected static $lookup = [
        'M'  => 1000,
        'CM' => 900,
        'D'  => 500 ,
        'CD' => 400,
        'C'  => 100,
        'XC' => 90,
        'L'  => 50,
        'XL' => 40,
        'X'  => 10,
        'IX' => 9,
        'V'  => 5,
        'IV' => 4,
        'I'  => 1
    ];

    /**
     * @param $number
     * @return string
     */
    public static function convert($number)
    {

        $solution = 0;


        for ($i = 0; $i < strlen($number); $i++){
            $n1 = static::$lookup[$number[$i]];

            if ($i + 1 < strlen($number)){
                $n2 = static::$lookup[$number[$i + 1]];

                if ($n1 >= $n2){
                    $solution += $n1;
                } else {
                    $solution += $n2 - $n1;
                    $i++;
                }
            } else {
                $solution += $n1;
                $i++;
            }
        }

        return $solution;
    }
}