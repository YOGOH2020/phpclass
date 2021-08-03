<?php
// establishing a database connection to MySQL database server
$conn=mysqli_connect("localhost" ,"root","");
// checking the database connection exists
if (!$conn){
    die("database connection error" .mysqli_connect_error());
}
//If the connection is okay, create the database
$sql="create database collinsclass";
//executing the query in $sql above
if ($conn->query($sql)==true){
    print "database created successsfully";
}
else{
    print "database exists";
}
//closing the database connection after executing the query
mysqli_close($conn);

