
<?php 

    require('db.php');
    session_start();
    
    if(isset($_SESSION['loggedInUser'])) {
      $loggedInUser = $_SESSION['loggedInUser'];
      $validUserName = $loggedInUser['adminfullname'];
      $validPassword = $loggedInUser['password'];
      $role = $loggedInUser['role'];
      $adminheaderImage= $loggedInUser['adminsImg'];
    
    }else{
    
        if(empty($_POST['username']) ||  empty($_POST['password']))  {
        
          header("Location: http://localhost/arisphp/tests-phpProjectAriShaked_Copy/mvc-courselist/login22.php?error=please insert correct username and password(3)");
          die();
        }
            $user = $_POST['username'];
            $password = $_POST['password'];
            $db = new UsersDB();
            $result = $db->adminLoginQuery($user);
            
             foreach($result as $row){
                 $validUserName = $row['adminfullname'];
                 $validPassword = $row['password'];
                 $role = $row['role']; 
                 $adminheaderImage = $row['adminimg'];
             }
              
             $verify = password_verify($password, $validPassword);

             if($verify == FALSE) {
                // if ( $validPassword !== $password  ){
                header("Location: http://localhost/arisphp/tests-phpProjectAriShaked_Copy/mvc-courselist/login22.php?error=please insert correct username and password(2)");
                die();
              }
        }  

        require_once('header.php'); 
              
        if (isset($_GET['administration']) || isset($_GET['errorOwner']) ){

          require_once('administration.php');

        }else {
        
          require_once('school.php');
        
        }

      $loggedInUser = array();
      $loggedInUser['adminfullname'] = $validUserName;
      $loggedInUser['password'] = $validPassword;
      $loggedInUser['role'] = $role;
      $loggedInUser['adminsImg'] = $adminheaderImage;
      $_SESSION['loggedInUser'] = $loggedInUser;
?>