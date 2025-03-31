<?php
$servername="localhost";
$username="root";
$password="";
$conn=new mysqli($servername,$username,$password);
if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}
$sql="CREATE DATABASE useename";
if($conn->query($sql)==TRUE){
    echo "YOUR DATABASE IS CREATED";

}else{
    echo "error".$conn->error;
}$conn->close();
?>