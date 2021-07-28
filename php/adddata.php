<?php
@include('connection.php');

if(isset($_POST['studentsave'])){
    $id = rand(100,10000);
    $name = $_POST['sname'];
    $board = $_POST['board'];
$check = "select * from student_db ";
$result = mysqli_query($con,$check);
$row =mysqli_fetch_array($result);
    $sql = "INSERT INTO student_db Values('$id','$name','$board')";

    if(empty($row['name'])){
        mysqli_query($con,$sql);
        echo "<script type='text/javascript'>alert('Record Added Succesfully');</script>";
        header("refresh:0.1 url=../index.html");
       
    }
    else if ($row['name'] == $name){
        echo "<script type='text/javascript'>alert('Student Already Registered With Different Board');</script>";
        header("refresh:0.1 url=../index.html");
    }
    else{
        mysqli_query($con,$sql);
        echo "<script type='text/javascript'>alert('Record Added Succesfully');</script>";
        header("refresh:0.1 url=../index.html");
    }
}
if(isset($_POST['addgrades'])){
    $id = rand(100,10000);
    $name = $_POST['sname'];
    $grade1 = $_POST['g1'];
    $grade2 = $_POST['g2'];
    $grade3 = $_POST['g3'];
    $grade4 = $_POST['g4'];
$outcome = "";
    $total = ($grade1 + $grade2 + $grade3 + $grade4) / 4;
    if($total >= 7){
        $outcome = "PASS";
    }
    else {
        $outcome ="FAIL";
    }
    $check = "select * from student_db where name = '$name' ";
$result = mysqli_query($con,$check);
$row =mysqli_fetch_array($result);

$board = $row['board'];

    $sql = "insert into grades_db VALUES ('$id','$name','$board','$grade1','$grade2','$grade3','$grade4', '$total', '$outcome')";
    if(mysqli_query($con,$sql)){
        echo "<script type='text/javascript'>alert('Grades Added Succesfully');</script>";
        header("refresh:0.1 url=../index.html");
    }
    else{
        ;
        echo "<script type='text/javascript'>alert('Record Added Succesfully');</script>";
        header("refresh:0.1 url=../index.html");
    }

}
?>