<?php

    // Then, you can implement the interface in a class by using the implements keyword
    class MySQLDatabase implements DatabaseInterface {
        private $connection;
    
        public function connect($host, $user, $pass) {
            // code to connect to MySQL database
            $this->connection = mysqli_connect($host, $user, $pass);
        }
    
        public function query($sql) {
            // code to execute a query on MySQL database
            return mysqli_query($this->connection, $sql);
        }
    
        public function close() {
            // code to close the connection to MySQL database
            mysqli_close($this->connection);
        }
    }


?>