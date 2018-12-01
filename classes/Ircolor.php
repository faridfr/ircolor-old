<?php

class Ircolor {
    
    public static $randomColors;

    public static function RandomColors ($number){
        self::$randomColors = '';
        foreach (RandomColor::many($number) as $c) self::$randomColors .= '<a href="hex?hex=' . substr($c, -6) . '" class="tooltips"  title="#' . substr($c, -6) . '" data-placement="bottom" data-toggle="tooltip"><span style="background:' . $c . ';"></span></a>';
        return self::$randomColors;
    }

    public static function RandomColorsInHue ($number,$hue){
        self::$randomColors = '';
        foreach (RandomColor::many($number, array('hue'=>$hue)) as $c) self::$randomColors .= '<a href="hex?hex=' . substr($c, -6) . '"  class="tooltips"  title="#' . substr($c, -6) . '" data-placement="bottom" data-toggle="tooltip"><span style="background:' . $c . ';"></span></a>';
        return self::$randomColors;
    }
    
    
}