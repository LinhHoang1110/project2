<?php
/**
 * Created by PhpStorm.
 * User: tienmanh_tm
 * Date: 15/02/2019
 * Time: 08:16
 */

require_once './../../view/admin/metadata.php';

$action = isset($_GET['action'])?$_GET['action']:'default';
?>

<div class="admin-frame">
    <?php
    require_once './../../view/admin/adminsidebar.php';
    if($action == 'addpost') require_once './../../view/admin/bodyadminaddpost.php';
    else require_once './../../view/admin/bodyadminpost.php';
    ?>
</div>

<?php
require_once './../../view/admin/formpost.php';
?>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="./../../js/adminpost.js"></script>