<?php

$conn = mysqli_connect("localhost", "root", "", "ibg") or die("failed to connect to database");


$name = $_POST['name'];
$title = $_POST['title'];
$id_no = $_POST['id_no'];
$organization = $_POST['organization'];
$blood_type = $_POST['blood_type'];

$issue_date_with_time =  $_POST['issue'];
$issue_date = substr($issue_date_with_time, 0, strpos($issue_date_with_time, 'T'));

$expire_date_with_time =  $_POST['expire'];
$expire_date = substr($expire_date_with_time, 0, strpos($expire_date_with_time, 'T'));


$user_id = $_GET['user_id'];
$profile_img = $_FILES['profile-image'];


$filename = $profile_img['name'];
$currentLocation = $profile_img['tmp_name'];

$image_extension = pathinfo($profile_img['name'], PATHINFO_EXTENSION);  //for validation of jpg type extension


$newPath ="uploaded/". $filename;

echo "<br>new path is : ".$newPath."<br>";

move_uploaded_file($currentLocation, $newPath);


$sql = "UPDATE id_card 
SET name = '$name', title = '$title' , id_no = '$id_no',
blood_type = '$blood_type', organization = '$organization',
issue_date = '$issue_date',expire_date = '$expire_date', 
img_url = '$newPath'
WHERE user_id = $user_id";

echo "your query is: ".$sql;
if (mysqli_query($conn, $sql)) {
    header('Location: http://localhost/php/IBG/table.php');
} else {
    echo "failed to insert data";
}
?>