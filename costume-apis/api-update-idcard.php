<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization');

include "config.php";

$data = json_decode(file_get_contents("php://input", true));

$name = $data->name;
$title = $data->title;
$id_no = $data->id_no;
$organization = $data->organization;
$blood_type = $data->blood_type;



$issue_date_with_time =  $data->issue;
$issue_date = substr($issue_date_with_time, 0, strpos($issue_date_with_time, 'T'));

$expire_date_with_time =  $data->expire;
$expire_date = substr($expire_date_with_time, 0, strpos($expire_date_with_time, 'T'));


$user_id = $data->user_id;

$sql = "UPDATE id_card 
        SET name = '$name' , title = '$title' , blood_type = '$blood_type', id_no = $id_no,
        organization = '$organization' , issue_date = '$issue_date' , expire_date = '$expire_date'
        WHERE user_id = $user_id";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo json_encode(array("status" => true));
} else {
    echo json_encode(array("status" => false));
}
