
<div class= 'studentsTitle'>
    <h1>Students</h1>
    <form  method='get' action='index22.php'>
        <button class='addstudentButton' name='addNewStudent'> + </button>
    </form>
    <div class= 'students'>
    <?php

        $db = new UsersDB();
        $result = $db->studentListQuery();
        $students_cnt = $result->num_rows;

    foreach($result as $rows){
        ?>
        <form method='get' action='index22.php'>
            <button>
                <img src="<?php echo 'uploads' . '/' .'studentsImages' . '/' . $rows['img']; ?>"class='smallButtonStudentImg' height="30" width="30"/>
                <?php
                echo "<input type='hidden' name='studentInfoId' value='".$rows['id']."'>
                <input type='hidden' name='studentInfo' value='".$rows['fullname'].",".$rows['id'].",".$rows['phone'].",".$rows['email'].",".$rows['img']."' />
                <h3>".$rows['fullname']."</h3><h5>".  $rows['phone']."</h5><br/>   
            </button><br/>
        </form>";
    }

?>
    </div>
</div>