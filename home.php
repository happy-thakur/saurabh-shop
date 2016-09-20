<?php
//edited
session_start();
$x=$_SESSION["username"];
include "dbconnect/db.php";
$query = "SELECT * from login where username='$x'";
//by happy singh
  $run=mysqli_query($db, $query);
  $row=mysqli_fetch_array($run);
        $y=$row['username'];
if($x==$y){
  include "homepage.php";
}
else{
header("location:index.php");
}

?>
