<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="useename";
    $conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error){
        die("connection failed:".$conn->connect_error);
    }

    
    
    $login=false;
   
 
    $e = $_POST["uname"];
    $p = $_POST["pa"];
    
     $sql = "SELECT * FROM nwe WHERE username = '$e' AND pasword='$p'";
     $result = mysqli_query($conn, $sql);
     $num=mysqli_num_rows($result);
     if($num==1){
      $login=true;

      
      echo "<h1>"."<a href="."./main.html".">Click to book ticket</a>"."</h1>";
      
     }
     else{
     
    
     echo "<h1>"."<a href="."./invalid.html"." >Click Here</a>"."</h1>";
     

      
     
     }
     
     ?>
    