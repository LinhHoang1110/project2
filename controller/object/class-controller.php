<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 20/02/2019
 * Time: 10:14
 */

require_once './../../model/model-class.php';

class ControllerClass
{
    private $classModel;

    public function __construct(){
        $this->classModel = new ClassInfo();
    }

    /**
     * Get all classes are existing in database
     * @return bool|mysqli_result
     */
    public function getAllClass(){
        return $this->classModel->getAllClass();
    }

    /**
     * Get all the subjects in specified class
     * @param $class
     * @return bool|mysqli_result
     */
    public function getSubjectWithClass($class){
        return $this->classModel->getSubjectWithClass($class);
    }

    /**
     * Get category of class.
     * @param $class
     * @param $subject
     * @return bool|mysqli_result
     */
    public function getCategory($class, $subject) {
        return $this->classModel->getCategory($class, $subject);
    }
}
