<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 16/01/2019
 * Time: 10:38
 */

require_once './../model/footer-model.php';
?>

<div class="frame-mainpage-footer">
    <div class="mainpage-footer">
        <div class="footer-logo flex-row-nowrap">
            <img src="./../images/trangchu/trangchu_logo.png" style="object-fit: contain;">
        </div>
        <div class="flex-row-nowrap footer-menu">
            <?php
            $footer_data_object = getSubject();

            if ($footer_data_object == 'error connection') {
                echo "can not connect to database";
            } else {
                if ($footer_data_object->num_rows > 0) {
                    // output data of each row
                    while ($row = $footer_data_object->fetch_assoc()) {
                        $subject = json_decode($row['content'], true)['subject'];
                        $quantity = count($subject);
                        for ($i = 0; $i < $quantity; $i++) {
                            if ($i == $quantity) echo '<div class="footer-text">' . $subject[$i] . '</div>';
                            else {
                                echo '
                                     <div class="footer-text">' . $subject[$i] . '</div>
                                     <div class="wall-footer"></div>';
                            }
                        }
                    }
                } else {
                    echo "0 results";
                }
            }

            //            $footer_data = file_get_contents('./../data/footer.json');
            //            $subject = json_decode($footer_data, true)[0]['subject'];
            //            $quantity = count($subject);
            //            for ($i = 0; $i < $quantity; $i++) {
            //                if ($i == $quantity) echo '<div class="footer-text">' . $subject[$i] . '</div>';
            //                else {
            //                    echo '
            //                         <div class="footer-text">' . $subject[$i] . '</div>
            //                         <div class="wall-footer"></div>';
            //                }
            //            }
            ?>
        </div>
        <div class="footer-copyright flex-col">Copyright &copy; 2018 Miny. Design by 123DOC</div>
    </div>
</div>
