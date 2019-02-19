<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 23/01/2019
 * Time: 11:31
 */

require_once './../model/connectDB.php';

class Post
{
    private $conn;
    private $getAll = 'SELECT * FROM post';
//    private $getAll = 'SELECT * FROM vnpTraining.post';
    private $getQuantityOfClass = 'SELECT distinct class FROM post';

    public function __construct()
    {
        $this->conn = Database::getConnection();
    }

    /**
     * Get all Post from database
     * @return bool|mysqli_result|string
     */
    function getAllPost()
    {
        if ($this->conn == 'error') return 'error connection';
        return mysqli_query($this->conn, $this->getAll);
    }

    /**
     * Get list classes are existed in database
     * @return bool|mysqli_result|string
     */
    function getListOfClass()
    {
        if ($this->conn == 'error') return 'error connection';
        return mysqli_query($this->conn, $this->getQuantityOfClass);
    }

    /**
     * get list of post with specified index of class
     * @param $class number
     * @return bool|mysqli_result|string
     */
    function getListPostOfIndividualClass($class)
    {
        $getListPost = 'SELECT * FROM post WHERE class = "' . $class . '"';

        if ($this->conn == 'error') return 'error connection';
        return mysqli_query($this->conn, $getListPost);
    }

    /**
     * Get list of Post with specified class and subject
     * @param $class number
     * @param $subject subject's name
     * @return bool|mysqli_result|string
     */
    function getListPostWithClassAndSubject($class, $subject)
    {
        $getListPost = 'SELECT * FROM post WHERE class = "' . $class . '" AND subject="' . $subject . '"';

        if ($this->conn == 'error') return 'error connection';
        return mysqli_query($this->conn, $getListPost);
    }

    /**
     * Get content of single post
     * @param $idpost
     * @return bool|mysqli_result|string
     */
    function getDetailPost($idpost)
    {
        $getSinglePost = 'SELECT * FROM post WHERE idpost = "' . $idpost . '"';

        if ($this->conn == 'error') return 'error connection';
        return mysqli_query($this->conn, $getSinglePost);
    }

    /**
     * Get Max id of post table to generate id
     * @return bool|mysqli_result|string
     */
    function getMaxIdPost(){
        $getMaxIdPostQuery = 'SELECT MAX(idpost) FROM post';

        if ($this->conn == 'error') return 'error connection';
        return mysqli_query($this->conn, $getMaxIdPostQuery);
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
        $updatePostQuery = 'UPDATE post SET title = ' . $title . ', author = ' . $author . ', content = ' . $content . ', subject = ' . $subject . ', category = ' . $category . ', class = ' . $class . ', idUser = ' . $iduser . ' WHERE (idpost = ' . $idpost . ')';
        return $this->conn->query($updatePostQuery);
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
        $createPost = 'INSERT INTO post (idpost, title, author, views, likes, content, subject, category, class, idUser) VALUES (' . $idpost . ', "' . $title . '", "' . $author . '", 0, 0, "' . $content . '", "' . $subject . '", "' . $category . '", ' . $class . ', ' . $iduser . ')';

        return $this->conn->query($createPost);
    }
}