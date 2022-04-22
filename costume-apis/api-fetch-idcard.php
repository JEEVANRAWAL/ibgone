<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

include "config.php";

$id = $_GET['id'];

$sql1 = "SELECT name, issue_date, expire_date, id_no, title, organization, blood_type, img_url
    FROM id_card WHERE user_id = $id";

$result = mysqli_query($conn, $sql1);

if ($result) {
    $arr = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($arr);
} else {
    echo json_encode(array("message" => "this is a message", "status" => false));
}
$conn->close();
