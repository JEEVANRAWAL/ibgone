<?php

$conn = mysqli_connect( "localhost", "root", "", "ibg") or die("failed to connect to database");


$name = $_POST['name'];
$title = $_POST['title'];
$id_no = $_POST['id-no'];
$organization = $_POST['organization'];
$blood_type = $_POST['blood_type'];

$issue_date_with_time =  $_POST['issue'];
$issue_date = substr($issue_date_with_time, 0, strpos($issue_date_with_time, 'T'));

$expire_date_with_time =  $_POST['expire'];
$expire_date = substr($expire_date_with_time, 0, strpos($expire_date_with_time, 'T'));


$user_id = $_POST['user_id'];
$profile_img = $_FILES['profile-image'];


$filename = $profile_img['name'];
$currentLocation = $profile_img['tmp_name'];

$image_extension = pathinfo($profile_img['name'], PATHINFO_EXTENSION);  //for validation of jpg type extension


// echo "extension of the uploaded file is : " . $image_extension . "<br>";
// echo $filename;

$newPath ="uploaded/". $filename;

echo "<br>new path is : ".$newPath."<br>";

move_uploaded_file($currentLocation, $newPath);


$sql = "INSERT INTO id_card (name, title, id_no, blood_type, organization, issue_date, expire_date, usersTable_user_id, img_url) 
        VALUES ('$name', '$title', $id_no, '$blood_type', '$organization', '$issue_date', '$expire_date', $user_id, '$newPath')";

echo "your query is: ".$sql;

if (mysqli_query($conn, $sql)) {
    $sql = "SELECT user_id FROM id_card WHERE name = '$name' AND
                title = '$title' AND blood_type = '$blood_type' AND organization = '$organization' AND issue_date = '$issue_date' AND expire_date = '$expire_date' AND img_url = '$newPath'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        header('Location: http://localhost/php/IBG/selectIdTemplates.php?id=' . $row['user_id']);
    } else {
        echo "filed to fetch id";
    }
} else {
    echo "failed to insert data";
}
