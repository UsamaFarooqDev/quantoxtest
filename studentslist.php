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
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Board</th>
                    
                </tr>
                </thead>
                <tbody>
                <?php
while($row = mysqli_fetch_array($result)) {
                       ?>
                <tr>
                    <th scope="row"><?php echo $row['id']; ?></th>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['board']; ?></td>
                   
                </tr>
                <?php
}
?>     
                </tbody>
            </table>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    
</body>
</html>