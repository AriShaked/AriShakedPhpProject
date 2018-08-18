<!DOCTYPE html>
<html lang="en">
<head>
   <style>
    .adminsCount{

        width:77.5%;
        border: 2px solid black;
        display: inline-block;
        text-align: center;
        height: 88.5%;
        overflow: hidden;
        position:fixed;
        top: 10.5%;
        left:22%;
        overflow-x: hidden;
        padding-top:10%;
    }
    span {
        font-size: 1000%;
    }
   
   </style>
</head>
<body>
    
<div class='adminsCount' > <h1>Administrators:  </h1><span><?php echo  $admins_cnt ?> </span><br>*including owner</div>

</body>
</html>