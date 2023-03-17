<?php 

    class Circle implements Shapes2D {

        public function perimeter(float $radius, float $length = null, float $width = null) {
            // calculate perimeter of a circle
            $perimeter = 2 * self::PI * $radius;
            return $perimeter;
        }

        public function area(float $radius, float $length = null, float $width = null) {
            // calculate the area of a circle
            $area = self::PI * $radius * $radius;
            return $area;
        }
    }
?>