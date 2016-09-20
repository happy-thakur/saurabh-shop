
<?php
//this has been changed
 include'dbconnect/db.php'?>
<?php
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$pass = $_POST['password'];
	$query = "SELECT * from login where username='$name'";
	$run=mysqli_query($db, $query);
	$row=mysqli_fetch_array($run);
        $x=$row['username'];
		$y=$row['password'];
       if($x==$name&&$y==$pass){
       	session_start();
       	$_SESSION['username']=$x;
       	header("location:home.php");
       }
else{
    header("location:index.php?deny=fail");
}
}
?>
