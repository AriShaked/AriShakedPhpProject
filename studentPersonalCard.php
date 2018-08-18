        <style>
            .editStudentButton{
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
        .titleStudentPersonalInfo{
            
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

        .studentPersonalDetailsScreen {
            font-size:250%;
            overflow:hidden;
            overflow-x:hidden;

           
        }
        .printStudentCourseList{
            width:40%;
            font-size:150%;
            text-align:left;
            float:left;
            padding:3%;
            height:270px;
            overflow: scroll;
            margin-top:5%;
            overflow-x: hidden;

        }
        .infoCardStudentImage{
            display:inline-block;
            position:relative;
            top:5%;
            left:2%;
        }
        .StudentPersonalInformationText{
            display:inline-block;
            position:relative;
            top:5%;
            left:2%;
        }
        </style>
<?php
    //$studentDetails = $_GET['studentInfo'];
    $studentId = $_GET['studentInfoId'];
    //$explodeStudentDetails= explode("," , $studentDetails);
    $db= new UsersDB();
    $resultStudentQuery = $db->studentQuery($studentId);
    $resultStudentCoursesQuery = $db->studentCoursesQuery($studentId);      
?>
    <div class="titleStudentPersonalInfo">Student personal information</div> 
    <div class='studentPersonalDetailsScreen'>
    
<?php
    foreach($resultStudentQuery as $row) {
    ?>
    <img src="<?php echo 'uploads' . '/' .'studentsImages' . '/' . $row['img']; ?>"class='infoCardStudentImage' height="200" width="200"/>
    <?php
    echo "<div class='StudentPersonalInformationText'>".
             "<h3>".$row['fullname']."</h3>".
                    $row['phone']."<br/>".
                    $row['email']."<br/>";
    }  
       echo      "</div><br/>courses:</div>";
        
         echo "<form method='GET' action='index22.php' > 
         <button class='editStudentButton' name='editStudentButtoninfoClicked' type='submit'>edit</button>
         <input type='hidden' name='studentId' value='$studentId'>";
         echo "<div class='printStudentCourseList'>";

         while($rowIsCourse = $resultStudentCoursesQuery->fetch_assoc()) {
?>
            <img src="<?php echo 'uploads' . '/' .'coursesImages' . '/' . $rowIsCourse['courseimg']; ?> "class='infoCardStudentCoursesImage' height="30" width="30"/>
<?php
        echo $rowIsCourse['name']."<br/>".
            "<input type='hidden' name='holdsStudentcourses' value='".$rowIsCourse['name']."'>";
         }  
         echo "</div><br/></form>";
?>