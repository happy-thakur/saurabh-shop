<?php
if(isset($_GET['action'])){
 session_start();
 $record = $_GET['action'];
   session_unset();
   session_destroy();
   echo "<div style='background-color:red;'><script>window.alert('Login Again')</script></div>";}
?>

<html>
  <head>
  <link rel="stylesheet" href="csslib2/bootstrap.min.css">

  </head>
  <style>
  body{
  background:#F6F6F6;
  }
  form{
  border:solid gray 1px;
  width:40%;
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
  <div class="w3-border">
    <p><h2>&nbsp;Buisness Stock-Control</h2></p>
  </div>
    <p>
   <div class="form-group">
  <center><h2><img src="lock.png" width="40" height="40">Login </h2></center>
  <center><form action="verify.php" method="post">
  <label ><b>Username</b></label> <input  type="text" name="name" class="form-control" required></br>
  <label ><b>Password</b></label> <input  type="password" name="password" class="form-control" required></br>
  <input type="submit" class="btn btn-primary" name="submit"></br>
  </form></center></div>
  <?php
  if(isset($_GET['deny'])){
        echo   "<div class='alert alert-danger'>
    <strong>Wrong Login Information...Contact Admin</strong>.
  </div>";
  }

  ?>
  <div class="w3-border">
    <p><h6>Year:<?php echo date("Y");?></h6></p>
  </div>
  </body>
</html>
