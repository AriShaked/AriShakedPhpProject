<head>
    <style>
        .divAddStudentForm{
            text-align:right;
            width:35%;
            position:fixed;
            top:27%;
            left:50%;   
            overflow: hidden;
            height: 65%;
            
        }
        input {
            width:80%;
            border:1px solid black;
            height:6.5%;
            text-align:left;
            overflow: hidden;
         
            
        }
        .saveButton{
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
            right:5%;
            width:5%;
            height:5%;
        }
        .deleteButton{
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
            right:50%;
            width:5%;
            height:5%;
        }
        .titleEditStudentInfo{
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
        .inputAreaDiv{
            overflow: hidden;
            height:50%;
            padding-top:10%;
        }
        .addStudentForm{
            max-height:100%;
        }
        .editInfoCardStudentsImage{
            float:left;
            text-align:left;
            overflow-x: hidden;
            position:relative;
            left:26.8%;
            top:38%;
            height:10%;
             width:10%;
            
          
        }

        .checkboxDiv{   
            float:left;
            text-align:left;
            width:28%;
            overflow:scroll;
            height:250px;
            overflow: scroll;
            overflow-x: hidden;
            border:1px solid black;
            position:fixed;
            left:57%;
            top:65%;
            padding-left:3%;
            box-sizing:border-box;
            
        }

        .checkboxList{

            width:15%;
        }
       
</style>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
</head>
<body>

    <script>
    function validate(){
    return confirm('Are you sure?');
    } 
    </script>
        
<?php
    $studentId = $_GET['studentId'];
    
    $coursesResult = $db->coursesListQuery();
    $resultStudentQuery = $db->studentQuery($studentId);
    $resultStudentCoursesQuery = $db->studentCoursesQuery($studentId);
    foreach($resultStudentQuery as $row) {
    
    //$studentDetails = (explode(",",$studentDetails));
?>
    <div class="titleEditStudentInfo">Edit student personal information</div>
    <img src="<?php echo 'uploads' . '/' .'studentsImages' . '/' . $row['img']; ?> "class='editInfoCardStudentsImage' />
    <div class='divAddStudentForm'>
        <form class='editStudentInfo' method='GET' action='editOrDeleteStudent.php'>
            <div class='inputAreaDiv'>
                    name   <input type='text' name='editFullName' value='<?php echo $row['fullname']?>' ><br><br>
                    phone  <input type='text' name='editPhone'  value='<?php  echo $row['phone']?>' ><br><br>
                    email  <input type='text' name='editEmail' value='<?php echo $row['email']?>' ><br><br>
                           <input type='hidden' name='editId'    value='<?php echo $row['id']?>' >
                Edit Image <input type='file' name='editStudentImg' value='' /><br><br>
                           <input type='hidden' name='editedStudentImg' value='<?php echo $row['img']?>' /><br><br>
                           
                <button class='saveButton' name='save' value='save' type='submit'>Save</button>
                <button class='deleteButton'  name='delete' value='delete' type='submit' onclick="return checkDelete()">Delete</button>
            </div>    
            <div class='checkboxDiv'><h2>courses</h2>
    <?php
    }
                while($row = $coursesResult->fetch_assoc()) {
                    $checked= '';

                    foreach($resultStudentCoursesQuery as $studentCourses){  
                        if ( $row['name'] == $studentCourses['name']){
                            $checked= 'checked';
                         }
                    }
                    echo  "<input type='checkbox' class='checkboxList' 
                    name='courseListEdit[]' value='".$row['courseid']."'". $checked.">".$row['name']."<br>" ;
                  } 
    ?>
            </div>
        </form>
   </div>
  
  
