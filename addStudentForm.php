
    <style>

        .divAddStudentForm{
            
            width:45%;
            position:fixed;
            top:37%;
            left:45%;   
            overflow-x: hidden;
            height: 200px;
            
        }
        input {
            width:70%;
            border:1px solid black;
            height:18%;
            text-align:left;
            overflow: hidden;
        }
        
        
        .addNewStudentButton{
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
        .titleAddStudentForm{
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
        .addStudentForm{
            
            height:100px;
            text-align:right;
            
        }
        .checkboxDiv{
            overflow: scroll;
            
        }
        .checkbox{
           position:absolute;
            width:50%;
            height:8%;
            
        }
        .listOfCourses{
            position:fixed;
            top:65%;
            right:10%;
            text-align:left;
            width:28.5%;
            padding-top:0%;
            padding-left:3%;
            height:30%; 
            overflow:scroll; 
            overflow-x: hidden;  
            border:1px solid black;  
            margin-bottom:35%;

        }
</style>
</head>
<body>
    <div class="titleAddStudentForm">Add student</div>
<?php
    $db = new UsersDB();
    $coursesResult = $db->coursesListQuery();
?>
    <div class='divAddStudentForm'>
    <form class='addStudentForm'  method='GET' action='insertNewStudentToDB.php'>
        Id    <input type="number"  name="newId"   max='999999999'  value='' placeholder='please enter 9 digits number' required><br><br>
        Name  <input type="text"  name="newFullName"  value=''  required><br><br>
        Phone <input type="tel" name="newPhone"  pattern='[0-9\-]+'   value='' placeholder='000-0000000' required><br><br>
        Email <input type="email" name="newEmail"     value='' placeholder='example@example.com' required><br><br>
        Image <input type="file" name="newImg"       value='' required><br><br>".

        <button class='addNewStudentButton' type=\"submit\">Save</button></div>
        <div class='listOfCourses'><h1>courses</h1>
        <?php
            foreach($coursesResult as $row){
            echo
            "<div checkboxDiv><input type='checkbox' class='checkbox' 
            name='chosenCourse[]' value='".$row['courseid']."'>".$row['name'].
            "</div><br>";
            } 
        ?>            
    </form>
</body>
