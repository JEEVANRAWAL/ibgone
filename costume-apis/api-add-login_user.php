<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization');

include "config.php";

$data = json_decode(file_get_contents("php://input", true));

$fname = $data->fname;
$lname = $data->lname;
$email = $data->email;
$password = $data->password;

function validate_form($arr)
{
    $error = [];

    //first name validataion
    if (empty($arr->fname)) {
        $error += array('first-name' => 'empty first name');
    }

    // last name validataion
    if (empty($arr->lname)) {
        $error += array('last-name' => 'empty last name');
    }

    // email validataion
    if (empty($arr->email)) {
        $error += array('email' => 'empty email');
    } else {
        $pattern = "/@/";

        if (!preg_match($pattern, $arr->email)) {
            $error += array('email' => 'invalid email');
        }
    }

    // password validataion
    if (empty($arr->password)) {
        $error += array('password' => 'empty password');
    } else {
        // check if e-mail address is well-formed
        $password_validation = "/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/";

        if (!preg_match($password_validation, $arr->password)) {
            $error += array('password' => 'invalid password');
        }
    }

    return $error;
}

$arr = validate_form($data);
if (empty($arr)) {
    $sql = "SELECT email
    FROM users_login
    WHERE email = '$email'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo json_encode(array("message" => "email already used", "status" => false));
    } else {
        $sql = "INSERT INTO users_login (fname, lname, email, password, roleId) 
        VALUES ('{$fname}', '{$lname}','{$email}', '{$password}', 2)";

        if (mysqli_query($conn, $sql)) {
            echo json_encode(array("message" => "new user added successfully", "status" => true));
        } else {
            echo json_encode(array("message" => "failed to insert new user", "status" => false));
        }
    }
} else {
    echo json_encode(array("message" => "failed to insert new user", "status" => false));
}


$conn->close();
