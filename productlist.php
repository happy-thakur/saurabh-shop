<?php
//edited
 include"logcheck.php" ?>
<html>
<head>
<link rel="stylesheet" href="csslib/style.css">
</head>
<body>
	<div class="w3-container w3-purple">
  <h1>Product List Preview</h1>
  <button onclick="myFunction()" style="background-color:red;">Print this page</button>

<script>
function myFunction() {
    window.print();
}
</script>
</br>
</div>
<table class="w3-table w3-bordered w3-striped">
<tr>
  <th>ID's</th>
  <th>Product Name</th>
  <th>Quantity</th>
  <?php
// mysql_connect("localhost","root","");
// mysql_select_db('shoplogin');

//by happy singh
include('db.php');
$query1 = "select * from product ";
$run = mysqli_query($db, $query1);

 while($row=mysqli_fetch_array($run))
{

$id=$row['ID'];
$product_name = $row['pname'];
$quantity= $row['quantity'];

   ?>
</tr>
<tr>
  <td><?php echo $id ?></td>
  <td><?php echo $product_name ?></td>
  <td><?php echo $quantity ?></td>
</tr>
<?php } ?>
</table>
</body>
</html>
