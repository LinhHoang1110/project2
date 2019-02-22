<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 20/02/2019
 * Time: 09:53
 */

require_once './../model/connectDB.php';

class ClassInfo{
    private $getAllClass = "SELECT * FROM class";
    private $conn;

    public function __construct()
    {
        $this->conn = Database::getConnection();
    }

    /**
     * Get all classes are existing in database
     * @return bool|mysqli_result
     */
    public function getAllClass(){
        if($this->conn == 'error') return false;
        else return mysqli_query($this->conn, $this->getAllClass);
    }

    /**
     * Get all the subjects in specified class
     * @param $class
     * @return bool|mysqli_result
     */
    public function getSubjectWithClass($class){
        if($this->conn == 'error') return false;
        else {
            $getSubjectWithClassQuery = "SELECT subject FROM classinfo WHERE classname='".$class."'";

            return mysqli_query($this->conn, $getSubjectWithClassQuery);
        }
    }

    /**
     * Get category of class.
     * @param $class
     * @param $subject
     * @return bool|mysqli_result
     */
    public function getCategory($class, $subject) {
        if($this->conn == 'error') return false;
        else {
            if(isset($subject)) {
                $subject = str_replace('_', " ", $subject);
                $getCategoryQuery = "SELECT category FROM classinfo WHERE classname='".$class."' and subject='".$subject."'";

                return mysqli_query($this->conn, $getCategoryQuery);
            } else {
                $getCategoryOfAllSubjectQuery = "SELECT subject FROM classinfo WHERE classname='".$class."'";

                return mysqli_query($this->conn, $getCategoryOfAllSubjectQuery);
            }
        }
    }
}