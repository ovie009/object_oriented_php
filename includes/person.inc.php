<?php

    class Person {
        // properties (similar to variables)
        private $firstname = "Iffie";
        private $lastname = "Ovie";
        protected $age = "24";

        public function fullname() {
            $fullname = $this->firstname.' '.$this->lastname;
            return $fullname;
        }
    }

    // to access the properties or methods in the Person class
    // within the Pet Class you have to use a keyword known as 'extends'
    class Pet extends Person{ // now the Pet class has access to the Person class
        // method (similar to functions)
        public function owner() {
            $owner = "John Doe";
            return $owner;
        }

        // if the property age is set as private, it'll not be able to be accessed 
        //  from a class that extends to it, so if its set as Protected, it can only be accessed
        //  from the within the same class or an from a class that extends tp the parent class
        public function age() {
            $age = $this->age;
            return $age;
        }
    }

    // a common practice is to set property and methos as private
    // it should only be switched to public if we want to use it outside the class

?>