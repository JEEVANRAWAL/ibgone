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

$sql = "UPDATE users 
        SET name = '$name' , father_name ='$father_name' , dob = '$date' , religious = '$religious' , 
        nationality = '$nationality' , address = '$address' , mobile = '$mobile' , email ='$email' ,
        education = '$education' , language = '$language' , knowledge = '$knowledge', work_exp = '$work_exp' , 
        hobbies = '$hobbies' , about_me = '$about_me'
        WHERE user_id = $user_id";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo json_encode(array("status" => true));
} else {
    echo json_encode(array("status" => false));
}
