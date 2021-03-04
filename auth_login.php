<?php  
    if (isset ($_POST['submit']))
    {
        session_start();
        if ($_POST['email']!==$_SESSION['email'] and $_POST['username']!==$_SESSION['username'])
            {
                echo "please go and register!";
            }
            else
            {
                $username = $_SESSION['username'];
                $email = $_SESSION['email'];
                header('location:dashboard.php');   
            }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>login system</title>
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
        a{
            text-decoration: none;
        }
        input{
            border-radius:5px;
            width:100%;
            border:none;
        }
        
    </style>
</head>
<body>
        <h1>LOGIN</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <div>
        <input type="text" required name="username" placeholder="username"><br><br>
        <input type="email" required name="email" placeholder="email"><br><br>
        <input type="submit" name="submit" value="login">
        <p> dont have an account? <a href="auth_reg.php">Register</a>
        </div>
    </form>
</body>
</html>