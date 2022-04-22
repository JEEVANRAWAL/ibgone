<?php

$conn = mysqli_connect("localhost", "root", "", "ibg") or die("failed to connect to database");

$name = $_POST['name'];
$father_name = $_POST['father'];
$dob =  $_POST['dob'];
$date = substr($dob, 0, strpos($dob, 'T'));
$religious = $_POST['religious'];
$nationality = $_POST['nationality'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$education = $_POST['education'];
$language = $_POST['language'];
$knowledge = $_POST['knowledge'];
$work_exp = $_POST['work_exp'];
$hobbies = $_POST['hobbies'];
$about_me = $_POST['about_me'];
$user_id = $_GET['user_id'];
$profile_img = $_FILES['profile-image'];


$filename = $profile_img['name'];
$currentLocation = $profile_img['tmp_name'];

$image_extension = pathinfo($profile_img['name'], PATHINFO_EXTENSION);

$newPath = "uploaded/" . $filename;
move_uploaded_file($currentLocation, $newPath);









function validate_form($arr)
{
    $error = [];

    // name validataion
    if (empty($arr["name"])) {
        $error += array('name' => 'empty name');
    } else {
        $name = test_input($_POST["name"]);
    }

    // email validataion
    if (empty($arr["email"])) {
        $error += array('email' => 'empty email');
    } else {
        $email = test_input($_POST["email"]);

        $pattern = "/@/";

        if (!preg_match($pattern, $email)) {
            $error += array('email' => 'invalid email');
            $emailErr = "Invalid password format";
        }
    }

    // mobile validation
    if (empty($arr["mobile"])) {
        $error += array('mobile' => 'empty mobile');
    } else {
        $mobile = test_input($arr["mobile"]);
        $mobile_validation = "/^[0-9]{10}$/";

        if (!preg_match($mobile_validation, $arr['mobile'])) {
            $error += array('mobile' => 'invalid mobile');
        }
    }

    foreach ($error as $key => $value) {
        echo $value . "<br>";
    }

    if (empty($error)) {
        return true;
    } else {
        return false;
    }
}

function isEmpty($arr)
{
    $empty = false;
    foreach ($arr as $key => $value) {
        if (empty($value)) {
            echo "<h2>" . $key . " is empty<h2>";
            $empty = true;
            break;
        }
    }

    return $empty;
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (!isEmpty($_POST)) {
    if (validate_form($_POST)) {

        $sql = "UPDATE users 
            SET name = '$name' , father_name ='$father_name' , dob = '$date' , religious = '$religious' , 
            nationality = '$nationality' , address = '$address' , mobile = '$mobile' , email ='$email' ,
            education = '$education' , language = '$language' , knowledge = '$knowledge', work_exp = '$work_exp' , 
            hobbies = '$hobbies' , about_me = '$about_me', img_url = '$newPath'
            WHERE user_id = $user_id";

        echo $sql;
        if (mysqli_query($conn, $sql)) {
            header('Location: http://localhost/php/IBG/table.php');
        } else {
            echo "failed to insert data";
        }
    }
}
