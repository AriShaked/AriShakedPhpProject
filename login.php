<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        .loginPage{
            width:50%;
            height: 50%;
            position :fixed;
            top:30%;
            left:40%;

        }
        .loginheader{
            width:100%;
        position:fixed;
        top:0%;
        left:0%;
        border-bottom:2px solid black;
        height:10.1%;
        }
        .logo{
         position:fixed;
        top:0%;
        left:1%;
        width:20%;
        height:10%;
        }
        form {
        width: 250px;
         clear: both;
         }

         form input {
          width: 100%;
          clear: both;
          }
        
    </style>
</head>
<body>
    <div class='loginheader'>
<img src="uploads\schoolImg2.png" alt="logo"class="logo">
    </div>
    
    <div class="loginPage">
<h1>Login</h1>
    <?php 
        if (isset($_GET['error'])) {
            ?>
                <h3 style="color:red"><?= $_GET['error'] ?></h3>
            <?php
        }
    ?>
    <form action="index.php" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username"  /><br/><br/>
        <label for="password">Password </label>
        <input type="password" name="password"  /><br/>
        <button>Login</button>
    </form>
    </div>
</body>
</html>
