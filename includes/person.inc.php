<?php

    class Person {

        // properties can also be simply decalred without assigning values to them
        // because values can be assigned to properties later
        public $name;
        public $eyeColor;
        public $age;


        // methods
        // using the setName methos to uodate the property "name"
        public function setName($name) {
            $this->name = $name;
        }

    }


?>