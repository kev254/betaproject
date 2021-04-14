<?php
  
  $con = mysqli_connect("localhost","root","","foodshare"); 
  if ($con) {
 
  }else{
  	echo "Failed to estatblish  a connection.".mysqli_connect_error();
  }
?>