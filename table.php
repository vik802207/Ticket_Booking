<?php
$servername="localhost";
$username="root";
$password="";
$dbname="useename";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}
$sql="CREATE TABLE NWE(FName varchar(25),Phone int(12),email varchar(15),username varchar(15) ,pasword varchar(20))";
if($conn->query($sql)===TRUE){
    echo "YOUR TABLE IS CREATED";

}else{
    echo "error".$conn->error;
}$conn->close();
?>