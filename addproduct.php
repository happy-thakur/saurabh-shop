
<?php
// edited
session_start();
if(!isset($_SESSION['username'])){
  header("location:index.php");
}?>
<html>
<head>
<link rel="stylesheet" href="csslib2/bootstrap.min.css">
</head>
<style>
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
<div class="w3-container w3-blue">
<h2>&nbsp;&nbsp;<font color="red" size="12px"><b>+</b></font>Add Product</h2>
</div>
<center>
<form class="form-group" method="post" action="addproduct1.php" >

<p>
<label>Name Of Product</label>
<input class="w3-input" type="text" name="product"></p>

<p>
<label>Product Quantity</label>
<input class="w3-input" type="num" name="quantity"></p>
<p>
<label>Product Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input class="w3-input" type="num" name="price"></p>
<p>
<input class="w3-input"  type="submit" value="submit" name="submit" required></p>

</form>
</center>
<hr>
<center><h4>Last Added</h4></center>
<hr>
<table class="table">
<tr>
  <th>Product Name</th>
  <th>Quantity Added</th>
  <th>Price</th>
</tr></br>
<!..php sql code goes  here...>
<?php
// mysql_connect("localhost","root","");
// mysql_select_db("shoplogin");

//by happy singh
include('db.php');
$query1 = "select * from lastproduct";

$run = mysqli_query($db ,$query1);

while($row=mysqli_fetch_array($run)){
$product_name = $row['name'];
$quantity = $row['quantity'];
$price = $row['price'];
?>
<tr>
  <td><?php echo $product_name; ?></td>
  <td><?php echo $quantity;  ?></td>
  <td><?php echo $price;  ?></td>
</tr>

<?php } ?>
</table>
</div>
</body>
</html>
