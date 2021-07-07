<?php /*
 * note :-hard delete

$connection = mysqli_connect("localhost","root","","tbl");

$id = $_GET['deleteid'];


$q = mysqli_query($connection, "delete from tbl_user where user_id='{$id}'") or die("error" .mysqli_error($connection));

if($q){
    echo "<script>alert('Record Deleted');window.location='display.php';</script>";
}
 
 */
$connection = mysqli_connect("localhost","root","","tbl");
$id = $_GET['deleteid'];
$q = mysqli_query($connection, "update tbl_user set is_delete=1 where user_id='{$id}'") or die("error" .mysqli_error($connection));

if($q){
    echo "<script>alert('Record Deleted');window.location='display.php';</script>";
}
 
