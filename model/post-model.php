<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 23/01/2019
 * Time: 11:31
 */

require_once './../model/connectDB.php';

class Post{
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
    function getAllPost(){
        if($this->conn == 'error') return 'error connection';
        return mysqli_query($this->conn, $this->getAll);
    }

    /**
     * Get list classes are existed in database
     * @return bool|mysqli_result|string
     */
    function getListOfClass(){
        if($this->conn == 'error') return 'error connection';
        return mysqli_query($this->conn, $this->getQuantityOfClass);
    }

    /**
     * get list of post with specified index of class
     * @param $class number
     * @return bool|mysqli_result|string
     */
    function getListPostOfIndividualClass($class){
        $getListPost = 'SELECT * FROM post WHERE class = "'.$class.'"';

        if($this->conn == 'error') return 'error connection';
        return mysqli_query($this->conn, $getListPost);
    }

    /**
     * Get list of Post with specified class and subject
     * @param $class number
     * @param $subject subject's name
     * @return bool|mysqli_result|string
     */
    function getListPostWithClassAndSubject($class, $subject){
        $getListPost = 'SELECT * FROM post WHERE class = "'.$class.'" AND subject="'.$subject.'"';

        if($this->conn == 'error') return 'error connection';
        return mysqli_query($this->conn, $getListPost);
    }

    /**
     * Get content of single post
     * @param $idpost
     * @return bool|mysqli_result|string
     */
    function getDetailPost($idpost){
        $getSinglePost = 'SELECT * FROM post WHERE idpost = "'.$idpost.'"';

        if($this->conn == 'error') return 'error connection';
        return mysqli_query($this->conn, $getSinglePost);
    }
}