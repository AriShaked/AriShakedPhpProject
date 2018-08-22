
<style>

    body{
        overflow: hidden;
    }
    .coursesTitle{

        width:20%;
        border: 2px solid black;
        display: inline-block;
        text-align: center;
        height: 88.5%;
        overflow: hidden;
        position:fixed;
        top: 10.5%;
        left:0.5%;
        overflow-x: hidden;

    }
    .courses{

        width:100%;
        border-top: 2px solid black;
        display: inline-block;
        text-align: center;
        padding-top:6px;
        height: 88%;
        overflow: scroll;
        position:absolute;
        top: 10.5%;
        left:0%;
        overflow-x: hidden;

    }

    button{
        width:90%;
        height:100px;
        color:black;
        padding:2px;
        margin:1px;

    }
    .addCourseButton{
        width:30px;
        height:30px;
        position:absolute;
        top: 27px;
        left:85%;
    }


    .studentsTitle{

        width:20%;
        border: 2px solid black;
        display: inline-block;
        text-align: center;
        height: 88.5%;
        overflow: hidden;
        position:fixed;
        top: 10.5%;
        left:21%;
        overflow-x: hidden;

    }
    .students{

        width:100%;
        border-top: 2px solid black;
        display: inline-block;
        text-align: center;
        padding-top:6px;
        height: 88%;

        position:absolute;
        top: 10.5%;
        left:0%;
        overflow-x: hidden;



    }
    .addstudentButton{
        width:30px;
        height:30px;
        position:absolute;
        top: 27px;
        left:85%;
    }
    button{
        width:90%;
        height:100px;
        color:black;
        padding:2px;
        margin:1px;
        display:inline;
        position:relative;

    }
    .showStudentDetails {

        position:fixed;
        top: 50px;
        left:30px;

    }

    .smallButtonStudentImg , .smallButtonCoursetImg{
        width:20%;
        height:80%;
        position:absolute;
        top:10%;
        left:0%;
        text-align:left;
        display:inline-block;
    }

    </style>

<body>
<div class= "coursesTitle">
        <h1>Courses</h1>
        <form  method='get' action='index.php'>
            <button class="addCourseButton" name='action' value='addNewCourse'>+ </button>
            <!-- <input type='hidden' name="role" value=" <?php //echo $role ?>"  /> -->

        </form>
    <div class= "courses">
    <?php
        $db = new UsersDB();
        $result = $db->coursesListQuery();
        $courses_cnt = $result->num_rows;
        foreach ($result as $row) {
    ?>
            <form method='GET' action='index.php'>
                <button>
                    <input type='hidden' name='action' value='courseInformation' >
                    <input type='hidden' name="courseInfoId" value='<?php echo $row['courseid'] ?>'>
                     <img src="<?php echo 'uploads' . '/' . 'coursesImages' . '/' . $row['courseimg']; ?>" class="smallButtonCoursetImg" height="30" width="30"/>
                    <h3><?php echo $row['name'] ?> </h3> <br/>
                </button><br/>
            </form>
    <?php
}
?>
        </div>
    </div>
  </body>
</html>