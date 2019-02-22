<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 20/02/2019
 * Time: 07:30
 */

require_once './../../view/admin/metadata.php';
?>

<div class="admin-frame">
    <?php
    require_once './../../view/admin/adminsidebar.php';
    require_once './../../view/admin/bodyadminsubject.php';
    ?>
</div>

<?php
require_once './../../view/admin/formpost.php';
?>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="./../../js/adminsubject.js"></script>