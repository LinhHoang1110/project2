<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 30/01/2019
 * Time: 09:29
 */

require_once './../../model/user-model.php';

class UserController
{
    private $user;

    public function __construct(){
        $this->user = new User();
    }

    /**
     * Get all user in database
     * @return bool|mysqli_result|string
     */
    public function getAllUser(){
        return $this->user->getAllUser();
    }

    /**
     * Get one user with specified property
     * @param $propertyName
     * @param $value
     * @return bool|string
     */
    public function getSpecifiedUser($propertyName, $value){
        return $this->user->getSpecifiedUser($propertyName, $value);
    }

    /**
     * Check logging in of a user
     * @param $username
     * @param $password
     * @return bool|mysqli_result
     */
    public function checkLogin($username, $password){
        return $this->user->checkLogin($username, $password);
    }

    /**
     * Get max id of user table to generate new id
     * @return bool|mysqli_result
     */
    public function getMaxId(){
        $maxIdQuery = $this->user->getMaxId();

        if($maxIdQuery->num_rows == 0) return 0;
        else {
            while($row = $maxIdQuery->fetch_assoc()){
                return $row['MAX(idUser)'];
            }
        }
    }

    /**
     * Create user
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
        return $this->user->createUser($idUser, $fullname, $username, $password,  $position, $phone, $dateofbirth, $mail);
    }
}
