<?php

    class Cubiod implements Shapes3D {

        private $length;
        private $breadth;
        private $height;

        public function __construct(float $length, float $breadth, float $height) {
            $this->length = $length;
            $this->breadth = $breadth;
            $this->height = $height;
        }

        public function area() {
            
        }

        public function volume() {

        }
    }

?>