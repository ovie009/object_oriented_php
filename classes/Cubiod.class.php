<?php

    class Cubiod implements Shapes3D {

        public function area(float $radius = null, float $length, float $width, float $height) {
            $area = 2 * $length * $width + 2 * $length * $height + 2 * $width * $height;
            return $area;
        }

        public function volume(float $radius = null, float $length, float $width, float $height) {
            $volume = $length * $width * $height;
            return $volume;
        }
    }

?>