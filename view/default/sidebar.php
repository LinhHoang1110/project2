<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 16/01/2019
 * Time: 10:26
 */

require_once './../model/navbar-model.php';
?>

<div class="sidebar" id="sidebar">
    <div style="width: 100%; height: 53px; background-color: white;">
        <div class="flex-col icon-expand-container">
            <div class="icon-close" id="icon-close">
                <div class="flex-col" style="height: 100%;">
                    <div class="flex-row-nowrap">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-col text-expand" style="color: #00a888; font-size: 15px;">
            Đóng
        </div>
        <img src="./../images/trangchu/trangchu_logo.png" alt="logo"
             style="float: right; margin-right: 15px; margin-top: 6px;">
    </div>
    <div>
        <?php
        //        =========================Read from database==========================
        $navbar_data_object = getNavbar();
        if ($navbar_data_object == 'error connection') {
            echo '<br>fail to connect database<br/>';
        } else {
            if ($navbar_data_object->num_rows > 0) {
                // output data of each row
                while ($row = $navbar_data_object->fetch_assoc()) {
                    $header_class = json_decode($row['subject']);

                    echo '
                    <div class="sidebar-class-container">
                        <div class="sidebar-class-header">
                            <div class="flex-col" style="height: 100%; position: absolute; margin-left: 20px;">
                                <i class="fas fa-atom sidebar-icon-filter" style="line-height: 25px"></i>
                            </div>
                            <div class="siderbar-class-text">Lớp ' . $row['class'] . '</div>
                            <div class="flex-col"
                                 style="height: 100%; position: absolute; right: 0; top: 0; margin-right: 25px;">
                                <i class="fas fa-plus-circle sidebar-icon-plus" id="' . $row['class'] . '"></i>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-class-subject" id="' . $row['class'] . '-sidebar-class-subject">
                    ';

                    $quantityOfSubject = count($header_class);

                    for ($j = 0; $j < $quantityOfSubject; ++$j) {
                        echo '<div class="sidebar-colsub"><i class="far fa-star" style="margin-right: 10px"></i>' . $header_class[$j] . '</div>';
                    }

                    echo '</div>';
                }
            } else {
                echo "0 results";
            }
        }

        //        ==========================Read from file=========================
        //        $header_data = file_get_contents('./../data/navbar.json');
        //        $header_class = json_decode($header_data);
        //        $quantity_class = count($header_class);
        //        for ($i = 0; $i < $quantity_class; ++$i) {
        //            echo '
        //            <div class="sidebar-class-container">
        //                <div class="sidebar-class-header">
        //                    <div class="flex-col" style="height: 100%; position: absolute; margin-left: 20px;">
        //                        <i class="fas fa-atom sidebar-icon-filter" style="line-height: 25px"></i>
        //                    </div>
        //                    <div class="siderbar-class-text">Lớp ' . $header_class[$i]->class . '</div>
        //                    <div class="flex-col"
        //                         style="height: 100%; position: absolute; right: 0; top: 0; margin-right: 25px;">
        //                        <i class="fas fa-plus-circle sidebar-icon-plus" id="' . ($i + 1) . '"></i>
        //                    </div>
        //                </div>
        //            </div>
        //            <div class="sidebar-class-subject" id="' . ($i + 1) . '-sidebar-class-subject">
        //            ';
        //
        //            $quantityOfSubject = count($header_class[$i]->subject);
        //
        //            for ($j = 0; $j < $quantityOfSubject; ++$j) {
        //                echo '<div class="sidebar-colsub"><i class="far fa-star" style="margin-right: 10px"></i>' . $header_class[$i]->subject[$j] . '</div>';
        //            }
        //
        //            echo '</div>';
        //        }
        ?>
    </div>
</div>
<div class="sidebar-blur" id="sidebar-blur"></div>