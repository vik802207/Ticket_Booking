<?php


$servername="localhost";
$username="root";
$password="";
$dbname="useename";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}
$n=$_POST['name'];
$p=$_POST['phone'];
$e=$_POST['email'];
$u=$_POST['user'];
$pa=$_POST['pass'];


$sql="INSERT INTO `nwe`(`FName`,`phone`,`email`,`username`,`pasword`)
VALUES ('$n','$p','$e','$u','$pa')";



    
  
 



if($conn->query($sql)===TRUE ){
  echo "<h1> WELCOME </h1><br>";
  echo "<h2> You have Create Account Successful!. $n.<br> ThankYOU </h2>";
  date_default_timezone_set('Asia/Calcutta');
echo "today date" .date("y/m/d");
echo "time".date("h:i:sa");
  
}else{
    echo "<h3>please Try Again!</h3><br><br>".$conn->error;
}
$conn->close();









?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: rgb(215, 215, 178);
        }




         h1{
            color: red;
            position: relative;
           text-align: center;
           text-shadow: 10px 10px 10px black;
            text-decoration: line-through;
            text-shadow: 10px 10px 10px black ,10px 10px 10px rgb(84, 45, 45);
            text-decoration-color: black;


        }
        h3{
            text-align: center;
        }

    </style>
</head>
<body>

        <img src="https://images.emojiterra.com/google/android-12l/512px/263a.png" height="100px">




    
</body>
</html>
