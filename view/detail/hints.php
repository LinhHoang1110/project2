<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 16/01/2019
 * Time: 11:02
 */

require_once './../model/post-model.php';

$postModel = new Post();

$idpost = $_GET['idpost'];
$post = $postModel->getDetailPost($idpost);
$class = '';
$subject = '';

while ($row = $post->fetch_assoc()) {
    $class = $row['class'];
    $subject = $row['subject'];
    break;
}

$listRelevantPost = $postModel->getListPostWithClassAndSubject($class, $subject);
?>

<div class="news" style="margin-bottom: 65px;">
    <div class="mainpage-news-title">
        <div class="news-title">Có thể bạn quan tâm</div>
        <div class="news-viewall">Xem tất cả<i class="fas fa-caret-right" style="margin-left: 4px;"></i></div>
        <div class="above_"></div>
        <div class="_"></div>
    </div>
    <div class="mainpage-news-content">
        <?php
        if ($listRelevantPost == 'error connection') echo 'can not connect to database';
        else {
            if ($listRelevantPost->num_rows > 0) {
                $count = 0;
                while ($row = $listRelevantPost->fetch_assoc()) {
                    $count++;

                    if ($count > 6) break;

                    $content = json_decode($row['content']);
                    $content->content = str_replace("<h3>","", $content->content);
                    $content->content = str_replace("<p>","", $content->content);
                    $content->content = str_replace("</h3>","", $content->content);
                    $content->content = str_replace("</p>","", $content->content);

                    echo '
                    <a class="post" href="?idpost='.$row['idpost'].'">
                        <div class="post-title">'.$row['title'].'</div>
                        <div class="post-author">'.$row['author'].'</div>
                        <div class="post-statistic">
                            <div class="post-like"><i class="fas fa-heart" style="color: #e06666; margin-right: 6px;"></i>'.$row['likes'].'</div>
                            <div class="post-view"><i class="far fa-eye" style="color: #6ea3ed; margin-right: 6px;"></i>'.$row['views'].'</div>
                        </div>
                        <div class="post-content">'.$content->content.'</div>
                    </a>';
                }
            } else {
                echo "There is no relevant post";
            }
        }
        ?>
    </div>
</div>
