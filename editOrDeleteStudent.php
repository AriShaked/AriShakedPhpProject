<?php
require_once('db.php');

if (isset($_GET['save'])){

    $editFullName = $_GET['editFullName'];
    $editId = $_GET['editId'];
    $editPhone = $_GET['editPhone'];
    $editEmail = $_GET['editEmail'];

    if(!empty($_GET['editStudentImg'])){
      $editImg = $_GET['editStudentImg'];
        } else {
            $editImg = $_GET['editedStudentImg'];
        }
      $assignedCoursesChanges = $_GET['courseListEdit'];

      echo $editFullName;
      echo $editId;
      echo $editPhone;
      echo $editEmail;
      echo $editImg;
      print_r($assignedCoursesChanges);

      $db = new UsersDB();
      $resultEditStudentQuery = $db->updateEditStudentQuery($editFullName, $editPhone, $editEmail, $editImg, $editId);
      $resultDeleteFromCourse = $db->deleteStudentFromCourseQuery($editId);
      $resultAssignedCoursesChangesQuery = $db->assignedCoursesChangesQuery($assignedCoursesChanges, $editId);

} else {
  
    $editId = $_GET['editId'];
    $db = new UsersDB();
    $resultDeleteFromCourse = $db->deleteStudentFromCourseQuery($editId);
    $resultStudentDelete = $db->deleteStudentQuery( $editId);
 
}
 header("Location: http://localhost/arisphp/tests-phpProjectAriShaked_Copy/mvc-courselist/index22.php?studentInfoId=".$editId);
   exit();

?>




