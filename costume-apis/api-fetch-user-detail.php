<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

include "config.php";

$sql = "SELECT * 
    FROM users";
$result = mysqli_query($conn, $sql);

if($result){
    $arr = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($arr);
}else{
    echo json_encode(array("message" => "this is a message", "status" => false));
}

$conn->close();