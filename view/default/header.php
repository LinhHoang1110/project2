<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 16/01/2019
 * Time: 10:27
 */
require_once './../model/navbar-model.php';
?>

<div class="menuheader" id="menuheader">
    <div class="mainpage-header">
        <a class="header-logo flex-col" href="./mainpage.php">
            <img src="./../images/trangchu/trangchu_logo.png">
        </a>
        <div class="flex-col icon-expand-container">
            <div class="icon-expand" id="icon-expand">
                <div class="flex-col" style="height: 100%;">
                    <div class="flex-row-nowrap">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-col icon-expand-container">
            <div class="icon-expand" id="icon-expand-web">
                <div class="flex-col" style="height: 100%;">
                    <div class="flex-row-nowrap">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-col text-expand">
            Danh mục
        </div>
        <div class="flex-col header-input-position">
            <input class="header-input" id="header-input" type="text" placeholder="Tìm kiếm câu hỏi">
        </div>
    </div>
    <div class="mainpage-menuheader">
        <div class="menu-header flex-row-nowrap" style="z-index: 502;">
            <?php
            //            =======================Read from database==========================
            $navbar_data_object = getNavbar();
            if ($navbar_data_object == 'error connection') {
                echo '<br>fail to connect database<br/>';
            } else {
                if ($navbar_data_object->num_rows > 0) {
                    // output data of each row
                    while ($row = $navbar_data_object->fetch_assoc()) {
                        $header_class = json_decode($row['subject']);

                        echo '
                                <div class="colmenu">
                                    <div class="class">Lớp ' . $row['class'] . '</div>
                                    <div class="the' . generateClassName($row['class']) . ' boardsubject">
                                        <div class="subjectall">
                                            ' . generateColumnOfSubject($header_class) . '
                                            <div class="number" style="position: absolute;">
                                                <div class="number12-container">
                                                    <div class="number-border"></div>
                                                    <div class="number' . $row['class'] . '-text">' . $row['class'] . '</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        ';

                    }
                } else {
                    echo "0 results";
                }
            }

            //            =========================Read from file=========================
            //            $header_data = file_get_contents('./../data/navbar.json');
            //            $header_class = json_decode($header_data);
            //            $quantity_class = count($header_class);
            //            for ($i = $quantity_class - 1; $i >= 0; --$i) {
            //                echo '
            //                    <div class="colmenu">
            //                        <div class="class">Lớp ' . ($i + 1) . '</div>
            //                        <div class="the' . generateClassName($i + 1) . ' boardsubject">
            //                            <div class="subjectall">
            //                                '.generateColumnOfSubject($header_class[$i]->subject).'
            //                                <div class="number" style="position: absolute;">
            //                                    <div class="number12-container">
            //                                        <div class="number-border"></div>
            //                                        <div class="number'.($i+1).'-text">'.($i+1).'</div>
            //                                    </div>
            //                                </div>
            //                            </div>
            //                        </div>
            //                    </div>
            //                    ';
            //            }

            /**
             * generate name of class with specified number
             * @param $class
             * @return string
             */
            function generateClassName($class)
            {
                if ($class == 1) return '1st';
                else if ($class == 2) return '2nd';
                else if ($class == 3) return '3rd';
                else return $class . 'th';
            }

            /**
             * Generate two columns subject on board subject
             * if the number of subject is less than 5, then there is only one column
             * if the number of subject is more than 4, then there are two column, and the left column is more 3 or 4 subject
             * @param $listOfSubject
             * @return string
             */
            function generateColumnOfSubject($listOfSubject)
            {
                $returnValue = '';
                $numberOfSubject = count($listOfSubject);
                // If the number of subject is less than 5
                if ($numberOfSubject == 1 || $numberOfSubject == 2 || $numberOfSubject == 3 || $numberOfSubject == 4) {
                    $returnValue .= '<div class="subjectcol">';
                    for ($j = 0; $j < $numberOfSubject; ++$j) {
                        $returnValue .= '<div class="subject">' . $listOfSubject[$j] . '</div>';
                    }
                    $returnValue .= '</div>';
                } else { // if the number of subject is more than 4
                    $right = ($numberOfSubject - 3) / 2;
                    $left = $numberOfSubject - $right;
                    $returnValue .= '<div class="subjectcol">';
                    for ($j = 0; $j < $left; ++$j) {
                        $returnValue .= '<div class="subject">' . $listOfSubject[$j] . '</div>';
                    }
                    $returnValue .= '</div>';
                    $returnValue .= '<div class="subjectcol">';
                    for ($j = $left; $j < $numberOfSubject; ++$j) {
                        $returnValue .= '<div class="subject">' . $listOfSubject[$j] . '</div>';
                    }
                    $returnValue .= '</div>';
                }

                return $returnValue;
            }

            ?>
        </div>
        <!-- <div class="background-blur-top"></div> -->
        <!-- <div class="background-blur"></div> -->
    </div>
</div>
