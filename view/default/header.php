<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 16/01/2019
 * Time: 10:27
 */
?>

<div class="menuheader" id="menuheader">
    <div class="mainpage-header">
        <a class="header-logo flex-col" href="#">
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
            $header_data = file_get_contents('./../data/navbar.json');
            $header_class = json_decode($header_data);
            $quantity_class = count($header_class);
            for ($i = $quantity_class - 1; $i >= 0; --$i) {
                echo '
                    <div class="colmenu">
                        <div class="class">Lớp ' . ($i + 1) . '</div>
                        <div class="the' . generateClassName($i + 1) . ' boardsubject">
                            <div class="subjectall">
                                '.generateColumnOfSubject($header_class[$i]->subject).'
                                <div class="number" style="position: absolute;">
                                    <div class="number12-container">
                                        <div class="number-border"></div>
                                        <div class="number'.($i+1).'-text">'.($i+1).'</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ';
            }

            function generateClassName($class)
            {
                if ($class == 1) return '1st';
                else if ($class == 2) return '2nd';
                else if ($class == 3) return '3rd';
                else return $class . 'th';
            }

            function generateColumnOfSubject($listOfSubject){
                $returnValue = '';
                $numberOfSubject = count($listOfSubject);
                if ($numberOfSubject == 1 || $numberOfSubject == 2 || $numberOfSubject == 3) {
                    $returnValue .= '<div class="subjectcol">';
                    for ($j = 0; $j < $numberOfSubject; ++$j) {
                        $returnValue .= '<div class="subject">'.$listOfSubject[$j].'</div>';
                    }
                    $returnValue .= '</div>';
                } else {
                    $right = ($numberOfSubject - 3)/2;
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
