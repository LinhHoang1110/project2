<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 20/02/2019
 * Time: 10:19
 */

require_once './../model/model-class.php';

$type = $_GET['type'] ? $_GET['type'] : 'error';
$classModel = new ClassInfo();

if ($type == 'getAllClass') {
    $listClass = $classModel->getAllClass();

    $returnValue = [];

    while ($row = $listClass->fetch_object()) {
        $returnValue[] = $row;
    }

    echo json_encode($returnValue);
} else if ($type == 'getSubject' && isset($_GET['class'])) {
    $listSubject = $classModel->getSubjectWithClass($_GET['class']);

    $returnValue = [];

    while ($row = $listSubject->fetch_assoc()) {
        array_push($returnValue, $row);
    }

    echo json_encode($returnValue);
} else if ($type='getCategory' && isset($_GET['class'])) {
    $listCategory = $classModel->getCategory($_GET['class'], $_GET['subject']);

    $returnValue = [];

    while ($row = $listCategory->fetch_assoc()) {
        $returnValue = $row;
    }

    echo json_encode($returnValue);
} else {
    return false;
}