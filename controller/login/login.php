<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 29/01/2019
 * Time: 10:27
 */

require_once './../../model/user-model.php';
require_once './../object/user-controller.php';

session_start();

class Login
{
    private $userController;
    private $username;
    private $password;
    private $createInfo;
    private $action;

    public function __construct()
    {
        $this->userController = new UserController();
        $this->action = isset($_GET['signup-name'])?'signup':'login';

        if($this->action == 'login'){
            if (isset($_GET['login_username'])) $this->username = $_GET['login_username'];
            if (isset($_GET['login_password'])) $this->password = $_GET['login_password'];

            if(isset($this->username) && isset($this->password)){
                $userLogin = $this->login($this->username, $this->password);
                // Check login when this file is invoke
                if ($userLogin->num_rows > 0) { // successful loging in
                    // redirect to action page

                    while($row = $userLogin->fetch_assoc()){
                        $_SESSION['user_name'] = $row['fullname'];
                        $_SESSION['user_name'] = $row['username'];
                        $_SESSION['user_position'] = $row['position'];
                        $_SESSION['user_id'] = $row['idUser'];
                    }

                    header('Location: http://localhost/project2/view/mainpage.php');
                } else {
                    // notify username or password is wrong  or redirect to login page
                    require_once './../../view/login.php';
                }
            } else require_once './../../view/login.php';
        } else if($this->action == 'signup') {
            $this->createInfo = array();
            if (isset($_GET['signup-name'])) $this->createInfo['signup-name'] = $_GET['signup-name'];
            if (isset($_GET['signup-birth'])) $this->createInfo['signup-birth'] = $_GET['signup-birth'];
            if (isset($_GET['signup-phone'])) $this->createInfo['signup-phone'] = $_GET['signup-phone'];
            if (isset($_GET['signup-position'])) $this->createInfo['signup-position'] = $_GET['signup-position'];
            if (isset($_GET['signup-mail'])) $this->createInfo['signup-mail'] = $_GET['signup-mail'];
            if (isset($_GET['signup-username'])) $this->createInfo['signup-username'] = $_GET['signup-username'];
            if (isset($_GET['signup-pass'])) $this->createInfo['signup-pass'] = $_GET['signup-pass'];

            $this->createInfo['signup-id'] = ((int)$this->userController->getMaxId()) + 1;

            echo $this->createInfo['signup-birth'];

            if($this->userController->createUser($this->createInfo['signup-id'], $this->createInfo['signup-name'], $this->createInfo['signup-username'], $this->createInfo['signup-pass'], $this->createInfo['signup-position'], $this->createInfo['signup-phone'], $this->createInfo['signup-birth'], $this->createInfo['signup-mail']) !== TRUE) {
                // fail to create new account
            } else {
                header('Location: http://localhost/project2/view/mainpage.php');
            }
        }
    }

    public function login($username, $password)
    {
        return $this->userController->checkLogin($username, $password);
    }
}

new Login();
