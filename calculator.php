<DOCTYPE html>
<html>
<head>
<title> my calculator</title>
    <style>
        body{
            font-family: 'Segoe UI',Verdana, sans-serif;
        }
        .label{
            color:greenyellow;
        }
        input{
            border:none;
            box-shadow:1px 1px 1px;
            margin-left:10px;
            margin-top:20px;
        }
        h1{
            font-family: 'Segoe UI',Verdana, sans-serif;
        }
        div{
            border:none;
            margin-block:10px;
            margin-trim:20px;
            margin-left:450px;
            margin-right:450px;
            margin-top:20px;
            border-radius:30px;
            box-shadow:1px 1px 1px 1px;
        }
        form{
            margin-top:20px;
        }
        .operator{
            border:none;
            color:black;
            margin-bottom:20px;
            border-radius:30px;
        }
    </style>
</head>
<?php

    $firstnumber = $_POST['firstnumber'];
    $secondnumber = $_POST['secondnumber'];
    $operator = $_POST['operator'];
    $result='';
    if (is_numeric($firstnumber) && is_numeric($secondnumber))
    {
        switch($operator)
    {
        case 'addition';
            $result= $firstnumber + $secondnumber;
            break;
        case 'subtraction';
            $result = $firstnumber - $secondnumber;
            break;
        case 'multiplication';
            $result = $firstnumber * $secondnumber;
            break;
        case 'division';
            $result = $firstnumber / $secondnumber;
            break;
    }
} 
?>

<body align="center">
    <h1>CALCULATOR</h1>
    <div>
    <form action="" method="post">
        <label><b>First Number: </b> </label><input type="number" name="firstnumber" value="<?=$firstnumber;?>" placeholder="firstnumber" ><br><br>
        <label><b>Second Number: </b></label><input type="number" name="secondnumber" value="<?=$secondnumber;?>" placeholder="secondnumber" ><br><br>

        <label><b>Result: </b></label> <input readonly="readonly" name="result" value="<?= $result;?>"> <br><br>
        
        <input class="operator" type="submit" name="operator" value="addition"> 
        <input class="operator" type="submit" name="operator" value="subtraction">
        <input class="operator" type="submit" name="operator" value="multiplication">
        <input class="operator" type="submit" name="operator" value="division">
    </form>
    </div>
</body>
</html>