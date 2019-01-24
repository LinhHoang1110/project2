<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 16/01/2019
 * Time: 11:01
 */

require_once './../model/post-model.php';

$idpost = $_GET['idpost'];
$post = getDetailPost($idpost);
?>

<div class="detail-content">
    <?php
    if($post == 'error connection') echo "can not connect to database";
    else {
        if($post->num_rows > 0){
            while($row = $post->fetch_assoc()){
                $content = json_decode($row['content']);

                echo '
                <div class="detail-content-header">
                    <img src="./../images/chitiet/avatar.png"
                         style="width: 30px; float: left; margin: 10px 11px 0 20px; cursor: pointer;">
                    <div class="detail-author">'.$row['author'].'</div>
                    <div class="detail-statistic">
                        <div class="post-like"><i class="fas fa-heart" style="color: #e06666; margin-right: 6px;"></i>'.$row['likes'].'</div>
                        <div class="post-view"><i class="far fa-eye" style="color: #6ea3ed; margin-right: 6px;"></i>'.$row['views'].'</div>
                    </div>
                </div>';

                echo '
                <div class="detail-content-text">
                '.$content->content.'
                </div>';
            }
        } else {
            echo "can not get data from database";
        }
    }
    ?>

    <div class="detail-cmtfb">
        <div class="fb-comments" data-href="https://tienmanh2208.github.io/project2/detail.html" data-width="100%"
             data-numposts="2"></div>
    </div>
</div>