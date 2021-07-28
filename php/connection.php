<?php
$servername="localhost";
$user="root";
$password="";
$dbname="quantox";

$con = mysqli_connect($servername,$user,$password,$dbname);
if(!$con){
    echo 'Connection error';
}

?>