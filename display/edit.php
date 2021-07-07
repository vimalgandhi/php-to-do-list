<?php

$connection = mysqli_connect("localhost","root","","tbl");
if (!isset($_GET['id']) || empty($_GET['id'])){
    header("location:display.php");
}

    $editid = $_GET['id'];
    $editq = mysqli_query($connection , "select * from tbl_user where user_id='{$editid}'") or die(mysqli_error($connection));
    $editdata = mysqli_fetch_array($editq);
  //  echo "<pre>";
 //   print_r($editdata);
//
//
    if ($_POST){
    $txt1 = $_POST['txt1'];
    $txt2 = $_POST['txt2'];
    $txt3 = $_POST['txt3'];

    $uq = mysqli_query($connection, "update tbl_user set user_name='{$txt1}',user_gender='{$txt2}',user_mob='{$txt3}'where user_id='{$editid}'" ) or die(mysqli_error($connection));

    if ($uq){
    echo "<script>alert('record updated');window.location='display.php';</script>";
            }
    }
?>

<html>
    <body>
             <form method="post">
                 name :<input type="txt"  value="<?php echo $editdata['user_name']; ?>" name="txt1"/> 
            </br>
            Gender : Male <input type="radio" <?php if($editdata['user_gender']== "Male") {echo "checked" ;}?>  value="Male" name="txt2" />
                     Female<input type="radio" <?php if($editdata['user_gender']== "Female"){echo "checked" ;} ?>  value="Female" name="txt2" />      
                     </br>
            mobile :<input type="number"  value="<?php echo $editdata['user_mob']; ?>" name="txt3"/>
                     </br>
                     <input type="submit"/>
          </form>
    </body>
</html>