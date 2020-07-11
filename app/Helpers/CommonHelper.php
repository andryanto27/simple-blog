<?php

namespace App\Helpers;

class CommonHelper{

    public static function generateToken($min = 100, $max = 999){
        return md5(str_random(10)."_".rand($min, $max)."_".round(time(true)));
    }

    public static function renderScript($file){
        $random = self::generateToken(10000, 9999);
        return url(strtolower("scripts/".$file.".js?".$random));
    }

}
