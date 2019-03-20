<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 22/02/2019
 * Time: 11:44
 */

?>

<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 21/02/2019
 * Time: 14:15
 */

?>

<div class="admin-content">
    <div class="admin-post-header">
        <div class="admin-subject-title">
            <div style="float: left">THÊM BÀI ĐĂNG</div>
        </div>
    </div>
    <div style="overflow: auto">
        <div class="_"></div>
    </div>
    <div class="flex-col" id="admin-post-menu">
        <div class="form-post-content">
            <div class="post-property">Title</div>
            <input type="text" class="divinput" id="divinput-title">
            <div class="post-property">Author</div>
            <input type="text" class="divinput" id="divinput-author" contenteditable="true">
            <div class="post-property">Content</div>
            <div>
                <textarea name="contentpost" id="divinputcontent"></textarea>
                <script>
                    CKEDITOR.replace('contentpost');
                </script>
            </div>
            <div class="post-property">Subject</div>
            <input type="text" class="divinput" id="divinput-subject" contenteditable="true">
            <div class="post-property">Category</div>
            <input type="text" class="divinput" id="divinput-category" contenteditable="true">
            <div class="post-property">Class</div>
            <input type="text" class="divinput" id="divinput-class" contenteditable="true">
        </div>
        <div class="_"></div>
        <div class="form-post-footer">
            <?php if(!isset($_GET['idpost'])): ?>
            <a id="form-add" class="a-btn form-success" id="admin-add-post" style="margin-right: 10px;"><i class="fas fa-plus"></i> Thêm bài đăng</a>
            <?php else: ?>
            <a id="form-update" class="a-btn form-success" id="admin-add-update" style="margin-right: 10px;"><i class="fas fa-file-download"></i> Cập nhật bài đăng</a>
            <?php endif; ?>
            <a href="http://localhost/project2/controller/admin/admin.php?type=adminpost" id="form-cancel" class="a-btn form-notice" id="admin-add-post" style="margin-right: 10px;"><i class="fas fa-ban"></i> Hủy</a>
        </div>
    </div>
</div>