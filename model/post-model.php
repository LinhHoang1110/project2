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

/**
 * Get list of Post with specified class and subject
 * @param $class number
 * @param $subject subject's name
 * @return bool|mysqli_result|string
 */
function getListPostWithClassAndSubject($class, $subject){
    $getListPost = 'SELECT * FROM vnpTraining.post WHERE class = "'.$class.'" AND subject="'.$subject.'"';

    $conn = getConn();
    if($conn == 'error') return 'error connection';
    return mysqli_query($conn, $getListPost);
}

function getDetailPost($idpost){
    $getSinglePost = 'SELECT * FROM vnpTraining.post WHERE idpost = "'.$idpost.'"';

    $conn = getConn();
    if($conn == 'error') return 'error connection';
    return mysqli_query($conn, $getSinglePost);
}