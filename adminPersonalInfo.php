
<style>

    .titleadminPersonalInfo{

        width:77.5%;
              border: 2px solid black;
              display: inline-block;
              text-align: left;
              height: 88.5%;
              overflow: hidden;
              position:fixed;
              top: 10.5%;
              left:22%;
              overflow-x: hidden;


            }

.adminPersonalInfoDiv{
              width:100%;
              border-top: 2px solid black;
              display: inline-block;
              text-align:left;
              padding-top:5%;
              padding-left:5%;
              height: 88%;
              overflow: hidden;
              position:absolute;
              top: 80px;
              font-size:200%;
              overflow-x: hidden;

}
.editAdminButton{
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
        .nameAndRole{
            font-size:200%
        }
        img{

            display:inline-block;

        }

</style>
<?php
$infoAdminId = $_GET['adminId'];
$resultAdminsQuery = $db->adminQuery($infoAdminId);
while ($row = $resultAdminsQuery->fetch_assoc()) {
    ?>
<div class="titleadminPersonalInfo"><h1>Administrator personal information</h1>
<div class='adminPersonalInfoDiv'>
    <form method='GET' action='index.php'>

        <input type='hidden' name="page" value='administration'>
        <input type='hidden' name="action" value='EditAdminPersonalInfoCard'  />



            <br><div class='nameAndRole'><?php echo $row['adminfullname'] ?>, <?php echo $row['role'] ?></div>
            <br>Id: <?php echo $infoAdminId ?>
            <br>Phone: <?php echo $row['phone'] ?>
            <br>Email: <?php echo $row['email'] ?> <br/>

            <img src="<?php echo 'uploads' . '/' . 'adminsImages' . '/' . $row['adminimg']; ?>" height="200" width="200"/>
<?php
}
?>
            <button class='editAdminButton'  type="submit">Edit</button>
            <input type='hidden' name="adminId"       value='<?php echo $infoAdminId ?>' readonly="readonly">

    </form>
</div>
</div>











