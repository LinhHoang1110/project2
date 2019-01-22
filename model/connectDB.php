<?php
    class database{
        private $conn;
        private $servername = "localhost";
        private $username = "manhnt";
        private $password = "220897";
        private $dbname = "vnpTraining";

        private function __construct(){
            // this function is created to prevent creating new object database
        }

        public static function singleton(){
            if(!isset(self::$conn)){
                self::$conn = new mysqli($servername, $username, $password, $dbname);
            }
            
            return $conn;
        }
    }
?>