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
    private $currentPage;

    public function __construct()
    {
        $nextPage = isset($_GET['type'])?$_GET['type']:'adminpost';
        $this->redirectPage($nextPage);
    }

    public function redirectPage($nextPage){
        if($nextPage !== $this->currentPage) {
            $currentpage = $nextPage;
            if($nextPage === 'adminpost') require_once './../../view/admin/adpost.php';
            else if($nextPage === 'adminclass') require_once './../../view/admin/adclass.php';
            else if($nextPage === 'adminsubject') require_once './../../view/admin/adsubject.php';

            $this->currentPage = $nextPage;
        }
    }
}

new Admin();