<?php
$conn = mysqli_connect("localhost","root","","collinsclass");
if (!$conn){
    die("Database Connection Error : " . mysqli_connect_error());
}
// Remove SQL Injection
$courseCode = mysqli_real_escape_string($conn,$_POST['cCodeSearch']);
$sql = "select * from courses where course_code = '$courseCode'";
$result = $conn -> query($sql);
if ($result -> num_rows > 0){
    // If the table has data
    while ($row = $result -> fetch_assoc()){
        ?>
        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Delete Course</title>
            <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
            <link rel="stylesheet" href="css/custom.css">
            <script src="bootstrap/js/jquery-3.6.0.js"></script>
            <script src="bootstrap/js/popper.min.js"></script>
            <script src="bootstrap/js/bootstrap.js"></script>
        </head>
        <body>
        <div class="container">
            <h2 class="text-center">Delete Course</h2>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <form action="deleteCourse.php" method="post">
                        <label for=""><b>Course Code</b></label>
                        <input type="text" name="cCode" class="form-control" placeholder="* Course Code" required value="<?php print $row['course_code'];?>">
                        <label for=""><b>Course Title</b></label>
                        <input type="text" name="cTitle" class="form-control" placeholder="* Course Title" required value="<?php print $row['course_title'];?>">
                        <label for=""><b>Duration</b></label>
                        <input type="text" name="duration" class="form-control" required value="<?php print $row['duration'];?>">
                        <label for=""><b>Lecturer</b></label>
                        <input type="text" name="lecturer" class="form-control" value="<?php print $row['lecturer'];?>">
                        <hr>
                        <div class="buttons">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
        </body>
        </html>
        <?php
    }
}
mysqli_close($conn);
?>


