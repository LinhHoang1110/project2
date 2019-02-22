<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 20/02/2019
 * Time: 07:31
 */
?>

<div class="admin-content">
    <div class="admin-frame-content">
        <div class="admin-post-header">
            <input class="admin-input" type="text" placeholder="Nhập lớp muốn tìm kiếm">
            <input class="admin-btn" id="admin-find-post" type="button" value="Tìm lớp">
            <a href="http://localhost/project2/controller/admin/admin.php?type=adminclass&action=addclass" class="a-btn" id="admin-add-post" style="margin-right: 10px;"><i class="fas fa-plus"></i> Thêm lớp hoc</a>
        </div>
        <div style="overflow: auto">
            <div class="_"></div>
        </div>
        <div class="admin-post-table" id="admin-post-table">
            <div class="table-row" style="text-align: center">
                <div class="cell-header table-class-stt">STT</div>
                <div class="cell-header table-class-class">Lớp</div>
                <div class="cell-header table-class-subject">Môn học</div>
                <div class="cell-header table-class-action">Hành động</div>
            </div>
            <!--            <div class="table-row" style="text-align: center">-->
            <!--                <div class="table-class-stt">1</div>-->
            <!--                <div class="table-class-class">1</div>-->
            <!--                <div class="table-class-subject">-->
            <!--                    <div class="list-subject">Sinh học</div>-->
            <!--                    <div class="list-subject">Toán học</div>-->
            <!--                    <div class="list-subject">Văn học</div>-->
            <!--                    <div class="list-subject">Địa lý</div>-->
            <!--                    <div class="list-subject">Sinh học</div>-->
            <!--                    <div class="list-subject">Vật lý</div>-->
            <!--                    <div class="list-subject">Tiếng anh</div>-->
            <!--                </div>-->
            <!--                <div class="table-class-action"><i class="fas fa-file-invoice icon-success"></i><i class="far fa-edit icon-warning"></i></div>-->
            <!--            </div>-->
        </div>
        <div class="flex-row-nowrap" id="admin-post-menu">

        </div>
    </div>
</div>
