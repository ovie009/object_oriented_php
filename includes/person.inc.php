<?php

    class Person {

        // properties can also be simply decalred without assigning values to them
        // because values can be assigned to properties later
        private $name;
        private $eyeColor;
        private $age;

        // used to assign values to properties when the class in instantiated
        // contructor
        public function __construct($name, $eyeColor, $age)
        {
            $this->name = $name;
            $this->eyeColor = $eyeColor;
            $this->age = $age;
        }

        // methods
        // using the setName methos to uodate the property "name"
        public function setName($name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }

    }


?>