<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Success</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap/js/jquery-3.6.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
    <h2 class="text-center">Delete Success</h2>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <?php
            $conn = mysqli_connect("localhost","root","","collinsclass");
            if (!$conn){
                die("Database Connection Error : " . mysqli_connect_error());
            }
            // Removing SQL Injections
            $courseCode = mysqli_real_escape_string($conn,$_POST['cCode']);

            // Using MySQL Insert to post the data to the database table courses
            $sql = "delete from courses where course_code = '$courseCode'";
            if ($conn -> query($sql) == true){
                print "<p>Course details deleted Successfully</p>";
                print "<a href='courses.php' class='btn btn-danger'>Delete another Course</a>";
            }
            else{
                print "<p>Course details not deleted</p>";
                print "<a href='courses.php' class='btn btn-outline-danger'>Try Again</a>";
            }
            mysqli_close($conn);
            ?>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>
