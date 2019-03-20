<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 21/02/2019
 * Time: 14:15
 */

?>

<div class="admin-content">
    <div class="admin-frame-content">
        <div class="admin-post-header">
            <div class="admin-subject-title">
                <div style="float: left"><i>Thêm lớp học</i></div>
            </div>
        </div>
        <div style="overflow: auto">
            <div class="_"></div>
        </div>
        <div class="admin-post-table" id="admin-post-table">
            <div class="admin-addclass-title">Tên lớp</div>
            <input class="admin-addclass-input" type="text" placeholder="Tên lớp học">
            <div>
                <div class="admin-addclass-title">Tên môn học</div>
                <input class="admin-addclass-input admin-addclass-subjectname" id="admin-input-class" type="text" placeholder="Tên môn học">
                <button class="admin-btn" id="admin-btn-addsubject" type="button" style="margin: 0 0 0 10px;">Thêm môn học</button>
            </div>
            <div class="subject-table" id="subject-table">
                <div class="table-row" style="text-align: center">
                    <div class="col-left table-subject-name cell-header"><strong><i>Tên môn học</i></strong></div>
                    <div class="col-center table-subject-category cell-header"><strong><i>Danh mục trong môn</i></strong></div>
                    <div class="col-right table-subject-action cell-header"><strong><i>Hành động</i></strong></div>
                </div>
                <div class="table-row" style="text-align: center">
                    <div class="col-left table-subject-name">Van hoc</div>
                    <div class="col-center table-subject-category">
                        <div class="category-subject">
                            <div class="addclass-category">Soan van</div>
                            <i class="addclass-category-delete fas fa-times" style="line-height: 40px;"></i>
                        </div>
                        <div class="category-subject">
                            <input class="addclass-category" placeholder="Nhập tên danh mục" style="outline: none; background-color: #c4e6c2">
                            <i class="addclass-category-check fas fa-check" style="line-height: 40px;"></i>
                        </div>
                    </div>
                    <div class="col-right table-subject-action"><i class="far fa-trash-alt icon-notice"></i></div>
                </div>
            </div>
        </div>
        <div class="flex-row-nowrap" id="admin-post-menu">

        </div>
    </div>
</div>
