<?php
require_once './../model/connectDB.php';

class Footer{
    private $getSubjectSql = 'SELECT * FROM footer';
    private $conn;

    public function __construct()
    {
        $this->conn = Database::getConnection();
    }

    /**
     * Get list of subject in footer
     * @return bool|mysqli_result
     */
    public function getSubject(){
        if($this->conn == 'error') return 'error connection';
        else return mysqli_query($this->conn, $this->getSubjectSql);
    }
}