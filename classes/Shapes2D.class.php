<?php 

    interface Shapes2D{

        const PI = 3.142;

        public function perimeter(float $radius, float $length, float $width);
        public function area(float $radius, float $length, float $width);
    }

?>