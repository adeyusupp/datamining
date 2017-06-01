<?php
require_once('conn.php');
session_start();

$user_check = $_SESSION['username'];
    $query = $conn->prepare('SELECT * FROM user WHERE username = ?');
    $query->bind_param('s', $user_check);
    $query->execute();
    $result=$query->get_result();
	  $jumrow=$result->num_rows;
	    if($jumrow > 0){
	    	$row=$result->fetch_array();
	        $name = $row['name'];
	        $email = $row['email'];
    	}
	if(!isset($_SESSION['username'])){
      header("location: ../sign-in");
   }
?>