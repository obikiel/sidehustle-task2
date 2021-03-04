<?php
        if (isset($_POST['register']))
        {
            session_start();
            $_SESSION['username']=$_POST['username'];
            $_SESSION['email']=$_POST['email'];
         
            header('Location:auth_login.php');
        }

    ?>
<!DOCTYPE html>
<html>
<head>
    <title>registration page</title>
    <style>
        body{
            text-align: center;
            display:flexbox;
            margin-top:15%;
            background-color:#DCDCDC;
        }
        form
        {   
            
            height:20%;
            width:20%;
            margin-left:40%;
        }
        input{
            width:100%;
            border-radius:5px;
            border:none;
        }
        a{
            text-decoration: none;
        }
       
        
    </style>
</head>
<body>
        <h1><strong>REGISTRATION</strong></h1>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <input type="text" required name="name" placeholder="name"><br><br>
        <input type="text" required name="username" placeholder="username"><br><br>
        <input type="number" required name="number" placeholder="phone number"><br><br>
        <input type="email" required name="confirm" placeholder="email"><br><br>
        <input type="submit" name="register" value="Register">
        
    </form>
    <p>if you have an account already, <a href="auth_login.php">login</a></p>
</body>
</html>