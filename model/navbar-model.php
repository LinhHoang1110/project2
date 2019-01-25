<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 23/01/2019
 * Time: 10:13
 */

require_once './../model/connectDB.php';

class Navbar{
    private $getNavbarSql = 'SELECT * FROM vnpTraining.navbar ORDER BY class DESC';
    private $conn;

    public function __construct()
    {
        $this->conn = Database::getConnection();
    }

    /**
     * Get class and subjects in each class
     * @return bool|mysqli_result|string
     */
    public function getNavbar(){
        if($this->conn == 'error') return 'error connection';
        else return mysqli_query($this->conn, $this->getNavbarSql);
    }
}