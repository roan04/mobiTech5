<?php

$serverName = "localhost";  //Localhost XAMPP
$dBUsername = "root"; //Username of server
$dBPassword = "";
$dBName = "mobiTechLogin"; //Name of the database in the server localhost

$conn = mysqli_connect($serverName,$dBUsername,$dBPassword,$dBName); //Connect to the database using mysqli

if(!$conn){
    die("Connection failed: ". mysqli_connect_error()); //Output if connection failed
}
