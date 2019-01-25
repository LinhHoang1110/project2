<?php

class Database
{
    private static $servername = "localhost";
    private static $username = "manhnt";
    private static $password = "220897";
    private static $dbname = "vnpTraining";
    private static $conn;

    private function __construct()
    {
        // this function is created to prevent creating new object database
    }

    public static function getConnection()
    {
        if (isset(self::$conn)) {
            return self::$conn;
        } else {
            self::$conn = new mysqli(self::$servername, self::$username, self::$password, self::$dbname);
            if (self::$conn->connect_error) {
                die("Connection failed: " . self::$conn->connect_error);
                return 'error';
            }

            return self::$conn;
        }
    }
}