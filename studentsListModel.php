
<div class= 'studentsTitle'>
    <h1>Students</h1>
    <form  method='get' action='index.php'>
        <button class='addstudentButton' name='action' value='addNewStudent'> + </button>
     
    </form>
    <div class= 'students'>
    <?php

        $db = new UsersDB();
        $result = $db->studentListQuery();
        $students_cnt = $result->num_rows;

    foreach($result as $rows){
        ?>
        <form method='get' action='index.php'>
            <button>
                <img src="<?php echo 'uploads' . '/' .'studentsImages' . '/' . $rows['img']; ?>"class='smallButtonStudentImg' height="30" width="30"/>
                
                <?php
                echo "<input type='hidden' name='action' value='studentInformation'> 
                 <input type='hidden' name='studentInfoId' value='".$rows['id']."'>
                      
                <h3>".$rows['fullname']."</h3><h5>".  $rows['phone']."</h5><br/>   
            </button><br/>
        </form>";
    }

?>
    </div>
</div>