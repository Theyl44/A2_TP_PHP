<?php

    interface Shape{
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

    echo"pour le carré l'aire est de : ".$test1->getArea();
    echo"<br>";
    echo"pour le cercle l'aire est de : ".$test2->getArea();
    echo"<br>";

?>