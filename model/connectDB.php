<?php
//        public function __construct(){
//            // this function is created to prevent creating new object database
//        }

function getConn(){
    $servername = "localhost";
    $username = "manhnt";
    $password = "220897";
    $dbname = "vnpTraining";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        return 'error';
    }
    return $conn;
}
?>