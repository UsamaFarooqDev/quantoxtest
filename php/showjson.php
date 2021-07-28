<?php
@include('connection.php');

if(isset($_POST['viewjson'])){
    $id = $_POST['id'];

    $sql = "select * from grades_db where id = '$id'";
    $result = mysqli_query($con,$sql);
    
    $dataarray = array();
    while ($row = mysqli_fetch_assoc($result)){
        $dataarray[]=$row;
    }
    echo json_encode($dataarray);
}

?>