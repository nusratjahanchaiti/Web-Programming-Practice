<?php
require_once __DIR__ . '/../config/database.php';
class CourseModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function addCourse($title, $credits) {
        $sql = "INSERT INTO courses(title, credits) VALUES('$title', $credits)";
        return $this->conn->query($sql);
    }

    public function getCourses() {
        $sql = "SELECT * FROM courses";
        return $this->conn->query($sql);
    }
}
?>