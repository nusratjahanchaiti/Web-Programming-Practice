<?php
require_once __DIR__ . '/../model/CourseModel.php';

class CourseController {
    private $model;

    public function __construct($db) {
        $this->model = new CourseModel($db);
    }

    public function add() {
        if (isset($_POST['title']) && isset($_POST['credits'])) {
            $this->model->addCourse($_POST['title'], $_POST['credits']);
        }
    }

    public function list() {
        return $this->model->getCourses();
    }
}
?>