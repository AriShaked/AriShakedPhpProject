<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    
    .headerMain {
        width:100%;
        position:fixed;
        top:0%;
        left:0%;
        border-bottom:2px solid black;
        height:10%;
        
    }

    .school{
        display:inline-block;
        float:left;
        border-left:1px solid black;
        padding-left:1%;
        padding-right:1%;
        position:fixed;
        top:3%;
        left:21%;
    }
    .administration{
        color:black;
        display:inline-block;
        float:left;
        border-left:1px solid black;
        border-right:1px solid black;
        padding-left:1%;
        padding-right:1%;
        position:fixed;
        top:3%;
        left:26%;
        
    }

    a{
        color:black;
        text-decoration: none;
    }
    
    .logoutDiv{
        border-bottom: 1px solid black;
        
        position:fixed;
        right:7%;
        top:6%;
        display:inline-block;
        
    }
    
    .userDetails{

        position:fixed;
        top:2.5%;
        right:7%
        
    }
    .logo{
        position:fixed;
        top:0%;
        left:1%;
        width:20%;
        height:10%;

    }
    .adminHeadrImage{
        position:fixed;
        width:4%;
        height:6%;
        right:1%;
        top:3%;
        
    }
    </style>
</head>
<body>
<img src="uploads\schoolImg2.png" alt="logo"class="logo">
    <div class="headerMain">
<?php

    if ($role == 'manager' || $role == 'owner'){
        echo "<div class='administration'><a href='index22.php?administration'>Administration</a></div>";
        echo "<div class='school'><a href='index22.php?school'>School</a></div>";
        
    }elseif($role == 'sales') {

        echo "<div class='school' name='school' value='school'>School</div>";
    }else{
        header("Location: http://localhost/arisphp/tests-phpProjectAriShaked_Copy/mvc-courselist/login22.php?error=please insert correct username and password(role is missing in DB)");
        die();
        }

    echo "<div class='userDetails'>". $validUserName.",  ".$role."</div>";

?>

    </div>
    <div class='logoutDiv'>
        <a href="logout.php?action=logout">Logout</a>
        <img src="<?php echo 'uploads' . '/' .'adminsImages' . '/' . $adminheaderImage; ?> "class='adminHeadrImage'/>
    </div>
  </body>
</html>

