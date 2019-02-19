<?php
/**
 * Created by PhpStorm.
 * User: tienmanh_tm
 * Date: 15/02/2019
 * Time: 14:01
 */

require_once './../../model/post-model.php';

class PostController
{
    private $post;

    public function __construct(){
        $this->post = new Post();
    }

    /**
     * Get all Post from database
     * @return bool|mysqli_result|string
     */
    function getAllPost()
    {
        return $this->post->getAllPost();
    }

    /**
     * Get list classes are existed in database
     * @return bool|mysqli_result|string
     */
    function getListOfClass()
    {
        return $this->post->getListOfClass();
    }

    /**
     * get list of post with specified index of class
     * @param $class number
     * @return bool|mysqli_result|string
     */
    function getListPostOfIndividualClass($class)
    {
        return $this->post->getListPostOfIndividualClass($class);
    }

    /**
     * Get list of Post with specified class and subject
     * @param $class number
     * @param $subject subject's name
     * @return bool|mysqli_result|string
     */
    function getListPostWithClassAndSubject($class, $subject)
    {
        return $this->getListPostWithClassAndSubject($class, $subject);
    }

    /**
     * Get content of single post
     * @param $idpost
     * @return bool|mysqli_result|string
     */
    function getDetailPost($idpost)
    {
        return $this->post->getDetailPost($idpost);
    }

    /**
     * Get Max id of post table to generate id
     * @return bool|mysqli_result|string
     */
    function getMaxIdPost(){
        $maxIdPostQuery = $this->post->getMaxIdPost();

        if($maxIdPostQuery->num_rows == 0) return 0;
        else {
            while($row = $maxIdPostQuery->fetch_assoc()){
                return $row['MAX(idpost)'];
            }
        }
    }

    /**
     * Update a post is existed in database
     * @param $title
     * @param $author
     * @param $content {"content":"..."}
     * @param $subject
     * @param $category
     * @param $class
     * @param $iduser
     * @param $idpost
     * @return bool|mysqli_result
     */
    function updatePost($title, $author, $content, $subject, $category, $class, $iduser, $idpost)
    {
        return $this->post->updatePost($title, $author, $content, $subject, $category, $class, $iduser, $idpost);
    }

    /**
     * Adding Post to database
     * @param $title
     * @param $author
     * @param $content { "content":"..." }
     * @param $subject
     * @param $category
     * @param $class
     * @param $iduser
     * @return bool|mysqli_result
     */
    function addPost($idpost, $title, $author, $content, $subject, $category, $class, $iduser)
    {
        return $this->post->addPost($idpost, $title, $author, $content, $subject, $category, $class, $iduser);
    }
}
