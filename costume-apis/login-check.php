<?php

include "config.php";

$email = $data->email;
$password = $data->password;

$sql = "SELECT * FROM users_login WHERE email='$email' AND password='$password'";

$result = mysqli_query($conn, $sql) or die("query error");

$count = mysqli_num_rows($result);

if ($count > 0) {
    $row = mysqli_fetch_assoc($result);
} else {
}
