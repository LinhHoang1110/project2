<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 20/02/2019
 * Time: 07:29
 */

require_once './../../view/admin/metadata.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'default';
?>

    <div class="admin-frame">
        <?php
        require_once './../../view/admin/adminsidebar.php';
        if ($action === 'addclass') require_once './../../view/admin/bodyadminaddclass.php';
        else require_once './../../view/admin/bodyadminclass.php';
        ?>
    </div>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<?php if ($action === 'addclass'): ?>
    <script src="http://localhost/project2/js/adminaddclass.js"></script>
<?php else: ?>
    <script src="./../../js/adminclass.js"></script>
<?php endif; ?>