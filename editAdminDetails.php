<head>
<style>
.TitleEditAdminFormDiv{
    width:76.5%;
              border: 2px solid black;
              display: inline-block;
              text-align: left;
              height: 88.5%;
              overflow: hidden;
              position:fixed;
              top: 10.5%;
              left:22%;
              overflow-x: hidden;
              padding-left:1%;


}
.editAdminFormDiv {
                width:100%;
              border-top: 2px solid black;
              display: inline-block;
              align:center;
              text-align:right;
              padding-top:6px;
              height: 88%;
              overflow: hidden;
              position:absolute;
              top: 80px;
              right:0%;
              overflow-x: hidden;
              padding-right:23%;
              padding-top:10%;
}

input {
            width:50%;
            border:1px solid black;
            height:6.5%;
            text-align:left;
            
        }
        .editAdminSaveButton{
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
        .deleteAdminButton{
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
            left:28%;
            width:90px;
            height:45px;
        }
</style>
</style>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
</head>
<?php

$editAdminId = $_GET['adminId'];
$db = new UsersDB();
$resultAdminsQuery = $db->adminQuery($editAdminId);
while($row=$resultAdminsQuery->fetch_assoc()){
?> 
 <div class='TitleEditAdminFormDiv'><h1>Edit Administrator Details</h1>
    <div class='editAdminFormDiv'>
    
    <img src="<?php echo 'uploads' . '/' .'adminsImages' . '/' . $row['adminimg']; ?> "class='infoCardAdminsImage' />
                 
    <form method='GET' action='updateEditAdminToDB.php'>

    <input type='hidden' name="saveEditAdminInfo" value='saveEditAdminInfo'  /> 
    <input type='hidden' name="administration" value='administration'  /> 
    <input type='hidden' name="page" value='administration'>
            
          Id     <input type='text'      name="saveAdminId"       value='<?php echo   $editAdminId        ?>' ><br><br>
          Name  <input type='text'       name="saveAdminName"     value='<?php echo  $row['adminfullname'] ?>'><br><br>
          Phone  <input type='text'      name="saveAdminPhone"    value='<?php echo   $row['phone']     ?>'><br><br>
          Email  <input type='text'      name="saveAdminEmail"    value='<?php echo   $row['email']     ?>'><br><br>
          Password  <input type='password'   name="saveAdminPassword" value='<?php echo   $row['password']   ?>'><br><br>
        
          Edit Image <input type="file" name="saveAdminImg" value="" /><br><br>
                        <input type="hidden" name="saveSameAdminImg" value="<?php echo $row['adminimg'] ?>" />
             
          <?php

    if( $role == 'manager' && $validUserName == $row['adminfullname'] ){
        echo 
        "<input type='hidden'  name='saveAdminRole'   value='". $row['role'] ."'>";
        
           }else { ?>
          Role  <input type='text'  name="saveAdminRole"   value='<?php echo   $row['role']  ?>'><br><br>
          <button class='deleteAdminButton' name='deleteAdmin' value='deleteAdmin' type="submit" onclick="return checkDelete()">delete</button>
        <?php }}  ?>

            <button class='editAdminSaveButton' name='editAdminSaveButton' value='saveAdminInfoChanges' type="submit">Save</button>
            
    </form>
    </div>
    </div>


