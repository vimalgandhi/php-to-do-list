<?php

/* 
 <?php

$connection = mysqli_connect("localhost","root","","db_student");

$q = mysqli_query($connection,"select * from tbl_info") or die(mysqli_error($connection));

$row = mysqli_fetch_array($q);
echo "<pre>";
print_r($row);
echo $row[0].$row[1].$row[2].$row[3];



 */




$connection = mysqli_connect("localhost","root","","tbl");

$q = mysqli_query($connection,"select * from tbl_user where is_delete = 0") or die(mysqli_error($connection));
echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>name</th>";
echo "<th>gender</th>";
echo "<th>Mobile no</th>";
echo "<th>Action</th>";

echo "</tr>";
 $i =0;
while ($row = mysqli_fetch_array($q)) {
    $i++;
    
    echo "<tr>";
    echo "<td>$i</td>";
  //echo "<td>{$row[0]}</td>";
    echo "<td>{$row[1]}</td>";
    echo "<td>{$row[2]}</td>";
    echo    "<td>{$row[3]}</td>";
    echo "<td> <a href='edit.php?id=$row[0]'>Edit</a> | <a href='delete.php?deleteid={$row[0]}'>Delete</a</td>";
    echo "</tr>";
    }
    
echo "<a href='insert.php'>add recoded</a>";    