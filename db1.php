<?php
// establishing a database connection to MySQL database server
$conn=mysqli_connect("localhost" ,"root","");
// checking the database connection exists
if (!$conn){
    die("database connection error" .mysqli_connect_error());
}
//If the connection is okay, display a success in the browser
print "database connection success";

