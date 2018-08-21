<style>

    .titleAdminsList{
            width:20%;
            border: 2px solid black;
            display: inline-block;
            text-align: left;
            height: 88.5%;
            overflow: hidden;
            position:fixed;
            top: 10.5%;
            left:0.5%;
            overflow-x: hidden;
            padding-left:1%;


    }

    .addNewAdminButton{
            width:30px;
            height:30px;
            position:absolute;
            top: 27px;
            left:80%;

    }

    .adminsList {

        width:100%;
        border-top: 2px solid black;
        display: inline-block;
        text-align: center;
        padding-top:6px;
        height: 88%;
        position:absolute;
        top: 80px;
        left:0%;
        overflow-x: hidden;
        overflow: scroll;

    }

    .admin{

         width:90%;
        height:100px;
        color:black;
        padding:2px;
        margin:1px;
        display:inline;
        position:relative;
    }
    .smallButtonImg{
        width:20%;
        height:80%;
        position:absolute;
        top:10%;
        left:0%;
        text-align:left;
        display:inline-block;
    }

</style>

<div class="titleAdminsList" > <h1>Administrators</h1>
    <form  method='GET' action='index.php'>
        <button class="addNewAdminButton" name='addNewAdmin' >+ </button>
        <input type='hidden' name="newAdmin" value='addNewAdminForm'  />
        <input type='hidden' name="administration" value='addNewAdminForm'  />
        <input type='hidden' name="page" value='administration'>
    </form>
    <div class="adminsList">
    <?php


$resultAdminsListQuery = $db->adminsListQuery();
$admins_cnt = $resultAdminsListQuery->num_rows;

foreach ($resultAdminsListQuery as $rowIsAdmin) {
    ?>
            <form method='GET' action='index.php'>
            <input type='hidden' name='administration' value='addNewAdminForm'  />
            <input type='hidden' name="adminPersonalInfoCard" value='adminPersonalInfoCard'  />
            <input type='hidden' name="adminId"       value='<?php echo $rowIsAdmin['adminid'] ?>'>
            <input type='hidden' name="page" value='administration'>
    <?php
if ($role == 'owner') {

        echo "<button class='admin' >";
        ?>
        <img src="<?php echo 'uploads' . '/' . 'adminsImages' . '/' . $rowIsAdmin['adminimg']; ?>" class="smallButtonImg" height="30" width="30"/>
        <?php
echo "<h3>" . $rowIsAdmin['adminfullname'] . ", " . $rowIsAdmin['role'] .
            "</h3><h5>" . $rowIsAdmin['phone'] . "<br/>" . $rowIsAdmin['email'] .
            "</h5></button><br>";

    } else {

        if ($rowIsAdmin['role'] == 'owner') {
            //don't print
        } else {

            echo "<button class='admin' >";
            ?>
            <img src="<?php echo 'uploads' . '/' . 'adminsImages' . '/' . $rowIsAdmin['adminimg']; ?>"class='smallButtonImg' height="30" width="30"/>
            <?php
echo "<h3>" . $rowIsAdmin['adminfullname'] . ", " . $rowIsAdmin['role'] .
                "</h3><h5>" . $rowIsAdmin['phone'] . "<br/>" . $rowIsAdmin['email'] .
                "</h5></button><br>";
        }
    }
    echo " </form>";
}
?>
    </div>
</div>