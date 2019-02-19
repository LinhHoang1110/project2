<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 24/01/2019
 * Time: 16:29
 */

require_once './../model/post-model.php';

$type = $_GET['type'] ? $_GET['type'] : 'getAllPost';
$postModel = new Post();

if ($type == 'getAllPost') {
    $post = $postModel->getAllPost();

    $returnValue = [];

    while ($row = $post->fetch_object()) {
        $returnValue[] = $row;
    }

    echo json_encode($returnValue);
} else if ($type == 'createPost') {
    $title = $_GET['title'];
    $author = $_GET['author'];
    $content = $_GET['content'];
    $subject = $_GET['subject'];
    $category = $_GET['category'];
    $class = $_GET['class'];
    $maxIdPost = 0;
    $maxIdPostQuery = $postModel->getMaxIdPost();

    if ($maxIdPostQuery->num_rows != 0) {
        while ($row = $maxIdPostQuery->fetch_assoc()) {
            $maxIdPost = $row['MAX(idpost)'];
        }
    }


    echo $postModel->addPost($maxIdPost + 1, $title, $author, '{\"content\":\"' . $content . '\"}', $subject, $category, $class, 1);
} else if ($type == 'updatePost') {
    echo $postModel->updatePost('a', 'b', 'abc', 'c', 'a', '9','1','13');
}