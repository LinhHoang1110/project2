<?php
/**
 * Created by PhpStorm.
 * User: tienmanh_tm
 * Date: 13/02/2019
 * Time: 08:48
 */
?>

<div class="admin-frame">
    <div class="admin-sidebar">
        <div class="admin-logo">Miny Admin</div>
        <div class="admin-submenu"><i class="fas fa-columns icon-submenu"></i> Quản lý bài đăng</div>
        <div class="admin-submenu"><i class="fas fa-chalkboard-teacher icon-submenu"></i> Quan ly lop hoc</div>
        <div class="admin-submenu"><i class="fab fa-leanpub icon-submenu"></i> Quan ly mon hoc</div>
        <div class="admin-sidebar-footer">
            <div class="admin-avatar"></div>
            <div class="admin-info">
                <div class="admin-name">Nguyen Tien Manh</div>
                <div class="admin-position">Admin</div>
            </div>
            <div class="admin-setting"><i class="fas fa-cog"></i></div>
        </div>
    </div>
    <div class="admin-content">
        <div class="admin-frame-content">
            <div class="admin-post-header">
                <input class="admin-input" type="text" placeholder="Nhập từ khóa tìm kiếm">
                <input class="admin-btn" type="button" value="Tim kiem">
                <button class="admin-btn" type="button" style="margin-right: 10px;"><i class="fas fa-plus"></i> Them bai dang</button>
            </div>
            <div style="overflow: auto">
                <div class="_"></div>
            </div>
            <div class="admin-post-table">
                <div class="table-row" style="text-align: center">
                    <div class="cell-header table-title">Tiêu đề</div>
                    <div class="cell-header table-content">Nội dung</div>
                    <div class="cell-header table-subject">Môn học</div>
                    <div class="cell-header table-category">Thê loại</div>
                    <div class="cell-header table-class">Lớp</div>
                    <div class="cell-header table-action">Hành động</div>
                </div>
            </div>
        </div>
    </div>
</div>
