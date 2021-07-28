<?php
@include('php/connection.php');

$sql = "select * from student_db";
$result = mysqli_query($con,$sql);


?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/app.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>SMS</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row header">
            <div class="col-sm-6 text-center ">
                <h3>Welcome To Student Management System</h3>
            </div>
            <div class="col-sm-6">
                <ul class="nav">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="studentslist.php">Students List</a>
                    </li>
                    <li>
                        <a href="addgrades.php">Add Grades</a>
                    </li>
                    <li>
                        <a href="viewresult.php">View Result</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="row text-center">
            <div class="offset-sm-3 col-sm-6 offset-sm-3">
                <form action="php/adddata.php" method="post" class="sform">
                    <h3>Add Students Grades</h3> <br>
                    <label for=""><b>Student Name:</b></label>
                    <input type="text" list="students" name="sname" class="form-control" required>
                    <datalist  id="students" >
                       <?php
while($row = mysqli_fetch_array($result)) {
                       ?>
<option value="<?php echo $row['name']; ?>"> <?php echo $row['name']; ?></option>

<?php
}
?>
                    </datalist>
                    <label for=""><b>Subject 1 Grades</b></label>
                    <input type="number" name="g1" class="form-control" placeholder="Grades out of 10" id="">
                    <label for=""><b>Subject 2 Grades</b></label>
                    <input type="number" name="g2" class="form-control" placeholder="Grades out of 10" id="">
                    <label for=""><b>Subject 3 Grades</b></label>
                    <input type="number" name="g3" class="form-control" placeholder="Grades out of 10" id="">
                    <label for=""><b>Subject 4 Grades</b></label>
                    <input type="number" name="g4" class="form-control" placeholder="Grades out of 10" id="">
                    <br>
                    <input type="submit" name="addgrades" value="Add Grades" class="form-control btn btn-success">
                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    
</body>
</html>