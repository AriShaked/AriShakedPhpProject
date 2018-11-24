
<?php

require_once 'db.php';
$db = new UsersDB();
session_start();

if (isset($_SESSION['loggedInUser'])) {
    $loggedInUser = $_SESSION['loggedInUser'];
    $validUserName = $loggedInUser['adminfullname'];
    $validPassword = $loggedInUser['password'];
    $role = $loggedInUser['role'];
    $adminheaderImage = $loggedInUser['adminsImg'];

} else {

    if (empty($_POST['username']) || empty($_POST['password'])) {

        header("Location: https://aris-php-project.herokuapp.com/login.php");
        die();
    }
    $user = $_POST['username'];
    $password = $_POST['password'];

    $result = $db->adminLoginQuery($user);

    foreach ($result as $row) {
        $validUserName = $row['adminfullname'];
        $validPassword = $row['password'];
        $role = $row['role'];
        $adminheaderImage = $row['adminimg'];
    }

    $verify = password_verify($password, $validPassword);

    if ($verify == false) {

        header("Location: https://aris-php-project.herokuapp.com/login.php?error=please insert correct username and password");
        die();
    }
}

require_once 'header.php';

if (isset($_GET['page'])) {
    require_once "{$_GET['page']}.php";

} else {

    require_once 'school.php';

}

$loggedInUser = array();
$loggedInUser['adminfullname'] = $validUserName;
$loggedInUser['password'] = $validPassword;
$loggedInUser['role'] = $role;
$loggedInUser['adminsImg'] = $adminheaderImage;
$_SESSION['loggedInUser'] = $loggedInUser;
?>
