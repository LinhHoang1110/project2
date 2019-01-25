<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 24/01/2019
 * Time: 16:29
 */

require_once './../model/post-model.php';

$type = $_GET['type'];

if($type == 'getAllPost'){
    $post = getAllPost();

    $returnValue = [];

    while($row = $post->fetch_object()){
        $returnValue[] = $row;
    }

    echo json_encode($returnValue);
}