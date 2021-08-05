<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>students</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
    <h2 class="text-center">Students</h2>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="studentsCourse2.php" method="post">
                <input type="text" name="sName" class="form-control" placeholder="*Surname" required>
                <br>
                <input type="text" name="fName" class="form-control" placeholder="*First Name" required>
                <br>
                <input type="text" name="lName" class="form-control" placeholder="*Last Name" required>
                <br>
                <input type="text" name="cCode" class="form-control" placeholder="*Course Code" required>
                <br>
                <label for=""><b>Fees Payable</b></label>
                <input type="number" name="fees_payable" class="form-control" value="0">
                <label for=""><b>Fees Paid</b></label>
                <input type="number" name="fees_paid" class="form-control" value="0">
                <br>
                <div class="buttons">
                    <button type="submit" class="btn btn-primary">Add New Student</button>
                    &nbsp;
                    <a href="studentsCourseS.php" class="btn btn-info">Update</a>
                    &nbsp;
                    <a href="studentSearchD.php" class="btn btn-danger">Delete</a>
                </div>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>
