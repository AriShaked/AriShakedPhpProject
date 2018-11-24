<?php
require('db.php');

    $saveEditAdminId      = $_GET['saveAdminId'];
    $saveEditAdminName    = $_GET['saveAdminName'];
    $saveEditAdminPhone   = $_GET['saveAdminPhone'];
    $saveEditAdminEmail   = $_GET['saveAdminEmail'];
    $saveEditAdminPassword= $_GET['saveAdminPassword'];
    $saveEditAdminRole    = $_GET['saveAdminRole'];
   
    if(!empty($_GET['saveAdminImg'])){
        $saveEditAdminImg         = $_GET['saveAdminImg'];
      
        } else {
            $saveEditAdminImg = $_GET['saveSameAdminImg'];
        }
        echo  "<br/>".$saveEditAdminImg;
        
    if (isset($_GET['editAdminSaveButton'])){

        $db = new UsersDB();
        $resultEditAdminQuery = $db->updateEditAdminQuery(
        $saveEditAdminName,$saveEditAdminRole,$saveEditAdminPhone
        ,$saveEditAdminEmail, $saveEditAdminImg,$saveEditAdminId);

         header("Location: https://aris-php-project.herokuapp.com/index.php?page=administration&action=adminPersonalInfoCard&adminId=".$saveEditAdminId);
   exit();


    } else{ 

        if(isset($_GET['deleteAdmin'])) {
            $db = new UsersDB();
            $resultAdminDelete = $db->deleteAdminQuery( $saveEditAdminId);
        }
 
 header("Location: https://aris-php-project.herokuapp.com/index.php?page=administration");
   exit();

}

?>

