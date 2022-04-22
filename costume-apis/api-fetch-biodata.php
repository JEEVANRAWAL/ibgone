<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

include "config.php";

$id = $_GET['id'];

$sql1 = "SELECT About_me, Hobbies, Nationality, Religious, address,
    dob, education, email, father_name, knowledge, language, mobile, name, work_exp, img_url
    FROM users WHERE user_id = $id";

$result = mysqli_query($conn, $sql1);

if ($result) {
    $arr = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($arr);
} else {
    echo json_encode(array("message" => "this is a message", "status" => false));
}
$conn->close();
