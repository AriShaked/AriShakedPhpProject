<?php
require_once('db.php');

    $saveCourseId              = $_GET['CourseId'];
    $saveEditCourseName        = $_GET['editCourseName'];
    $saveEditCourseDescription = $_GET['editCourseDescription'];
    
    if(!empty($_GET['editCourseImg'])){
    $saveEditCourseImg         = $_GET['editCourseImg'];
    } else {
        $saveEditCourseImg = $_GET['editedCourseImg'];
    }
   
    if (isset($_GET['editCourseSaveButton'])){
        $db = new UsersDB();
        $resultEditCourseQuery = $db->updateEditCourseQuery($saveEditCourseName ,$saveEditCourseDescription, $saveEditCourseImg, $saveCourseId );
    
        header("Location: http://localhost/arisphp/tests-phpProjectAriShaked_Copy/mvc-courselist/index.php?courseInfoId=".$saveCourseId);
        exit();  
    
    }else{ 

        if(isset($_GET['editCourseDeleteButton'])) {
            $db = new UsersDB();
            $resultCourseDelete = $db->deleteCourseQuery( $saveCourseId);
        }
    
    header("Location: http://localhost/arisphp/tests-phpProjectAriShaked_Copy/mvc-courselist/index.php");
    exit();
}
?>