<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select Student Number</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
    <h3 class="text-center">Select Student Number</h3>
    <hr>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <form action="studentsCourseD.php" method="post">
                <select name="cCodeSearch" id="" class="form-control" required>
                    <?php
                    $conn = mysqli_connect("localhost","root","","collinsclass");
                    if (!$conn){
                        die("Database Connection Error : " . mysqli_connect_error());
                    }
                    $sql = "select student_number from students";
                    $result = $conn -> query($sql);
                    if ($result -> num_rows > 0){
                        // If the table has data
                        while ($row = $result -> fetch_assoc()){
                            ?>
                            <option value="<?php echo $row['student_number'];?>"><?php echo $row['student_number'];?></option>
                            <?php
                        }
                    }
                    mysqli_close($conn);
                    ?>
                </select>
                <hr>
                <div class="buttons">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
</body>
</html>

