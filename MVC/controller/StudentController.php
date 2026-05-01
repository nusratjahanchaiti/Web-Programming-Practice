<?php
require_once __DIR__ . '/../model/CourseModel.php';

class StudentController {
    private $model;

    public function __construct($db) {
        $this->model = new StudentModel($db);
    }

    public function add() {
        $this->model->addStudent($_POST['name'], $_POST['email']);
    }

    public function list() {
        return $this->model->getStudents();
    }
}
?>