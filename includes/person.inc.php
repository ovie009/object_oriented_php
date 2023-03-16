<?php

    class Person {

        // properties can also be simply decalred without assigning values to them
        // because values can be assigned to properties later
        private $name;
        private $eyeColor;
        private $age;

        // statuc properties are properties that are not directly connected to a particular object

        private static $drinkingAge = 18;

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

        // static function to set drinking age
        public static function setDrinkingAge($newDrinkingAge) {
            self::$drinkingAge = $newDrinkingAge;
        }

        // function to get drinking age
        public static function getDrinkingAge() {
            // static properties can also be accessed from none static methods
            return self::$drinkingAge;
        }

    }


?>