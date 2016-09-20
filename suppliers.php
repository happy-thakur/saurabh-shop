
<?php
//edited
session_start();
if(!isset($_SESSION['username'])){
  header("location:index.php");
}?>


<?php

// mysql_connect("localhost","root","");
// mysql_select_db("shoplogin");

//by happy singh
include('db.php');
if(isset($_POST['submit'])){
 $suppliers_name = $_POST['name'];
 $address = $_POST['address'];
 $phone = $_POST['phone'];

$query = "insert into suppliers (name,address,phone)
values('$suppliers_name','$address','$phone')";
if(mysqli_query($db, $query))
{
header("location:suppliers.php?action=saved");
}
}
?>
<html>
<head>
<link rel="stylesheet" href="csslib2/bootstrap.min.css">
 <script src="csslib2/jquery.min.js"></script>
  <script src="csslib2/bootstrap.min.js"></script>

</head>
<body>
<div class="row" style="background-color:yellow;"> <div class="col-sm-6" >
 <center><h2><img src="shoplogo.png" width="80" height="80"><?php include 'details.php';
echo $shop_name;?></h2></center>
<center><h6><?php include 'details.php'; echo $tagline;?></h6></div></center>
<div class="col-sm-3"></div>
<div class="col-sm-3">
<div >
<h6><img src="user.png" height="50" width="50"><?php echo $_SESSION['username'];  echo"&nbsp;You Are Logged In &nbsp;";
?><img src="active.png" height="10" width="10"></h6></br>
<a href="index.php?action=logout"><button type="button" class="btn btn-default">Logout</button></a></div></div>
</div>
</div>
</div>
<div style="background-color:white"></br>
<?php include 'design/menu_bar.php'?></br><hr></div>

<center>

      <form  class="form-group"action="suppliers.php" method="post">


<label>Name Of Suppliers</label>
<input class="w3-input" type="text" name="name">


<label>Address</label>
<input class="w3-input" type="num" name="address">

<label>Phone No</label>
<input class="w3-input" type="num" name="phone">



<input class="w3-input" type="submit" name="submit">
</form>
</center>
<center>
<?php
if(isset($_GET['action'])){
echo '
<div class="alert alert-success">
  <strong>Data Is Saved</strong>
</div>

';
}
?>

</center>

<div class="w3-panel w3-white">
  <img src="sup1.png" width="40" height="40">&nbsp;&nbsp;&nbsp;&nbsp;<font><b>Supplier Overview</b></font></div>
<table class="table">
<tr>
<th>Serial No</th>
<th>Suppliers Name</th>

  <th>Address</th>
  <th>Phone</th>
  <th>Update</th>
</tr></br>
<!--php sql code goes  here..-->
<?php
$sn=1;
// mysql_connect("localhost","root","");
// mysql_select_db("shoplogin");

$query1 = "select * from suppliers";

$run = mysqli_query($db, $query1);

while($row=mysqli_fetch_array($run)){
$name = $row['name'];
$address = $row['address'];
$phone = $row['phone'];
?>
<tr>
  <td><?php echo $sn; ?></td>
  <td><?php echo $name; ?></td>
  <td><?php echo $address; ?></td>
  <td><?php echo $phone;  ?></td>
  <td></td>
</tr>


<?php $sn++;} ?>
</table>
</div> </br>

</div>
</body>
</html>
