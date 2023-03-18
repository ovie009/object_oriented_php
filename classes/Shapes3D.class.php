<?php 

    interface Shapes3D{

        public function area(float $radius, float $length, float $width, float $height);
        public function volume(float $radius, float $length, float $width, float $height);
    }

?>