<?php

    // an abstract class ia a class that can only be accessed from other classes
    // that means they cannot be instantiated
    abstract class Visa {
        // method
        public function visaPayment() {
            return "Payment made using Visa card";
        }

        // this line of code ensures any class that extends to Visa class
        // must have a method of getPayment
        abstract public function getPayment();
        // note: an abstract method can only be created in an abstract class
    }
?>