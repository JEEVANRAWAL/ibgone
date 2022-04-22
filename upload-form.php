<?php
session_start();
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
$user_id = $_POST['user_id'];
$profile_img = $_FILES['profile-image'];


$filename = $profile_img['name'];
$currentLocation = $profile_img['tmp_name'];

$image_extension = pathinfo($profile_img['name'], PATHINFO_EXTENSION);


// echo "extension of the uploaded file is : " . $image_extension . "<br>";
// echo $filename;

$newPath = "uploaded/" . $filename;

move_uploaded_file($currentLocation, $newPath);


echo 'before unsetting value<pre>';
print_r($_SESSION);
echo '</pre>';

unset($_SESSION['value']);

$_SESSION['value'] = [];
foreach ($_POST as $key => $value) {
    $_SESSION['value'] += [$key => $value];
}

echo 'after unsetting value<pre>';
print_r($_SESSION);
echo '</pre>';





echo 'before unsetting error<pre>';
print_r($_SESSION);
echo '</pre>';

unset($_SESSION['error']);

echo 'after unsetting error<pre>';
print_r($_SESSION);
echo '</pre>';


$_SESSION['error'] = array();


function validate_form($arr)
{

    $flag = false;

    // name validataion
    if (empty($arr["name"])) {
        $_SESSION['error'] += ["name" => 'name is empty'];
        $flag = true;
    } else {
        $name = test_input($_POST["name"]);
    }

    // email validataion
    if (empty($arr["email"])) {
        $flag = true;
        $_SESSION['error'] += ["email" => 'email is empty'];
    } else {
        $email = test_input($_POST["email"]);

        $pattern = "/@/";

        if (!preg_match($pattern, $email)) {
            $_SESSION['error'] += ["email" => 'email is invalid'];
            $flag = true;
        }
    }

    // mobile validation
    if (empty($arr["mobile"])) {
        $_SESSION['error'] += ["mobile" => 'mobile is empty'];
        $flag = true;
    } else {
        $mobile = test_input($arr["mobile"]);
        $mobile_validation = "/^[0-9]{10}$/";

        if (!preg_match($mobile_validation, $arr['mobile'])) {
            $_SESSION['error'] += ["mobile" => 'mobile is invalid'];
            $flag = true;
        }
    }
    return $flag;
}

function isEmpty($arr)
{
    $empty = false;
    foreach ($arr as $key => $value) {
        if (empty($value)) {
            $_SESSION['error'] += [$key => $key . " is empty"];
            $empty = true;
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
    if (!validate_form($_POST)) {
        $sql = "INSERT INTO users (name, father_name, dob, religious, nationality, address, mobile, email, education, language, knowledge, work_exp, hobbies, about_me, usersTable_user_id, img_url) 
                VALUES ('$name', '$father_name', '$date', '$religious', '$nationality', '$address', '$mobile', '$email', '$education', '$language', '$knowledge', '$work_exp', '$hobbies', '$about_me', $user_id, '$newPath')";

        echo "your query is: " . $sql;

        if (mysqli_query($conn, $sql)) {
            $sql = "SELECT user_id FROM users WHERE name = '$name' AND
            father_name = '$father_name' AND dob = '$date' AND religious = '$religious' AND address = '$address' AND mobile = '$mobile' AND email = '$email' AND
            education = '$education' AND language = '$language' AND knowledge = '$knowledge' AND work_exp = '$work_exp'AND hobbies = '$hobbies' AND about_me = '$about_me'";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                $row = mysqli_fetch_assoc($result);
                unset($_SESSION['error']);
                unset($_SESSION['value']);
                header('Location: http://localhost/php/IBG/selectTemplates.php?id=' . $row['user_id']);
            } else {
                echo "filed to fetch id";
            }
        } else {
            echo "failed to insert data";
        }

    } else {
        header('Location: form.php');
    }
} else {
    header('Location: form.php');
}
