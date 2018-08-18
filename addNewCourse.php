<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
      .titleAddNewCourseForm {

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
            vertical-align:top;
      }
     .addNewCourseFormDiv {

        width:70%;
        text-align:right;
        position:fixed;
        top:40%;
        right:12%;
        vertical-align:top;
      }

      input{
          width:45.5%;
          height:13.5%;
          vertical-align:center;
          border: 1px solid black;
      }
      textarea{
        vertical-align:top;  
        border: 1px solid black;
        width:45%;
        height:200px;
      }
        .addNewCourseSaveButton{
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
    </style>
</head>

<body>
<div class="titleAddNewCourseForm">Add new course</div>
    <div class="addNewCourseFormDiv">
        <form class="addNewCourseForm" method="GET" action="insertNewCourseToDB.php"><br>
             Name <input type="text" name="newCourseName" value="" required><br>
             <br/>Description <textarea name='newCourseDescription' value="" required></textarea><br>     
             <br><br>
             image  <input type="file" name="newCourseImg" value="" ><br><br>
             <button type=\"submit\" class="addNewCourseSaveButton">Save</button>
        </form>
   </div>
</body>
</html>