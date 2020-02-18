<?php
$hostname = "localhost";
$username = "root";
$password = "";
$databasename = "demo1";
//To connect to a database use the php function called mysqli_connect()
//mysqli function returns a boolean datatype
$connection = mysqli_connect($hostname,$username,$password,$databasename);
//check connection
if($connection ==false){
    echo "connection not successful <br>";
// stop connection if unsuccessful
    die("ERROR:".mysqli_connect_error());
}
