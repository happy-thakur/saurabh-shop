<?php
//edited
 include"logcheck.php" ?>
<html><base href="<?php echo $base_redir ?>" target="_blank"></html>
<?php include 'essential.php'?>
<?php
// mysql_connect("localhost","root","");
// mysql_select_db('shoplogin');

//by happy singh
include('db.php');
if(isset($_POST['submit'])&&($_POST['product']!=NULL)&&($_POST['product']!="")){

	$product = $_POST['product'];
	$quantity = $_POST['quantity'];
	$price = $_POST['price'];


$query = "INSERT into product(pname,quantity,price)
values('$product','$quantity','$price')";
$query1 = "UPDATE lastproduct SET name='$product',quantity='$quantity',price='$price'";
mysqli_query($db, $query1);
if(mysqli_query($db, $query)){

	header('Location:addproduct.php');
}
}
?>
