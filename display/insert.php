
<?php

$connection = mysqli_connect("localhost","root","","tbl");
if($_POST){
//sql injection na thay aena mate aa vapavu
  // $name  = mysqli_real_escape_string($connection,$_POST['txt1']);
    
    
    $name = $_POST['txt1'];
    $gender = $_POST['txt2'];
    $mobno = $_POST['txt3'];
  
    
    $q= mysqli_query($connection,
            "insert into tbl_user(user_name,user_gender,user_mob ) values('{$name}','{$gender}','{$mobno}')") or die("error" .mysqli_error($connection));
}

if ($q){
    echo "<script>alert('recoded added');</script>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>crad opt</title>

</head>
<body>
    <form method="post">
        name : <input type="name" name="txt1"/>
        Gender :<input type="gender" name="txt2"/>
        mobno :<input type="number" name="txt3"/>
        <input type="submit"/>
    </form> 
</body>
</html>

<b><a href='display.php'>display recoded</a></b>   