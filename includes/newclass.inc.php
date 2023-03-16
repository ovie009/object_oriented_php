<?php

    class NewClass {
        
        // properties and methods goes here
        private $data = "This is a property";

        public function __construct() {
            echo  "This class has been instantiated <br>";
        }

        public function setData($newData) {
            $this->data = $newData;
        }

        public function getData() {
            return $this->data;
        }

        public function __destruct()
        {
            echo "<br> This is the end of the class!";
        }

    }

?>