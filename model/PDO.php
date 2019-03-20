<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 20/03/2019
 * Time: 09:45
 */

$rootPath = $_SERVER['DOCUMENT_ROOT'];

require_once $rootPath.'/project2/config.php';

$dsn= "mysql:host=$servername;dbname=$dbname";

try{
    // create a PDO connection with the configuration data
    $conn = new PDO($dsn, $username, $password);

    // display a message if connected to database successfully
    if($conn){
        echo "<script> console.log('Connected to the $dbname database successfully!')</script>";
    }
}catch (PDOException $e){
    // report error message
    echo $e->getMessage();
}