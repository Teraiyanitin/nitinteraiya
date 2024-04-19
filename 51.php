<?php  
$con = mysqli_connect("localhost", "root", "", "abc123"); 
  
$query = "SELECT * FROM user"; 
  
$res = mysqli_query($con, $query, MYSQLI_USE_RESULT);
if ($res) { 
    while ($row = mysqli_fetch_row($res)) { 
    print("Id: ".$row[0]."<br>"); 
    print("Name: ".$row[1]."<br>"); 
    } 
    }  
    mysqli_close($con);?> 