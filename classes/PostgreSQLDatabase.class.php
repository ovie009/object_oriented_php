<?php

    // You can also implement multiple interfaces in a single class by separating them with commas.
    class PostgreSQLDatabase implements DatabaseInterface, LoggerInterface {
        
        private $connection;

        // code for both interfaces
        public function login(string $username, string $password) {

        } 

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