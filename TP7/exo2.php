<?php

    abstract interface Shape{
        function getArea();
    }

    class Square implements Shape{
        private $width;
        private $height;
        function __construct($w, $h){
            $this->width = $w;
            $this->height = $h;
        }
        function getArea(){
            return $this->width * $this->height;
        }
    }
    class Circle implements Shape{
        private $radius;
        function getArea(){
            return $this->radius * $this->radius * 3.14;
        }
        function __construct($r){
            $this->radius = $r;
        }
    }
    $test1 = new Square(5, 5);
    $test2 = new Circle(3);

    $tab = array($test1, $test2);

    foreach ($tab as $value){
        echo get_class($value)." Area :".$value->getArea();
        echo"<br>";
    }


?>