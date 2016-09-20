
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  if(isset($_POST['update']))
  {
    include('db.php');

    $que = "update product set quantity='".$_POST['update']."' where sn='".$_POST['s_no']."'";
    mysqli_query($db, $que);
    echo('done');
  }
  else {
    echo('not done');
  }
}
else {
  echo('aaaa');
}

 ?>
