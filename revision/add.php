<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>ADD NEW STUDENNT</h1> 
   <form action="" method="post">
    <label for="fname">fname</label>
    <input type="text" name="fname" id=""><br>
    <label for="lname">lname</label>
    <input type="text" name="lname" id=""><br>
    <label for="dept">dept</label>
    <input type="text" name="dept" id=""><br>
    <input type="submit" name="submit" id="" value="addstudent">
   </form>
</body>
</html>

<?php
include_once("connection.php");
if(isset($_POST["submit"])){
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $dept=$_POST["dept"];
    if(empty($fname)){
        echo"fname is required<br>";
    }
    if(empty($lname)){
        echo"lname is required<br>";
    }
    if(empty($dept)){
        echo"dept is required<br>";
    }

    if(!preg_match("/^[a-zA-Z ]*$/",$fname)){
        echo"only letter and space are required on fname";

    }
    if(!preg_match("/^[a-zA-Z ]*$/",$lname)){
        echo"only letter and space are required on lname";

    }
    if(!preg_match("/^[a-zA-Z0-9 ]*$/",$dept)){
        echo"only letter,space and number are required on dept";

    }
    if(!empty($fname) && !empty($lname) && !empty($dept) && preg_match("/^[a-zA-Z ]*$/",$fname) && preg_match("/^[a-zA-Z ]*$/",$lname) && preg_match("/^[a-zA-Z ]*$/",$dept)){
        $query=mysqli_query($conn,"INSERT INTO mytb(fname,lname,dept) VALUES('$fname','$lname','$dept')");
    }
    if($query){
        echo"data inserted";
    }
    else{
        echo"data not inserted";
    }

















}


?>