<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

include "config.php";

$id = $_GET['id'];

$sql = "SELECT roleId FROM users_login where userId = $id";


$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if ($row['roleId'] == 1) {
    $sql1 = "SELECT user_id, name, title, organization, id_no, blood_type, issue_date, expire_date
    FROM id_card";

    $result = mysqli_query($conn, $sql1);

    if ($result) {
        $arr = mysqli_fetch_all($result, MYSQLI_ASSOC);
        echo json_encode($arr);
    } else {
        echo json_encode(array("message" => "this is a message", "status" => false));
    }
} else {
    $sql2 = "SELECT user_id, name, title, organization, id_no, blood_type, issue_date, expire_date
    FROM id_card WHERE usersTable_user_id = $id";

    $result = mysqli_query($conn, $sql2);

    if ($result) {
        $arr = mysqli_fetch_all($result, MYSQLI_ASSOC);
        echo json_encode($arr);
    } else {
        echo json_encode(array("message" => "this is a message", "status" => false));
    }
}

$conn->close();
?>
