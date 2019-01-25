<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 24/01/2019
 * Time: 16:29
 */

require_once './../model/post-model.php';

$type = $_GET['type'];
$postModel = new Post();

if($type == 'getAllPost'){
    $post = $postModel->getAllPost();

    $returnValue = [];

    while($row = $post->fetch_object()){
        $returnValue[] = $row;
    }

    echo json_encode($returnValue);
}