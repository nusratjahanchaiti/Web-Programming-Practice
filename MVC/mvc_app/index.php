<?php
require_once __DIR__ . "/config/database.php";
require_once __DIR__ . "/controller/StudentController.php";
require_once __DIR__ . "/controller/CourseController.php";

// database connection
$db = (new Database())->connect();

// controllers
$student = new StudentController($db);
$course = new CourseController($db);

// ROUTING

// Add student
if (isset($_POST['add_student'])) {
    $student->add();
    header("Location: index.php");
    exit();
}

// Add course
if (isset($_POST['add_course'])) {
    $course->add();
    header("Location: index.php");
    exit();
}

// Default page load (show lists if you want)
$students = $student->list();
$courses  = $course->list();

// include views
include __DIR__ . "/view/student/student_list.php";
include __DIR__ . "/view/course/course_list.php";
?>