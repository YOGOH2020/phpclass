<?php
$conn = mysqli_connect("localhost","root","","collinsclass");
if (!$conn){
    die("Database Connection Error : " . mysqli_connect_error());
}
// Remove SQL Injection
$studentNumber = mysqli_real_escape_string($conn,$_POST['cCodeSearch']);
$sql = "select * from students where student_number = '$studentNumber'";
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
            <title>Update Student</title>
            <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
            <link rel="stylesheet" href="css/style.css">
            <script src="bootstrap/js/jquery-3.6.0.js"></script>
            <script src="bootstrap/js/popper.min.js"></script>
            <script src="bootstrap/js/bootstrap.js"></script>
        </head>
        <body>
        <div class="container">
            <h2 class="text-center">Update Student Details</h2>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <form action="studentupdateCourse.php" method="post">
                        <label for=""><b>Surname</b></label>
                        <input type="text" name="sName" class="form-control" placeholder="* surname" required value="<?php print $row['surname'];?>">
                        <label for=""><b>First Name</b></label>
                        <input type="text" name="fName" class="form-control" placeholder="* First Name" required value="<?php print $row['first_name'];?>">
                        <label for=""><b>Last Name</b></label>
                        <input type="text" name="lName" class="form-control"  placeholder="* Last Name" required value="<?php print $row['last_name'];?>">
                        <label for=""><b>Course Code</b></label>
                        <input type="text" name="cCode" class="form-control" placeholder="* Course Code" value="<?php print $row['course_code'];?>">

                        <div class="buttons">
                            <button type="submit" class="btn btn-info">Update</button>
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
?>

