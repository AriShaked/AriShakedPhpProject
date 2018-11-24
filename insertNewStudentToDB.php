<?php
require_once('db.php');

$newFullName  = $_GET['newFullName'];
$newId        = $_GET['newId'];
$newPhone     = $_GET['newPhone'];
$newEmail     = $_GET['newEmail'];
$newImg       = $_GET['newImg'];
$chosenCourse = $_GET['chosenCourse'];

$db = new UsersDB();
$resAddNewStudent = $db->insertNewStudentQuery($newId, $newFullName, $newPhone, $newEmail, $newImg);

foreach ($chosenCourse as $value) {
$resAssignStudentToCourse = $db->assignStudentToCourseQuery($newId,$value);

    }

header("Location: https://aris-php-project.herokuapp.com/index.php?action=studentInformation&studentInfoId=".$newId);
exit();

?>




