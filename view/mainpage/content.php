<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 16/01/2019
 * Time: 10:29
 */

require_once './../model/post-model.php';

$post = new Post();
?>

<?php
//====================Get data from database=======================
$contentData = $post->getAllPost();
$listOfPost9th = $post->getListPostOfIndividualClass(9);
$listOfPost8th = $post->getListPostOfIndividualClass(8);

//====================Get data from file=====================
//$contentData = file_get_contents('./../data/post.json');
//$contentPost = json_decode($contentData);
//$listOfClass = array();
//
//for ($i = 0; $i < count($contentPost); ++$i) {
//    if (!checkExistenceOfClass($contentPost[$i]->class, $listOfClass)) $listOfClass[$contentPost[$i]->class] = "Lớp " . $contentPost[$i]->class;
//}

/**
 * check whether a class exists or not
 * @param $class
 * @param $array
 * @return bool
 */
function checkExistenceOfClass($class, $array)
{
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == $class) return true;
    }

    return false;
}

?>

<div class="news">
    <div class="mainpage-news-title">
        <div class="news-title">Mới nhất</div>
        <div class="news-viewall">Xem tất cả<i class="fas fa-caret-right" style="margin-left: 4px;"></i></div>
        <div class="above_"></div>
        <div class="_"></div>
    </div>
    <div class="mainpage-news-content">
        <?php
        if ($contentData == 'error connection') echo 'can not connect to database';
        else {
            if ($contentData->num_rows > 0) {
                // output data of each row
                $count = 0;
                while ($row = $contentData->fetch_assoc()) {
                    $content = json_decode($row['content']);
                    $content->content = str_replace("<h3>","", $content->content);
                    $content->content = str_replace("<p>","", $content->content);
                    $content->content = str_replace("</h3>","", $content->content);
                    $content->content = str_replace("</p>","", $content->content);
                    $count++;
                    if ($count > 6) break;
                    echo '
                        <a class="post" href="http://localhost/project2/view/detail.php?idpost='.$row['idpost'].'">
                            <div class="post-title">' . $row['title'] . '</div>
                            <div class="post-author">' . $row['author'] . '</div>
                            <div class="post-statistic">
                                <div class="post-like"><i class="fas fa-heart" style="color: #e06666; margin-right: 6px;"></i>' . $row['likes'] . '</div>
                                <div class="post-view"><i class="far fa-eye" style="color: #6ea3ed; margin-right: 6px;"></i>' . $row['views'] . '</div>
                            </div>
                            <div class="post-content">' . $content->content . '</div>
                        </a>
                    ';
                }
            } else {
//                echo "0 results";
            }
        }
        ?>
    </div>
</div>
<?php
//================get from database======================
if ($listOfPost9th == 'error connection') echo 'can not connect to database';
else {
    if ($listOfPost9th->num_rows > 0) {
        echo '
            <div class="news">
                <div class="mainpage-news-title">
                    <div class="news-title">Lớp 9</div>
                    <div><a href="http://localhost/project2/view/class.php?class=9" class="news-viewall">Xem tất cả<i class="fas fa-caret-right" style="margin-left: 4px;"></i></a></div>
                    <div class="mainpage-tab">
                        <div class="tab-subject">Toán học</div>
                        <div class="tab-subject-active">Văn học</div>
                        <div class="tab-subject">Sinh học</div>
                        <div class="tab-subject">Địa lý</div>
                    </div>
                    <div class="above_"></div>
                    <div class="_"></div>
                </div>
                <div class="mainpage-news-content">';

        // output data of each row
        $count = 0;
        while ($row = $listOfPost9th->fetch_assoc()) {
            $content = json_decode($row['content']);
            $content->content = str_replace("<h3>","", $content->content);
            $content->content = str_replace("<p>","", $content->content);
            $content->content = str_replace("</h3>","", $content->content);
            $content->content = str_replace("</p>","", $content->content);
            $count++;
            if ($count > 6) break;
            echo '
                    <a class="post" href="http://localhost/project2/view/detail.php?idpost='.$row['idpost'].'">
                        <div class="post-title">' . $row['title'] . '</div>
                        <div class="post-author">' . $row['author'] . '</div>
                        <div class="post-statistic">
                            <div class="post-like"><i class="fas fa-heart" style="color: #e06666; margin-right: 6px;"></i>' . $row['likes'] . '
                            </div>
                            <div class="post-view"><i class="far fa-eye" style="color: #6ea3ed; margin-right: 6px;"></i>' . $row['views'] . '
                            </div>
                        </div>
                        <div class="post-content">' . $content->content . '
                        </div>
                    </a>
                    ';
        }
        echo '</div>';
        echo '</div>';
    } else {
//        echo "0 results";
    }
}

if ($listOfPost8th == 'error connection') echo 'can not connect to database';
else {
    if ($listOfPost8th->num_rows > 0) {
        echo '
            <div class="news">
                <div class="mainpage-news-title">
                    <div class="news-title">Lớp 8</div>
                    <div class="news-viewall">Xem tất cả<i class="fas fa-caret-right" style="margin-left: 4px;"></i></div>
                    <div class="mainpage-tab">
                        <div class="tab-subject">Toán học</div>
                        <div class="tab-subject-active">Văn học</div>
                        <div class="tab-subject">Sinh học</div>
                        <div class="tab-subject">Địa lý</div>
                    </div>
                    <div class="above_"></div>
                    <div class="_"></div>
                </div>
            <div class="mainpage-news-content">';

        // output data of each row
        $count = 0;
        while ($row = $listOfPost9th->fetch_assoc()) {
            $content = json_decode($row['content']);
            $content->content = str_replace("<h3>","", $content->content);
            $content->content = str_replace("<p>","", $content->content);
            $content->content = str_replace("</h3>","", $content->content);
            $content->content = str_replace("</p>","", $content->content);
            $count++;
            if ($count > 6) break;
            echo '
                    <a class="post" href="http://localhost/project2/view/detail.php?idpost='.$row['idpost'].'">
                        <div class="post-title">' . $row['title'] . '</div>
                        <div class="post-author">' . $row['author'] . '</div>
                        <div class="post-statistic">
                            <div class="post-like"><i class="fas fa-heart" style="color: #e06666; margin-right: 6px;"></i>' . $row['likes'] . '
                            </div>
                            <div class="post-view"><i class="far fa-eye" style="color: #6ea3ed; margin-right: 6px;"></i>' . $row['views'] . '
                            </div>
                        </div>
                        <div class="post-content">' . $content->content . '
                        </div>
                    </a>
                    ';
        }
        echo '</div>';
        echo '</div>';
    } else {
    }
}

?>
