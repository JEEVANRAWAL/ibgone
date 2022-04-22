<?php

use LDAP\Result;

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

include "config.php";

$sql1 = "SELECT count(userId) AS users_number
    FROM users_login";
$result1 = mysqli_query($conn, $sql1);

$sql2 = "SELECT count(user_id) AS bio_number
    FROM users";
$result2 = mysqli_query($conn, $sql2);

$sql3 = "SELECT count(user_id) AS id_number
    FROM id_card";
$result3 = mysqli_query($conn, $sql3);

if($result1 && $result2 && $result3){
    $row1 = mysqli_fetch_assoc($result1);
    $row2 = mysqli_fetch_assoc($result2);
    $row3 = mysqli_fetch_assoc($result3);

    $array = array($row1, $row2, $row3);
    echo json_encode($array);

}else{
    echo json_encode(array("message" => "this is a message", "status" => false));
}

$conn->close();