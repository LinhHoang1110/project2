<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 20/02/2019
 * Time: 07:32
 */

?>

<div class="admin-content">
    <div class="admin-frame-content">
        <div class="admin-post-header">
            <div class="admin-subject-title">
                <div style="float: left">Lớp</div>
                <div style="height: 100%;">
                    <select class="admin-selectbox">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
            </div>
            <a href="http://localhost/project2/controller/admin/admin.php?type=adminclass&action=addclass" class="a-btn" id="admin-add-post" style="margin-right: 10px;"><i class="fas fa-plus"></i> Thêm lớp hoc</a>
        </div>
        <div style="overflow: auto">
            <div class="_"></div>
        </div>
        <div class="admin-post-table" id="admin-post-table">
            <div class="table-row" style="text-align: center">
                <div class="cell-header table-subject-subject">Môn học</div>
                <div class="cell-header table-subject-category">Danh mục</div>
                <div class="cell-header table-subject-action">Hành động</div>
            </div>
            <div class="table-row" style="text-align: center">
                <div class="table-subject-subject">Van hoc</div>
                <div class="table-subject-category">
                    <div class="list-subject">Sinh học</div>
                    <div class="list-subject">Toán học</div>
                    <div class="list-subject">Văn học</div>
                    <div class="list-subject">Địa lý</div>
                    <div class="list-subject">Sinh học</div>
                    <div class="list-subject">Vật lý</div>
                    <div class="list-subject">Tiếng anh</div>
                </div>
                <div class="table-subject-action"><i class="far fa-edit icon-warning"></i></div>
            </div>
        </div>
        <div class="flex-row-nowrap" id="admin-post-menu">

        </div>
    </div>
</div>
