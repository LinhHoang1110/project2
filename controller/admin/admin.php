<?php
/**
 * Created by PhpStorm.
 * User: tienmanh_tm
 * Date: 15/02/2019
 * Time: 08:13
 */

//require_once './../../model/post-model.php';

class Admin {
    private $postModel;

    public function __construct()
    {
        require_once './../../view/admin/adpost.php';
    }
}

new Admin();