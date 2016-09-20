<?php

//edited
if(!isset($_SESSION['username'])){
  header("location:index.php");
}?>

<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="csslib2/bootstrap.min.css">

<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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
th{
background-color:#EEAA7B;
}
input.update{
width: 80px;
text-align: center;
border: 0px;
background: #eeeeee;
}
input.update:focus{
  background: white;
}
input.done{
    background: white;
    border: 0;
    padding: 6px;
    border-radius: 4px;
    font-weight: 500;
    cursor: pointer;
    border: 1px #eeeeee solid;
}
input.done:hover{
  background: #eeeeee;
  /*color: white;*/
  border: 1px white solid;
  /*font-weight: 600px;*/
  /*box-shadow: white 1px 1px 1px 1px;*/
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
<div class="w3-panel w3-white">
  <img src="p1.png" width="40" height="40">&nbsp;<font><b>Product Overview</b></font></div>
<table class="table">
<tr>
  <th>ID</th>
  <th>Product Name</th>
  <th>Quantity Remains</th>
  <th>Price Per Least</th>
  <th>Total Cost Remains</th>
  <th>Update</th>
</tr></br>
<!..php sql code goes  here...>
<?php
// mysql_connect("localhost","root","");
// mysql_select_db("shoplogin");
include('db.php');

$query1 = "select * from product";

$run = mysqli_query($db, $query1);
$temp_i = 1;
while($row=mysqli_fetch_array($run)){
$s=0;
$sn = $row['sn'];
$product_name = $row['pname'];
$quantity= $row['quantity'];
$price = $row['price'];
?>
<tr <?php if($quantity<10){  echo "style='background-color:red'";}?>>
  <td><?php echo $temp_i++; ?></td>
  <td><?php echo $product_name; ?></td>
  <!-- <td><?php
  // echo $quantity;  ?></td> -->
  <td>
    <form class="update" action="submit.php" method="POST" target="submit">
      <input type="text" name="update" class="update" value = "<?php echo $quantity;  ?>"/>
      <input type="text" hidden="true" name="s_no" value="<?php echo($sn); ?>">
      <!-- <i class="material-icons prefix" id="done" title="submit">done</i> -->
      <input type="submit" name="name" class="done" title="Submit" value="update">
    </form>


  </td>
  <td><?php echo $price;  ?></td>
  <td><?php echo "&#x20B9;";
      echo $price*$quantity;
      ?></td>
      <?php
  // echo('<form action="submit.php" method="post">');?>
  <!-- <td><?php
  // echo ('<input type="text" name="minus" id="update">');  ?></td> -->
  <!-- <td><?php
  // echo ('<input type="button" value="Submit" name="submit" onclick="do_it(this)">');  ?></td> -->
  <!-- <?php
  //  echo('</form>');?> -->
</tr>

<?php
} ?>
</table>
</div> </br>
<div class="w3-container w3-teal">
  <h5>Web Based Stock Inventory System</h5>

</div>
<iframe src="submit.php" width="0" height="0" name="submit" hidden="true"></iframe>
</body>
<script type="text/javascript">
  // function do_it(ele)
  // {
  //   var inp = document.querySelector('input#update');
  //   var input = inp.value;
  //   var td_par = ele.parentElement;
  //   var tr = td_par.parentElement;
  //   var remain = tr.children[2];
  //   if(input != null)
  //   {
  //     remain.innerHTML -= input;
  //     var form = tr.children[5];
  //     inp.innerHTML = "";
  //     form.submit();
  //   }
  //   else {
  //     alert('Please enter something and then submit..  :-)');
  //   }
  //   //alert(remain.innerHTML);
  // }
</script>
</html>
