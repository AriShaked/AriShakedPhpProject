<?php
 
if (isset($_GET['newAdmin']) || isset($_GET['errorOwner'])){
    require('addNewAdminForm.php');
    

}elseif(isset($_GET['adminPersonalInfoCard'])) {

    require('adminPersonalInfo.php');

}elseif(isset($_GET['EditAdminPersonalInfoCard'])) {

    require('editAdminDetails.php');
    
}else {

    require('admins_cnt.php');
}

?>