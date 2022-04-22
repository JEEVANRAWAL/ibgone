<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization');

include "config.php";

$data = json_decode(file_get_contents("php://input", true));

$name = $data->name;
$father_name = $data->father;
$dob = $data->dob;
$date = substr($dob, 0, strpos($dob, 'T'));
$religious = $data->religious;
$nationality = $data->nationality;
$address = $data->address;
$mobile = $data->mobile;
$email = $data->email;
$education = $data->education;
$language = $data->language;
$knowledge = $data->knowledge;
$work_exp = $data->work_exp;
$hobbies = $data->hobbies;
$about_me = $data->about_me;

$user_id = $data->user_id;

$sql = "INSERT INTO users (name, father_name, dob, religious, nationality, address, mobile, email, education, language, knowledge, work_exp, hobbies, about_me, usersTable_user_id) 
        VALUES ('$name', '$father_name', '$date', '$religious', '$nationality', '$address', '$mobile', '$email', '$education', '$language', '$knowledge', '$work_exp', '$hobbies', '$about_me', $user_id)";

if (mysqli_query($conn, $sql)) {
    $sql = "SELECT user_id FROM users WHERE name = '$name' AND
    father_name = '$father_name' AND dob = '$date' AND religious = '$religious' AND address = '$address' AND mobile = '$mobile' AND email = '$email' AND
    education = '$education' AND language = '$language' AND knowledge = '$knowledge' AND work_exp = '$work_exp'AND hobbies = '$hobbies' AND about_me = '$about_me'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        echo json_encode(array("id" => $row['user_id'], "status" => true));
    } else {
        echo json_encode(array("id" => null, "status" => true));
    }
} else {
    echo json_encode(array("message" => "failed to insert new user", "status" => false));
}
