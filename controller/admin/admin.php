<?php
/**
 * Created by PhpStorm.
 * User: tienmanh_tm
 * Date: 15/02/2019
 * Time: 08:13
 */

class Admin {
    public function __construct()
    {
        require_once './../../view/admin/adpost.php';
    }
}

new Admin();