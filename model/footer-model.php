<?php
require_once './../model/connectDB.php';

function getSubject()
{

    $getSubjectSql = 'SELECT * FROM vnpTraining.footer';

    $conn = getConn();
    if($conn == 'error') return 'error connection';
    return mysqli_query($conn, $getSubjectSql);
//    return 0;
}