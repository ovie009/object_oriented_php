<?php

    // To use an interface in PHP, you need to declare it with the interface keyword 
    // and then list the methods that it requires\

    interface DatabaseInterface {
        public function connect($host, $user, $pass);
        public function query($sql);
        public function close();
    }

    // thus the DatabaseInterface requires the following methods connect, query and close

    // Note: you cannot make an interface require a property in PHP. Interfaces can only declare methods, not properties. All methods declared in an interface must be public. Interfaces can also have constants
?>