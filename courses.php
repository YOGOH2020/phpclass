<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
    <h2 class="text-center">Courses</h2>
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <form action="newCourse.php" method="post">
            <input type="text" name="cCode" class="form-control" placeholder="*Course Code" required>
            <br>
            <input type="text" name="cTitle" class="form-control" placeholder="*Course Title" required>
            <label for=""><b>Duration</b></label>
            <select name="duration" id="" class="form-control" required>
            <option value="1 month">1 Month</option>
            <option value="2 months">2 months</option>
            <option value="3 months">3 months</option>
            <option value="4 months">4 months</option>
            <option value="5 months">5 months</option>
            <option value="6 months">6 months</option>
            </select>
            <label for=""><b>Lecturer</b></label>
            <select name="lecturer" id="" class="form-control" required>
                <option value="Jack">Jack</option>
                <option value="Ben">Ben</option>
                <option value="Dorothy">Dorothy</option>
                <option value="Steve">Steve</option>
                <option value="Collins">Collins</option>
                <option value="Bosire">Bosire</option>
            </select>
            <hr>
            <div class="buttons">
                <button type="submit" class="btn btn-primary">Add New</button>
            </div>
        </form>
    </div>
    <div class="col-sm-3"></div>
</div>
</body>
</html>
