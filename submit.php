
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  if(isset($_POST['plus']) || isset($_POST['minus']))
  {
    include('db.php');

    $que2 = "select quantity from product where sn='".$_POST['s_no']."'";
     $res = mysqli_query($db, $que2);
    $row = mysqli_fetch_array($res);

    $temp = $row['quantity'];
    $temp2 = $_POST['update'];
    if($temp > $temp2)
    {
      if(isset($_POST['plus']))
      {
        $var_update = $temp + $temp2;
      }
      else
      {
        $var_update = $temp - $temp2;
      }


  }

    else {
      $var_update = $temp;
    }

    $que = "update product set quantity='".$var_update."' where sn='".$_POST['s_no']."'";
    mysqli_query($db, $que);
    echo('done'.$var_update);
  }
  else {
    echo('not done');
  }
}
else {
  echo('aaaa');
}

 ?>
