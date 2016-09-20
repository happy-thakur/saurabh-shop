<?php
//edited
// mysql_connect("localhost","root","");
// mysql_select_db("shoplogin");

//by happy singh
include('db.php');
  if(isset($_POST['submit']))
{

$f1 = $_POST['user'];
$f2 = $_POST['pass'];
$query = "insert into users(username,password)
values('$f1','$f2')";
if(mysqli_query($db, $query))
{
echo "Succes";}
}
?>
<html>
<head>
</head>
<style>
body{
background:#eee;
}
#frm{
border:solid gray 1px;
width:20%;
border-radius:5px;
margin:100px auto;
background:white;
padding:50px;
}
#btn{
color:#fff;
background:#337ab7;
padding:5px;
margin-left:69%;
}
</style>
<body>
<div id="frm">
   <form action="reg.php" method="post">
<p>
<label>Username</label>
<input type="test" id="user" name="user"/>
</p>
<p>
<label>password</label>
<input  type="password" sid="pass" name="pass"/>
</p>
<p>
<input type="submit" id="btn" name="submit" value="submit"/>
</p>
</form>
<?php
// mysqli_connect("localhost","root","");
// mysql_select_db("shoplogin");

$query1 = "select * users";

$run = mysqli_query($db, $query1);
while($row=mysqli_fetch_array($run))"{
$s_name = $row['username'];

?>
<h2>
<?php echo $username; } ?></h2>
</body>
</html>
