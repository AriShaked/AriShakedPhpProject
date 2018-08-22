<?php
require_once 'db.php';

$newAdminId = $_GET['newAdminId'];
$newAdminName = $_GET['newAdminName'];
$newAdminPhone = $_GET['newAdminPhone'];
$newAdminEmail = $_GET['newAdminEmail'];
$newAdminPassword = $_GET['newAdminPassword'];
$newAdminImg = $_GET['fileToUpload'];
$newAdminRole = $_GET['newAdminRole'];


if ($newAdminRole == 'owner') {

    $db = new UsersDB();
    $resultCheckForOwnerUser = $db->checkForOwnerUser();

    if ($resultCheckForOwnerUser !== "") {
        header("Location: http://localhost/arisphp/tests-phpProjectAriShaked_Copy/mvc-courselist/index.php?page=administration&action=addNewAdminForm&errorOwner=owner%20already%20exist");
        exit();
    }
}
$hashed_password = password_hash($newAdminPassword, PASSWORD_DEFAULT);
$db = new UsersDB();
$resultInsertNewAdminQuery = $db->insertNewAdminQuery($newAdminId
    , $newAdminName, $newAdminRole, $newAdminPhone, $newAdminEmail, $hashed_password, $newAdminImg);

header("Location: http://localhost/arisphp/tests-phpProjectAriShaked_Copy/mvc-courselist/index.php?page=administration&action=adminPersonalInfoCard&adminId=" . $newAdminId);
exit();
