

<style>
        .titleAddNewAdminForm{
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
        .AddNewAdminDiv{
            position:relative;
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

        .selectRole {
          position: absolute;
          right:53.7%;
        }

        .addNewAdminSaveButton{
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
        .uploadFile {

            color: #fff;
            background-color: #4CAF50;
            border-radius: 10px;
            box-shadow: 0 3px #999;
            width:50%;
            text-align:center;
            
        }

</style>

<div class='titleAddNewAdminForm' ><h1>Add new Administrator form </h1>
<?php
    if (isset($_GET['errorOwner'])) {
            ?>
                <h1 style="color:red"><?= $_GET['errorOwner'] ?></h1>
            <?php
        }
        ?>
    <div class='AddNewAdminDiv' >
        <form  name='AddNewAdminForm' method='GET' action='addNewAdminToDB.php'>
            <button class='addNewAdminSaveButton' >Save</button>
            Id <input type='number'      name='newAdminId' max='999999999'  value='' placeholder='please enter 9 digits number' required/><br/><br/>
            Name <input type='text'    name='newAdminName' required/><br/><br/>
            Phone <input type='tel'   name='newAdminPhone'  pattern='[0-9\-]+' placeholder='000-0000000' required/><br/><br/>
            Email <input type='email'   name='newAdminEmail' placeholder='example@example.com' required/><br/><br/>
            Password <input type='text'name='newAdminPassword' required/><br/><br/>
            
                <div class='selectRole'>
                Role <select name="newAdminRole" required>
                        <option value="" disabled selected>None</option>    
                        <option value="sales">Sales</option>
                        <option value="manager">Manager</option>
                            <?php if ($role == 'owner'){
                                echo "<option value='owner'>Owner</option>";
                                    }
                                ?>
                    </select><br/>
                </div><br/>
                <br><div class='imgUpload'><?php  require("upload.php"); ?></div><br/><br/>
         </form>
         
     </div>
</div>







