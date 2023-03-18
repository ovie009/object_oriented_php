<?php

    class Cylinder implements Shapes3D {

        public function area(float $radius, float $length = null, float $width = null, float $height) {
            $area = 4 * Shapes2D::PI * $radius + 2 * Shape2D::PI * $radius * $height  ;
            return $area;
        }

        public function volume(float $radius, float $length = null, float $width = null, float $height) {
            $volume = Shapes2D::PI * $radius * $radius * $height;
            return $volume;
        }
    }

?>