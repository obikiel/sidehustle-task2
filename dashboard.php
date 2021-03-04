<?php
        session_start();
        $username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
        <title>dashboard</title>
        <style>
        body{
               background-color:#DCDCDC;
        }
        h1{
              
              margin-top:10%;
              text-align: center;
              color:black;
                
        }
        a{
               text-decoration: none;
               color:white;
        }
        button{
              margin-left:47%;
              background-color:black;
              width:70px;
              height:30px;
              border-radius:10px;
        }
        </style>
</head>
<body>
   
        <h1><strong><?php echo $username."  "."you are logged in!";?></strong></h1>
        
        <button><a href="auth_login.php"> <strong>logout</strong> </a></button>
</body>
</html>
