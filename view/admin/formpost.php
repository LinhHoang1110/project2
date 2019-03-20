<?php
/**
 * Created by PhpStorm.
 * User: tienmanh_tm
 * Date: 15/02/2019
 * Time: 10:43
 */

?>

<div class="admin-form-post-blur" id="admin-form-post-blur"></div>

<div class="admin-form-post" id="admin-form-post">
    <div class="form-post-header">
        <div class="form-header-title" id="form-header-title">ID FORM</div>
        <div class="_"></div>
    </div>
    <div class="form-post-content" style="height: 400px;">
        <div class="post-property">Title</div>
        <div class="divinput" id="divinput-title" style="padding: 10px;"></div>
        <div class="post-property">Author</div>
        <div class="divinput" id="divinput-author" style="padding: 10px;"></div>
        <div class="post-property">Content</div>
        <div class="divinput" id="divinput-content" style="padding: 10px;"></div>
        <div class="post-property">Subject</div>
        <div class="divinput" id="divinput-subject" style="padding: 10px;"></div>
        <div class="post-property">Category</div>
        <div class="divinput" id="divinput-category" style="padding: 10px;"></div>
        <div class="post-property">Class</div>
        <div class="divinput" id="divinput-class" style="padding: 10px;"></div>
    </div>
    <div class="_"></div>
    <div class="form-post-footer">
        <button class="form-btn form-notice" id="form-cancel" type="button"><i class="fas fa-ban"></i> Hủy</button>
        <a href="http://localhost/project2/controller/admin/admin.php?type=adminpost&action=addpost&idpost=" id="form-edit" class="a-btn form-warning" id="admin-add-post" style="margin: 10px 10px 10px 0; border-radius: 5px;"><i class="far fa-edit"></i> Sửa</a>
        <button class="form-btn form-notice" id="form-delete" type="button"><i class="fas fa-trash"></i> Xóa</button>
    </div>
</div>
