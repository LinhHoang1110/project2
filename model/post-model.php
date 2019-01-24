<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 23/01/2019
 * Time: 11:31
 */

require_once './../model/connectDB.php';

function getAllPost(){
    $getAll = 'SELECT * FROM vnpTraining.post';

    $conn = getConn();
    if($conn == 'error') return 'error connection';
    return mysqli_query($conn, $getAll);
}

function getListOfClass(){
    $getQuantityOfClass = 'SELECT distinct class FROM vnpTraining.post';

    $conn = getConn();
    if($conn == 'error') return 'error connection';
    return mysqli_query($conn, $getQuantityOfClass);
}

/**
 * get list of post with specified index of class
 * @param $class number
 * @return bool|mysqli_result|string
 */
function getListPostOfIndividualClass($class){
    $getListPost = 'SELECT * FROM vnpTraining.post WHERE class = "'.$class.'"';

    $conn = getConn();
    if($conn == 'error') return 'error connection';
    return mysqli_query($conn, $getListPost);
}