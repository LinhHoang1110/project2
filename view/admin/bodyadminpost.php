<?php
/**
 * Created by PhpStorm.
 * User: tienmanh_tm
 * Date: 15/02/2019
 * Time: 08:18
 */
?>
<div class="admin-content">
    <div class="admin-frame-content">
        <div class="admin-post-header">
            <input class="admin-input" type="text" placeholder="Nhập từ khóa tìm kiếm">
            <input class="admin-btn" id="admin-find-post" type="button" value="Tìm kiếm">
            <a href="http://localhost/project2/controller/admin/admin.php?type=adminpost&action=addpost" class="a-btn" id="admin-add-post" style="margin-right: 10px;"><i class="fas fa-plus"></i> Thêm bài đăng</a>
        </div>
        <div style="overflow: auto">
            <div class="_"></div>
        </div>
        <div class="admin-post-table" id="admin-post-table">
            <div class="table-row" style="text-align: center">
                <div class="cell-header table-title"><strong>Tiêu đề</strong></div>
                <div class="cell-header table-content"><strong>Nội dung</strong></div>
                <div class="cell-header table-subject"><strong>Môn học</strong></div>
                <div class="cell-header table-category"><strong>Thê loại</strong></div>
                <div class="cell-header table-class"><strong>Lớp</strong></div>
                <div class="cell-header table-action"><strong>Hành động</strong></div>
            </div>
        </div>
        <div class="flex-row-nowrap" id="admin-post-menu">

        </div>
    </div>
</div>

