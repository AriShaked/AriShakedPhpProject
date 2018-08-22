

<!DOCTYPE html>
<html lang="en">
    <style>
        body{

        }
        .mainContainer{

            width:57.5%;
            border: 2px solid black;
            display: inline-block;
            text-align: center;
            padding-top:6px;
            height: 88%;
            overflow:hidden;

            position:fixed;
            top: 10.5%;
            left:41.5%;
            overflow-x: hidden;


        }
        .studentPersonalDetailsScreen{

            text-align:left;
            padding-left:20px;
            overflow-x: hidden;
        }
        span{
            font-size: 900%;
        }
        </style>
<body>
    <div class= "mainContainer">
<?php
if (isset($_GET['action'])) {
    $schoolAction = $_GET['action'];

    if ($schoolAction == 'addNewStudent') {

        include 'addStudentForm.php';

    } elseif ($schoolAction == 'addNewCourse') {

        if ($role == 'sales') {
            echo "sorry, " . $role . " is not authorized ";
            echo "<br/><br/><br/><br/><h1>courses count: " . $courses_cnt . "</h1><br/><br/>";
            echo "<h1>students count: " . $students_cnt . "</h1><br/><br/>";

        } else {

            include 'addNewCourse.php';

        }

    } else if ($schoolAction == 'studentInformation') {//

        include 'studentPersonalCard.php';

    } elseif ($schoolAction == 'courseInformation') {//

        include 'courseInfoCard.php';


    } elseif ($schoolAction == 'editCourseInformation') {//

        include 'editCourseDetails.php';

    } elseif ($schoolAction == 'editStudentDetails') {//

        include 'editStudentDetails.php';
    }
    } else {
        echo "<br/><br/><br/><h1>courses count:</h1><span> " . $courses_cnt . "</span><br/><br/>";
        echo "<h1>students count:</h1><span>" . $students_cnt . "</span><br/><br/>";
    }

?>
</div>
</body>
</html>