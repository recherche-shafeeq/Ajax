<?php
  $conn = mysqli_connect('localhost','root','','ajax_test');
  $query = 'SELECT * FROM Users';

  $result = mysqli_query($conn, $query);

  $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

  echo json_encode($users);
