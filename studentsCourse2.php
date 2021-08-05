<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/jquery-3.6.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <?php
            $conn= mysqli_connect("localhost", "root", "", "collinsclass");
            if (!$conn){
                die("Database Connection Error:" .mysqli_connect_error());
            }
            //Removing Sql Injections
            $surname=mysqli_real_escape_string($conn,$_POST['sName']);
            $firstName=mysqli_real_escape_string($conn,$_POST['fName']);
            $lastName=mysqli_real_escape_string($conn,$_POST['lName']);
            $courseCode=mysqli_real_escape_string($conn,$_POST['cCode']);
            $feesPayable=mysqli_real_escape_string($conn,$_POST['fees_payable']);
            $feesPaid=mysqli_real_escape_string($conn,$_POST['fees_paid']);
            //using mysql insert to post data to the database table courses
            $sql= "insert into students (surname, first_name, last_name, course_code, fees_payable, fees_paid) 
values ('$surname','$firstName','$lastName','$courseCode','$feesPayable','$feesPaid')";
            if ($conn->query($sql)==true){
                print "<p>Student Added Successfully</p>";
                print "<a href='students.php' class='btn btn-outline-success'>Add  New Student</a>";
            }
            else{
                print "<p>Student not added</p>";
                print "<a href='students.php' class='btn btn-outline-danger'>Try Again</a>";
            }
            mysqli_close($conn);
            ?>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>
