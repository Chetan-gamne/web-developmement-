<?php
$servername="localhost";
$username="root";
$password="";
$dbname="bank_system";

// Creating a connnection

$conn = mysqli_connect($servername, $username, $password, $dbname);

//checking a connection

if(!$conn)
{
    die("Connection to this database failed due to".mysqli_connect_errror());

}

?>