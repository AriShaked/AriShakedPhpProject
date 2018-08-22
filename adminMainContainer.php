<?php
if (isset($_GET['action'])) {
    $action = $_GET['action'];

    if ($action == 'addNewAdminForm' || isset($_GET['errorOwner'])) {
        require 'addNewAdminForm.php';

    } elseif ($action == 'adminPersonalInfoCard') {

        require 'adminPersonalInfo.php';

    } elseif ($action == 'EditAdminPersonalInfoCard') {

        require 'editAdminDetails.php';

    } else {

        require 'admins_cnt.php';
    }

} else {

    require 'admins_cnt.php';
}

?>