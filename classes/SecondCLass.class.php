<?php
    
    class SecondClass extends FirstClass {
        // properties
        public static $staticProperty = "A static property! 🧱";

        // methods
        public static function staticMethod() {
            // if you want to access a static from a class that was extended to
            // you have to use the parent keyword
            echo parent::EXAMPLE;
            echo '<br>';
            // but if the static is withim the class you use the self keyword
            echo self::$staticProperty;
        }

    }

?>