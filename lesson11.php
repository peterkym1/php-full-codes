<?php
//In development we often need to store data collected from users of our systems
//MySQL is the database base system used for both big and small businesses and it uses
//the SQL (structured query Language) to interact with data
//A Db is made up of related tables

//before using the database you have to connect to it by providing the following info
//        1.hostname
//        2.username
//        3.password
//        4.database name
//
//Php has a helper function that will make database interactions easy
//>CONNECTING TO THE DATABASE
//credentials for connecting to a database
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

//inserting data into the table
$sql = "INSERT INTO `users`(`id`, `username`, `firstname`, `lastname`, `email`, `password`, `gender`) VALUES (NULL ,'saxon','sammy','andy','guava@gmail.com','pass8975','female')";
if(mysqli_query($connection, $sql)){
    echo "Data inserted successfully <br>";
}else{
    echo "Data not inserted ".mysqli_error($connection);
}
//create a database
//$sql ="CREATE DATABASE demo1";//request/query to the DB sys
//make the request/execute:mysqli_query:returns a boolean
//if(mysqli_query($connection,$sql)){
//    echo "Database created successfully<br>";
//}else{
//    echo"ERROR:could not execute $sql".mysqli_error(($connection));
//}







?>