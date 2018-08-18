<head>
    <style>
      .titleEditCourseForm {

          text-align:left;
            text-justify:center;
            float: left;
            font-size: 2em;
            border-bottom:2px solid black;
            width:100%;
            height:75px;
            font-weight: bold;
            padding-left:20px;
            padding-top:15px;
            box-sizing: border-box;
      }
     .addNewCourseFormDiv {

        width:70%;
        text-align:right;
        position:fixed;
        top:40%;
        right:12%;
        
      }

      input{
          width:45.5%;
          height:13.5%;
          border: 1px solid black;
          vertical-align:top;
      }
   
        .editCourseSaveButton{
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
            width:90px;
            height:45px; 

      }
       .editCourseDeleteButton{
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
            width:90px;
            height:45px; 
      }
      input.CourseDescriptionBox  {
            width:45.5%;
            padding-bottom:128px;
            height:150px;
            border: 2px solid black;
            display:inline-block;
            box-sizing:border-box;
            overflow:none;
            word-wrap: break-word;
            white-space: initial;
      }
      textarea{
        vertical-align:top;  
        border: 1px solid black;
        width:45%;
        height:200px;
      }
      
    </style>
    <script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
    </head>
<?php
    $courseId = $_GET['courseInformationId'];
    $db = new UsersDB();
    $courseInformation=$db->courseQuery($courseId);
    foreach($courseInformation as $row) {
?>
<div class="titleEditCourseForm">Edit course information</div>
    <div class="addNewCourseFormDiv">
        <form class="addNewCourseForm" method="GET" action="updateEditCourseToDB.php"><br>
             Name <input type="text" name="editCourseName" value="<?php echo $row['name'] ?>"/><br/><br/>
             Id <input type="text" class="CourseId" name="CourseId" value=" <?php echo $courseId ?>"/><br/><br/>
             Description 
              <textarea class='CourseDescriptionBox' name='editCourseDescription'> <?php echo $row['description'] ?>  </textarea><br/><br/>
             Edit Image <input type="file" name="editCourseImg" value="" /><br><br>
                        <input type="hidden" name="editedCourseImg" value="<?php echo $row['courseimg'] ?>" />
             
             <img src="<?php echo 'uploads' . '/' .'coursesImages' . '/' . $row['courseimg']; ?> "class='infoCardCourseStudentsImage' height="100" width="100"/>
<?php
    }
?>
            <button class='editCourseSaveButton' name='editCourseSaveButton'  type="submit">Save</button>
            <button class='editCourseDeleteButton' name='editCourseDeleteButton'  type="submit" onclick="return checkDelete()">delete</button>
        </form>
   </div>
</body> 
</html>






















