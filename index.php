<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 29/01/2019
 * Time: 09:57
 */

require_once "./model/connectDB.php";

$action = isset($_GET['action']) ? $_GET['action'] : "mainpage";

session_start();
$_SESSION['miny_action'] = $action;

if (!isset($_COOKIE['miny_username']) || !isset($_COOKIE['miny_password'])) {
    // invoke login.php
} else {
    $checkLogin = 'SELECT * FROM User WHERE username="'.$_COOKIE['miny_username'].'" AND password="'.$_COOKIE['miny_password'].'"';

    $user = mysqli_query(Database::getConnection(), $checkLogin);


    if($user->num_rows > 0) {
        // invoke login.php
    } else {
        // redirect to the action page
    }
}