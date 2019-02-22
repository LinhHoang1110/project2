<?php
/**
 * Created by PhpStorm.
 * User: tienmanh_tm
 * Date: 15/02/2019
 * Time: 08:14
 */

//$currentPage = isset($_GET['type'])?$_GET['type']:'adminpost';
$currentPage = $currentpage;
?>

<div class="admin-sidebar">
    <div class="admin-logo"><i style="font-family: Roboto-Bold; font-size: 40px">Miny</i><i style="font-family: Roboto-Regular; font-size: 20px;">Admin</i></div>
    <?php if($currentPage === 'adminpost'): ?>
    <div id="admin-submenu-post"><a href="http://localhost/project2/controller/admin/admin.php?type=adminpost" class="admin-submenu-active admin-submenu"><i class="fas fa-columns admin-icon-submenu-active icon-submenu" id="admin-submenu-post-icon"></i> Quản lý bài đăng</a></div>
    <?php else: ?>
    <div id="admin-submenu-post"><a href="http://localhost/project2/controller/admin/admin.php?type=adminpost" class="admin-submenu"><i class="fas fa-columns icon-submenu" id="admin-submenu-post-icon"></i> Quản lý bài đăng</a></div>
    <?php endif ?>
    <?php if($currentPage === 'adminclass'): ?>
    <div id="admin-submenu-class"><a href="http://localhost/project2/controller/admin/admin.php?type=adminclass" class="admin-submenu-active admin-submenu"><i class="fas fa-chalkboard-teacher icon-submenu admin-icon-submenu-active"></i> Quản lý lớp học</a></div>
    <?php else: ?>
    <div id="admin-submenu-class"><a href="http://localhost/project2/controller/admin/admin.php?type=adminclass" class="admin-submenu"><i class="fas fa-chalkboard-teacher icon-submenu"></i> Quản lý lớp học</a></div>
    <?php endif ?>
    <?php if($currentPage === 'adminsubject'): ?>
    <div id="admin-submenu-subject"><a href="http://localhost/project2/controller/admin/admin.php?type=adminsubject" class="admin-submenu-active admin-submenu"><i class="fab fa-leanpub icon-submenu admin-icon-submenu-active"></i> Quản lý môn học</a></div>
    <?php else: ?>
    <div id="admin-submenu-subject"><a href="http://localhost/project2/controller/admin/admin.php?type=adminsubject" class="admin-submenu"><i class="fab fa-leanpub icon-submenu"></i> Quản lý môn học</a></div>
    <?php endif ?>
    <div class="admin-sidebar-footer">
        <div class="admin-avatar"></div>
        <div class="admin-info">
            <div class="admin-name">Nguyễn Tiến Mạnh</div>
            <div class="admin-position">Admin</div>
        </div>
        <div class="admin-setting"><i class="fas fa-cog"></i></div>
    </div>
</div>
