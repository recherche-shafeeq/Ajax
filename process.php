<?php
  $conn = mysqli_connect('localhost','root','','ajax_test');
  echo "Processing....";
  if(isset($_GET['name'])){
    echo "Brad is stupid and your name is ". $_GET['name'];
  }
  if(isset($_POST['name'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $query = "INSERT INTO Users(name) VALUES('$name')";
    if(mysqli_query($conn, $query)){
      echo 'User Added...';
    }
    else {
      echo 'ERROR: '.mysqli_error($conn);
    }
    echo "Brad is stupid and your name is ". $_POST['name'];
  }
 ?>
