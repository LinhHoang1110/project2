<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 29/01/2019
 * Time: 09:15
 */

require_once './../../model/connectDB.php';

class User
{
    private $conn;

    private $getAllUser = 'SELECT * FROM User';
    private $getMaxId = 'SELECT MAX(idUser) FROM User';

    public function __construct(){
        $this->conn = Database::getConnection();
    }

    /**
     * Get all user in database
     * @return bool|mysqli_result|string
     */
    public function getAllUser(){
        if($this->conn == 'error') return 'error connection';
        return mysqli_query($this->conn, $this->getAllUser);
    }

    /**
     * Get one user with specified property
     * @param $propertyName
     * @param $value
     * @return bool|string
     */
    public function getSpecifiedUser($propertyName, $value){
        if($this->conn == 'error') return false;
        switch ($propertyName) {
            case 'mail':
                return 'SELECT * FROM User WHERE mail = "'.$value.'"';
            case 'phone':
                return 'SELECT * FROM User WHERE phone = "'.$value.'"';
            case 'username':
                return 'SELECT * FROM User WHERE username = "'.$value.'"';
            case 'name':
                return 'SELECT * FROM User WHERE fullname = "'.$value.'"';
        }
    }

    /**
     * Check logging in of a user
     * @param $username
     * @param $password
     * @return bool|mysqli_result
     */
    public function checkLogin($username, $password){
        $checkLogin = 'SELECT * FROM User WHERE username="'.$username.'" AND password="'.$password.'"';

        return mysqli_query($this->conn, $checkLogin);
    }

    /**
     * Get max id of user table to generate new id
     * @return bool|mysqli_result
     */
    public function getMaxId(){
        return mysqli_query($this->conn, $this->getMaxId);
    }

    /**
     * Create new user
     * @param $idUser
     * @param $fullname
     * @param $username
     * @param $password
     * @param $position
     * @param $phone
     * @param $dateofbirth
     * @param $mail
     * @return bool|mysqli_result
     */
    public function createUser($idUser, $fullname, $username, $password, $position, $phone, $dateofbirth, $mail){
        $createUser = 'INSERT INTO User (idUser, fullname, username, password, position, phone, dateofbirth, mail) VALUES ("'.$idUser.'", "'.$fullname.'", "'.$username.'", "'.$password.'", "'.$position.'", "'.$phone.'", "'.$dateofbirth.'", "'.$mail.'")';

        return $this->conn->query($createUser);
    }
}
