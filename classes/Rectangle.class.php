<?php

    class Rectangle implements Shapes2D{
        
        public function perimeter(float $radius = null, float $length, float $width) {
            // calculate the perimeter
            $perimeter = $length * $width;
            return $perimeter;
        }

        public function area(float $radius = null, float $length, float $width) {
            // calculate the area
            $area = $length * $width;
            return $area;
        }
    }

?>