<?php
require_once 'db.php';

$newCourseName = $_GET['newCourseName'];
$newDescription = $_GET['newCourseDescription'];
$newImg = $_GET['newCourseImg'];

$db = new UsersDB();
$resultNewCourse = $db->insertNewCourseQuery($newCourseName, $newDescription, $newImg);

header("Location: http://localhost/arisphp/tests-phpProjectAriShaked_Copy/mvc-courselist/index.php?action=courseInformation&newCourseName=" . $newCourseName);
exit();
