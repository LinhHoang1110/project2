<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 22/02/2019
 * Time: 11:44
 */

?>

<div class="admin-form-post" id="admin-form-post" style="position: inherit; transform: translateY(0); width: 100%;">
    <div class="form-post-header">
        <div class="form-header-title" id="form-header-title">ID FORM</div>
        <div class="_"></div>
    </div>
    <div class="form-post-content">
        <div class="post-property">Title</div>
        <div class="divinput" id="divinput-title" contenteditable="true"></div>
        <div class="post-property">Author</div>
        <div class="divinput" id="divinput-author" contenteditable="true"></div>
        <div class="post-property">Content</div>
        <textarea name="editor1"></textarea>
        <script>
            CKEDITOR.replace( 'editor1' );
        </script>
        <div class="post-property">Subject</div>
        <div class="divinput" id="divinput-subject" contenteditable="true"></div>
        <div class="post-property">Category</div>
        <div class="divinput" id="divinput-category" contenteditable="true"></div>
        <div class="post-property">Class</div>
        <div class="divinput" id="divinput-class" contenteditable="true"></div>
    </div>
    <div class="_"></div>
    <div class="form-post-footer">
        <button class="form-btn form-success" id="form-add" type="button"><i class="fas fa-plus"></i> Thêm bài đăng</button>
        <button class="form-btn form-notice" id="form-cancel" type="button"><i class="fas fa-ban"></i> Hủy</button>
        <button class="form-btn form-success" id="form-update" type="button"><i class="fas fa-check"></i> Hoàn tất</button>
        <button class="form-btn form-warning" id="form-edit" type="button"><i class="far fa-edit"></i> Sửa</button>
        <button class="form-btn form-notice" id="form-delete" type="button"><i class="fas fa-trash"></i> Xóa</button>
    </div>
</div>