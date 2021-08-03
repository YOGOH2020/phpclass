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
            $conn=mysqli_connect("localhost","root","","collinsclass");
            if (!$conn){
                die("Database Connection Error:" .mysqli_connect_error());
            }
            //Removing Sql Injections
            $courseCode=mysqli_real_escape_string($conn,$_POST['cCode']);
            $courseTitle=mysqli_real_escape_string($conn,$_POST['cTitle']);
            $courseDuration=mysqli_real_escape_string($conn,$_POST['duration']);
            $courseLecturer=mysqli_real_escape_string($conn,$_POST['lecturer']);
            //using mysql insert to post data to the database table courses
            $sql="Insert into courses(course_code,course_title,duration,lecturer) 
values ('$courseCode','$courseTitle','$courseDuration','$courseLecturer')";
            if ($conn->query($sql)==true){
                print "<p>New Course Added Successfully</p>";
                print "<a href='courses.php' class='btn btn-outline-success'>Add New Course</a>";
            }
            else{
                print "<p>Course not added</p>";
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
