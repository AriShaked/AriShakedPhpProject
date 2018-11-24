<?php
require_once 'db.php';

$newCourseName = $_GET['newCourseName'];
$newDescription = $_GET['newCourseDescription'];
$newImg = $_GET['newCourseImg'];

$db = new UsersDB();
$resultNewCourse = $db->insertNewCourseQuery($newCourseName, $newDescription, $newImg);

header("Location: https://aris-php-project.herokuapp.com/index.php?action=courseInformation&newCourseName=" . $newCourseName);
exit();
