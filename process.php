<?php
$username = $_POST['user'];
$password = $_POST['pass'];
//Connect To Server And Select Datsbases
// mysql_connect("localhost","root","");
// mysql_select_db("shoplogin");

//by happy singh
include('db.php');

//qurey the database for user
$result=mysqli_query($db, "select * from users where username='$username' and password='$password'")
or die("failed to query database".mysqli_error());
$row=mysqli_fetch_array($result);
if ($row['username']==$username && $row['password']==$password){
echo "login sucessful welcome $username";

}
else{
echo "failed";
}
?>
