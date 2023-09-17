<?php

namespace App\View\helpers;

class Helper
{
    public static function calculated($time)
    {
        $currentTime = time();
        $diff = $currentTime - $time;
        if ($diff < 60) {
//
        } elseif ($diff < (60 * 60)) {
            $time = floor($diff / 60) . ' minutes ago';

        } elseif ($diff < (60 * 60 * 24)) {
            $time = floor($diff / (60 * 60)) . ' hours ago';
        } else {
            $time = floor($diff / (60 * 60 * 24)) . ' days ago';
        }
        return $time;
    }

//    function roundToNearest($number, $precision = 2) {
//        $multiplier = 10 ** $precision;
//        return round($number * $multiplier) / $multiplier;
//    }

    function roundTo($number,$precision = 2)
    {

        $multiplier = 10 ** $precision;

    }

}
