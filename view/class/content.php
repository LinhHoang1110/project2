<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 16/01/2019
 * Time: 11:14
 */

require_once './../model/post-model.php';
?>

<?php
$class = $_GET['class'];
$post = new Post();

//    =====================Get data from database=========================
$listLiterature = $post->getListPostWithClassAndSubject($class,"Van hoc");
$listMath = $post->getListPostWithClassAndSubject($class, "Toan hoc");

?>

<div class="grade-content">
    <?php
        if($listLiterature == 'error connection') echo 'can not connect to database';
        else {
            if($listLiterature->num_rows > 0){
                echo '
                <div class="grade-news" id="sv">
                    <div class="mainpage-news-title">
                        <div class="news-title">Soạn văn</div>
                        <div class="news-viewall">Xem tất cả<i class="fas fa-caret-right" style="margin-left: 4px;"></i>
                        </div>
                        <div class="above_"></div>
                        <div class="_"></div>
                    </div>';
                echo '<div class="mainpage-news-content" id="sv-grade-news-content">';

                $check = false;
                $count = 0;

                while($row = $listLiterature->fetch_assoc()){
                    $content = json_decode($row['content']);
                    $content->content = str_replace("<h3>","", $content->content);
                    $content->content = str_replace("<p>","", $content->content);
                    $content->content = str_replace("</h3>","", $content->content);
                    $content->content = str_replace("</p>","", $content->content);

                    $count++;

                    if (($count == 6) && ($listLiterature->num_rows > 6)) {
                        echo '<a href="http://localhost/project2/view/detail.php?idpost='.$row['idpost'].'" class="grade-post blur-content">';
                        $check = true;
                    } else echo '<a href="http://localhost/project2/view/detail.php?idpost='.$row['idpost'].'" class="grade-post">';

                    echo '
                        <div class="post-title">' . $row['title'] . '</div>
                        <div class="post-author">' . $row['author'] . '</div>
                        <div class="post-statistic">
                            <div class="post-like"><i class="fas fa-heart" style="color: #e06666; margin-right: 6px;"></i>' . $row['likes'] . '</div>
                            <div class="post-view"><i class="far fa-eye" style="color: #6ea3ed; margin-right: 6px;"></i>' . $row['views'] . '</div>
                        </div>
                        <div class="post-content">' . $content->content . '</div>
                        </a>';

                    if ($check) break;
                }

                echo '</div>';

                if($check){
                    echo '
                    <div class="grade-shadow"></div>
                    <div class="flex-row-nowrap" id="literatureMenu">
                        <button class="grade-btn" style="margin-bottom: 15px;" id="expand-sv">Xem thêm</button>
                        <div class="preload-icon" id="preload-icon"></div>
                    </div>';
                }
                echo '</div>';
            } else {
                echo "No data to display";
            }
        }
    ?>
</div>

