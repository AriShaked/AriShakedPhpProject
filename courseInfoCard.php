<style>
        .titlecourseInfoCard{
                
            text-align:left;
            text-justify:center;
            float: left;
            font-size: 2em;
            border-bottom:2px solid black;
            width:100%;
            height:10%;
            font-weight: bold;
            padding-left:20px;
            padding-top:15px;
            box-sizing: border-box;
            
        }
        .courseInfoCard {

            text-align:left;
            padding:4%;
            
            
        }
        .divcourseInfoId{

             text-align:left;
            padding-left:2%;
            font-size:300%;
        }
        .divcourseInfoName{
            text-align:left;
            padding-left:2%;
            font-size:300%;
            padding:4%;
        }
      
        .courseStudentsDiv{
            display:inline-block;
            text-align:left;
            padding-left:2%;
            font-size:200%;
        }

        .editCourseButton{

             display: inline-block;
            font-size: 24px;
            cursor: pointer;
            text-align:center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 10px;
            box-shadow: 0 9px #999;
            position:fixed;
            top:23%;
            right:100px;
            width:90px;
            height:45px;
        }
        .courseInfoPage{
           

        }
        .courseInfoPageForm{
           
          

        }

        .courseInformationImg{

            display:inline-block;
            position:relative;
            float:left;
            width:250px;
            height:250px;
            top:50px;
            margin-left:0;
            margin-right:0;
            padding-left:0;
            padding-right:0;   
            
        }

         
        .divCourseInfoName{
            width:60%;
            height:250px;
            display:inline-block;
            position:relative;
            top:5%;
            margin-left:0;
            margin-right:0;
            padding-left:0;
            padding-right:0;
            top:80px;
            font-size:44px;
            text-align:left;
            overflow: hidden;
        }
        .divCourseInfoDescription{
            font-size:20px;
        }
        .printCourseStudentsList{
            width:40%;
            font-size:70%;
            text-align:left;
            float:left;
            padding:3%;
            height:150px;
            overflow: scroll;
            margin-top:10%;
            overflow-x: hidden;
           
        }
</style>
<?php
        
      if(isset($_GET['newCourseName'])){
        $courseName= $_GET['newCourseName']; 
       
        $courseInformation=$db->courseQueryByName($courseName);
        $resultCourseStudentsQuery = $db->courseStudentsQueryByName($courseName);
        $students_cnt = $resultCourseStudentsQuery->num_rows;
      }else{
        $courseId=  $_GET['courseInfoId']; 
        
        $courseInformation=$db->courseQuery($courseId );
        $resultCourseStudentsQuery = $db->courseStudentsQuery($courseId);
        $students_cnt = $resultCourseStudentsQuery->num_rows;
        }
       

        echo "<div class='titlecourseInfoCard'>Course information</div>";
        echo "<div class='courseInfoPage'>
        <form class='courseInfoPageForm' method='GET' action='index.php' >";
        foreach($courseInformation as $row) {
?>
        <div class='courseInformationImg' >
        <img src="<?php echo 'uploads' . '/' .'coursesImages' . '/' . $row['courseimg']; ?>"class='courseImage' height="200" width="200"/>
        
        </div>
<?php

        if ($role == 'manager' || $role == 'owner' ){
        
            echo "<button class='editCourseButton' name='editCourseButtoninfoClicked' type='submit'>edit</button>";
        }
         echo  "<input type='hidden' name='courseInformationId' value='".$row['courseid']."' >";
     

        echo "<div class='divCourseInfoName'> ".$row['name']." Course, $students_cnt students";
        echo "<div class='divCourseInfoDescription'>". $row['description']."</div></div>";

    }
        echo "<div class='printCourseStudentsList'>";

        while($rowIsStudent = $resultCourseStudentsQuery->fetch_assoc()){
?>
    <img src="<?php echo 'uploads' . '/' .'studentsImages' . '/' . $rowIsStudent['img']; ?> "class='infoCardCourseStudentsImage' height="30" width="30"/>
<?php
    echo "<div class='courseStudentsDiv'>".$rowIsStudent['fullname']."</div><br/>";
    }
    echo "</div></form></div>";
?>