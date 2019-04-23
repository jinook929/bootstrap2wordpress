<?php

$email = filter_input(INPUT_POST, 'email');

if (!empty($email)){
  $host = "localhost:3306";
  $dbusername = "jncwebne_jinook";
  $dbpassword = "jc325710";
  $dbname = "jncwebne_joinus_node";

  // Create connection
  $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
  
  if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
  } else {
    $sql = "INSERT INTO users (email) values ('$email')";
    if ($conn->query($sql)){
      //echo "New record is inserted sucessfully";
      header("Location: https://jncweb.net/wp-jinook/wp-content/themes/bootstrap2wordpress/assets/etc/joinus/");
    } else {
      echo "Error: ". $sql ."
      ". $conn->error;
    }
    $conn->close();
  }
} else {
  echo "Email should not be empty";
  die();
}

?>