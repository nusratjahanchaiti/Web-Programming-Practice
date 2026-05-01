<?php
require_once __DIR__ . '/../config/database.php';
class StudentModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function addStudent($name, $email) {
        $sql = "INSERT INTO students(name, email) VALUES('$name', '$email')";
        return $this->conn->query($sql);
    }

    public function getStudents() {
        $sql = "SELECT * FROM students";
        return $this->conn->query($sql);
    }
}
?>