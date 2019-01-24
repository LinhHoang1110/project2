<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 16/01/2019
 * Time: 10:59
 */

require_once './../model/post-model.php';

$idpost = $_GET['idpost'];
$post = getDetailPost($idpost);
?>

<div class="grade-header">
    <div class="grade-header-frame">
        <?php
        while($row = $post->fetch_assoc()){
            echo '
            <div class="grade-header-path"><a class="header-path" href="./mainpage.php">Trang chủ</a> / <a class="header-path" href="../class/body.php">Lớp '.$row['class'].'</a> / <a class="header-path" href="#">'.$row['subject'].'</a> / <a class="header-path" href="#">'.$row['category'].'</a> / <a class="header-path" href="#">'.$row['title'].'</a>
            </div>
            <!-- <div class="grade-circle-big">
                <div class="grade-circle-small"></div>
            </div> -->
            <div class="grade-frame-center">
                <div class="grade-header-text flex-row-nowrap">'.$row['title'].'</div>
            </div>';
        }
        ?>
    </div>
</div>
