<?php
final class circle{
    static public $radius=10;
    static public $pi=3.14;

    static function area(){
         echo "面积：".self::$pi*self::$radius*self::$radius;
         echo "<br>";
    }

    static function perimeter(){
        echo "周长：".self::$pi*self::$radius*2;
        echo "<br>";
    }
}

$cc= new circle();
$cc->area();
$cc->perimeter();



















?>