<!DOCTYPE html>
<html>
    <head>
    <style>
        body
        {   
            background-color:#00264B;
            color:gold;
            display:flex;
        }
        
        h1
        {
            position:absolute;
            margin-left:490px;
            text-shadow: 1px 1px 2px;
            font-size: 3rem;


        }
        .container2
        {
            margin-left:30px;
            display:table-cell;
            border:none;
            width:30%;
            height:300px;
            margin-top:150px;
            border-radius: 30px;
            text-align:center;
            box-shadow:1px 2px 2px 1px;
            
        }
        .container
        {
            margin-left:250px;
            margin-top:150px;
            text-align:center;
            border:none;
            width:450px ;
            border-radius:30px;
            box-shadow:1px 2px 2px 1px;
        }
        .input1
        {
            margin-left:30%;
            border:none;
            border-bottom: 2px solid gold;
            fill:none;
            background-color:transparent;
            display:block;
            width:60%;
            color:gold;
            
        }
        .input
        {
            border:none;
            margin-left:30%;
            width:60%;
            border-bottom:2px solid gold;
            fill: none;
            background-color:transparent;
            display:block;
            color:gold;
            
        }
        
        
        .input1:focus
        {
            background-color:transparent;
            border:none;
            outline:none;
            border-bottom:2px solid gold;
        }
        .input:focus
        {
            background-color:transparent;
            border:none;
            outline:none;
            border-bottom:2px solid gold;

        }
        .button
        {
            border:none;
            color:gold;
            background-color:transparent;
            padding:4px;
            width:100px;
            box-shadow:2px 1px 1px 2px;
            border-radius: 50px;
            margin-bottom:10px;
        }
        .label
        {
            margin-top:2;
            display:block;
            margin-left:-70%;
        }
       
    </style> 
    </head>
    <body>
    <?php
      function form()
        {
            if (isset($_POST['submit']))
            {
                $firstname=$_POST['firstname'];
                $secondname=$_POST['secondname'];
                $phonenumber=$_POST['phone-number'];
                $email=$_POST['email'];
                $date_of_birth=$_POST['date_of_birth'];
                $zones=$_POST['zones'];
                
                echo "First Name:"."  ".$firstname."<br>"."<br>";
                echo "Second Name:"."  ".$secondname."<br>"."<br>";
                echo "Phone number:"."  ".$phonenumber."<br>"."<br>";
                echo "Email:"."  ".$email."<br>"."<br>";
                echo "Date of Birth:"."  ".$date_of_birth."<br>"."<br>";
                echo "Zones:"."  ".$zones."<br>"."<br>";
            }
        }
    ?>
    <h1> Registration Form</h1>
                 <div class="container">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                     <label class="label">FirstName</label>   <input type="text" class="input1" required name="firstname"><br><br>
                     <label class="label">SecondName</label>   <input type="text" class="input" required name="secondname"><br><br>
                     <label class="label">Phone Number</label><input type="number" class="input" required name="phone-number"><br><br>
                     <label class="label">Email</label><input type="email" class="input" required name="email"><br><br>
                        <label class="label">Date of Birth:</label> <input type="date" required class="input" name="date_of_birth"><br><br> 
                        <label class="label">Geopolitical Zones</label>
                            <select class="input" id="geopolitical zones" name="zones">    
                            <option value="NorthCentral">NorthCentral</option>
                            <option value="NorthWest">NorthWest</option>
                            <option value="NorthEast">NorthEast</option>
                            <option value="SouthSouth">SouthSouth</option>
                            <option value="SouthWest">SouthWest</option>
                            <option value="SouthEast">SouthEast</option>
                            </select><br><br>
                        <input type="submit" name="submit"class="button" value="register">  
                    </form>
            </div>
            <div class="container2">
                <h2><small> These are your credentials:</small></h2>
                <?php echo form();?>         
            </div>
   </body>
</html>