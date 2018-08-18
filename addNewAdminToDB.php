<?php
require_once('db.php');

$newAdminId         =      $_GET['newAdminId'];
$newAdminName       =      $_GET['newAdminName'];
$newAdminPhone      =      $_GET['newAdminPhone'];
$newAdminEmail      =      $_GET['newAdminEmail'];
$newAdminPassword   =      $_GET['newAdminPassword'];
$newAdminImg        =      $_GET['fileToUpload'];
$newAdminRole       =      $_GET['newAdminRole'];

echo $newAdminId      ;
echo $newAdminName    ;
echo $newAdminPhone   ;
echo $newAdminEmail   ;
echo $newAdminPassword;
echo $newAdminImg     ;
echo $newAdminRole    ;

    if($newAdminRole == 'owner'){
           
        $db = new UsersDB();
        $resultCheckForOwnerUser= $db->checkForOwnerUser();

        if ($resultCheckForOwnerUser !== ""){
            header("Location: http://localhost/arisphp/tests-phpProjectAriShaked_Copy/mvc-courselist/index22.php?errorOwner=owner%20already%20exsist");
            exit();
        }
    }
$hashed_password = password_hash($newAdminPassword, PASSWORD_DEFAULT);
$db = new UsersDB();
$resultInsertNewAdminQuery= $db->insertNewAdminQuery($newAdminId
,$newAdminName,$newAdminRole,$newAdminPhone,$newAdminEmail,$hashed_password,$newAdminImg);

header("Location: http://localhost/arisphp/tests-phpProjectAriShaked_Copy/mvc-courselist/index22.php?administration&adminPersonalInfoCard&adminId=".$newAdminId);
exit();

?>