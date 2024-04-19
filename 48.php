<?php 
$con = mysqli_connect("localhost", "root", "", "abc123");  
mysqli_query($con, "SELECT * FORM employee"); 
$error = mysqli_error($con); 
print("Error Occurred: ".$error); 
mysqli_close($con);?> 