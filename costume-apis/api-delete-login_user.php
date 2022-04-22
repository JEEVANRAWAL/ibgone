<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: DELETE');

include "config.php";

$id = $_GET['deleteId'];

$sql = "DELETE FROM users_login 
    WHERE userId = $id";

    echo $sql;

if(mysqli_query($conn, $sql)){
    echo json_encode(array("message" => "data deleted successfully", "status" => true));
}else{
    echo json_encode(array("message" => "failed to delete data", "status" => false));
}

header('Location: http://localhost/php/IBG/admin/detail.php');


$conn->close();