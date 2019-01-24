<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 16/01/2019
 * Time: 10:29
 */

require_once './../model/post-model.php';
?>

<?php
//====================Get data from database=======================
$contentData = getAllPost();
$listOfPost9th = getListPostOfIndividualClass(9);
$listOfPost8th = getListPostOfIndividualClass(8);

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
                    $count++;
                    if ($count > 6) break;
                    echo '
                        <div class="post">
                            <div class="post-title">' . $row['title'] . '</div>
                            <div class="post-author">' . $row['author'] . '</div>
                            <div class="post-statistic">
                                <div class="post-like"><i class="fas fa-heart" style="color: #e06666; margin-right: 6px;"></i>' . $row['likes'] . '</div>
                                <div class="post-view"><i class="far fa-eye" style="color: #6ea3ed; margin-right: 6px;"></i>' . $row['views'] . '</div>
                            </div>
                            <div class="post-content">' . $content->content . '</div>
                        </div>
                    ';
                }
            } else {
                echo "0 results";
            }
        }

        //        ===========Get from file============
        //        for ($i = 0; $i < count($contentPost); ++$i) {
        //            if ($i == 6) break;
        //            echo '
        //                <div class="post">
        //                    <div class="post-title">' . $contentPost[$i]->title . '</div>
        //                    <div class="post-author">' . $contentPost[$i]->author . '</div>
        //                    <div class="post-statistic">
        //                        <div class="post-like"><i class="fas fa-heart" style="color: #e06666; margin-right: 6px;"></i>' . $contentPost[$i]->likes . '</div>
        //                        <div class="post-view"><i class="far fa-eye" style="color: #6ea3ed; margin-right: 6px;"></i>' . $contentPost[$i]->views . '</div>
        //                    </div>
        //                    <div class="post-content">' . $contentPost[$i]->content->content . '</div>
        //                </div>
        //                ';
        //        }
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
            $count++;
            if ($count > 6) break;
            echo '
                    <div class="post">
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
                    </div>
                    ';
        }
    } else {
        echo "0 results";
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
            $count++;
            if ($count > 6) break;
            echo '
                    <div class="post">
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
                    </div>
                    ';
        }
    } else {
//        echo "0 results";
        // can not find data
    }
}

//=================get from file=======================
//if ($listOfClass['9'] == "Lớp 9") {
//    echo '
//            <div class="news">
//                <div class="mainpage-news-title">
//                    <div class="news-title">Lớp 9</div>
//                    <div class="news-viewall">Xem tất cả<i class="fas fa-caret-right" style="margin-left: 4px;"></i></div>
//                    <div class="mainpage-tab">
//                        <div class="tab-subject">Toán học</div>
//                        <div class="tab-subject-active">Văn học</div>
//                        <div class="tab-subject">Sinh học</div>
//                        <div class="tab-subject">Địa lý</div>
//                    </div>
//                    <div class="above_"></div>
//                    <div class="_"></div>
//                </div>
//                <div class="mainpage-news-content">';
//    $countDisplay = 0;
//    for ($i = 0; $i < count($contentPost); ++$i) {
//        if ($contentPost[$i]->class == "9") {
//            $countDisplay++;
//            echo '
//                    <div class="post">
//                        <div class="post-title">' . $contentPost[$i]->title . '</div>
//                        <div class="post-author">' . $contentPost[$i]->author . '</div>
//                        <div class="post-statistic">
//                            <div class="post-like"><i class="fas fa-heart" style="color: #e06666; margin-right: 6px;"></i>' . $contentPost[$i]->likes . '
//                            </div>
//                            <div class="post-view"><i class="far fa-eye" style="color: #6ea3ed; margin-right: 6px;"></i>' . $contentPost[$i]->views . '
//                            </div>
//                        </div>
//                        <div class="post-content">' . $contentPost[$i]->content->content . '
//                        </div>
//                    </div>
//                    ';
//
//            if ($countDisplay == 6) break;
//        }
//    }
//
//    echo '</div>
//            </div>
//            ';
//}

//if ($listOfClass['8'] == "Lớp 8") {
//    echo '
//            <div class="news">
//                <div class="mainpage-news-title">
//                    <div class="news-title">Lớp 8</div>
//                    <div class="news-viewall">Xem tất cả<i class="fas fa-caret-right" style="margin-left: 4px;"></i></div>
//                    <div class="mainpage-tab">
//                        <div class="tab-subject">Toán học</div>
//                        <div class="tab-subject-active">Văn học</div>
//                        <div class="tab-subject">Sinh học</div>
//                        <div class="tab-subject">Địa lý</div>
//                    </div>
//                    <div class="above_"></div>
//                    <div class="_"></div>
//                </div>
//                <div class="mainpage-news-content">';
//    $countDisplay = 0;
//    for ($i = 0; $i < count($contentPost); ++$i) {
//        if ($contentPost[$i]->class == "8") {
//            $countDisplay++;
//            echo '
//                    <div class="post">
//                        <div class="post-title">' . $contentPost[$i]->title . '</div>
//                        <div class="post-author">' . $contentPost[$i]->author . '</div>
//                        <div class="post-statistic">
//                            <div class="post-like"><i class="fas fa-heart" style="color: #e06666; margin-right: 6px;"></i>' . $contentPost[$i]->likes . '
//                            </div>
//                            <div class="post-view"><i class="far fa-eye" style="color: #6ea3ed; margin-right: 6px;"></i>' . $contentPost[$i]->views . '
//                            </div>
//                        </div>
//                        <div class="post-content">' . $contentPost[$i]->content->content . '
//                        </div>
//                    </div>
//                    ';
//
//            if ($countDisplay == 6) break;
//        }
//    }
//
//    echo '</div>
//            </div>
//            ';
//}
?>
