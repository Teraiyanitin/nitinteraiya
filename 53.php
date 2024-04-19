<?php 
$con = mysqli_connect("localhost", "root", "", "newdatabase"); 
 
$result = mysqli_query($con, "SELECT * FROM myplayers"); 
  
$count = mysqli_num_rows($result); 
print("Number of rows in the result: ".$count); 
  
mysqli_free_result($result); 
  
mysqli_close($con);?> 