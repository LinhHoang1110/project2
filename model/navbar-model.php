<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 23/01/2019
 * Time: 10:13
 */

require_once './../model/connectDB.php';

function getNavbar(){

    $getNavbarSql = 'SELECT * FROM vnpTraining.navbar ORDER BY class DESC';

    $conn = getConn();
    if($conn == 'error') return 'error connection';
    return mysqli_query($conn, $getNavbarSql);
//    return 0;
}