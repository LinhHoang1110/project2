<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 16/01/2019
 * Time: 11:29
 */

require_once './../model/post-model.php';

$idpost = $_GET['idpost'];
$post = getDetailPost($idpost);
$class = '';
$subject = '';

while ($row = $post->fetch_assoc()) {
    $class = $row['class'];
    $subject = $row['subject'];
    break;
}

$listRelevantPost = getListPostWithClassAndSubject($class, $subject);
?>

<div class="detail-advertisement">
    <div class="grade-content-flex" style="width: 100%; max-width: 1140px; margin-bottom: 25px;">
        <div class="detail-related-frame">
            <div class="detail-related">
                <div class="detail-related-title" style="padding-top: 13px;">Bạn muốn tìm thêm với</div>
                <div class="above_" style="bottom: 20px; left: 0;"></div>
                <div class="_" style="bottom: 20px;"></div>
            </div>
            <div class="detail-related-cat">
            <?php
            if ($listRelevantPost == 'error connection') echo 'can not connect to database';
            else {
                if ($listRelevantPost->num_rows > 0) {
                    $count = 0;
                    while ($row = $listRelevantPost->fetch_assoc()) {
                        $count++;

                        if ($count > 6) break;

                        echo '<div class="detail-related-link"><a class=\'a-link-detail\' href="http://localhost/project2/view/detail.php?idpost='.$row['idpost'].'">'.$row['title'].'</a></div>';
                    }
                } else {
                    echo "There is no relevant post";
                }
            }
            ?>

<!--                <div class="detail-related-link"><a class='a-link-detail' href="#">Người lái đò trên sông-->
<!--                        Lô</a></div>-->
<!--                <div class="detail-related-link"><a class='a-link-detail' href="#">Chiết lược ngà bằng vàng-->
<!--                        ngà mới nhất luôn</a></div>-->
<!--                <div class="detail-related-link"><a class='a-link-detail' href="#">Soạn bài bánh chưng bánh-->
<!--                        giày</a></div>-->
<!--                <div class="detail-related-link"><a class='a-link-detail' href="#">Người lái đò trên sông-->
<!--                        lô</a></div>-->
<!--                <div class="detail-related-link"><a class='a-link-detail' href="#">Chiết lược ngà bằng vàng-->
<!--                        ngà mới nhất luôn</a></div>-->
<!--                <div class="detail-related-link"><a class='a-link-detail' href="#">Soạn bài bánh chưng bánh-->
<!--                        giày</a></div>-->
<!--                <div class="detail-related-link"><a class='a-link-detail' href="#">Người lái đò trên sông-->
<!--                        lô</a></div>-->
            </div>
        </div>
    </div>
    <img class="detail-advertisement-img" src="./../images/lop9/lop9_advertisement.png" style="width: 300px;">
</div>