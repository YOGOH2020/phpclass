<?php
// establishing a database connection to MySQL database server
$conn=mysqli_connect("localhost" ,"root","","collinsclass");
// checking the database connection exists
if (!$conn){
    die("database connection error" .mysqli_connect_error());
}
//If the connection is okay, create the database table courses
$sql="create table courses (
    course_code varchar (255) not null ,
    primary key (course_code),
    course_title varchar (255) not null ,
    duration varchar (255)not null ,
    lecturer varchar (255) not null
)";
//executing the query in $sql above
if ($conn->query($sql)==true){
    print "table created successsfully";
}
else{
    print "table exists";
}
//closing the database connection after executing the query
mysqli_close($conn);

