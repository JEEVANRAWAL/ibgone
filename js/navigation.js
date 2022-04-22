import { displayMessage, modalCall } from "./myLibrary.js";

$(document).ready(function() {

    $('#my-details-btn').click(function() {
        if (flag) {
            console.log("the flag is true it means session is created");
            location.href = 'table.php';
        } else {
            console.log("session not created");
            modalCall("You have to login first.", "Login", "login.php");
        }
    });

    $('#btn-logout').click(function() {
        modalCall('Are you sure you wanna logout?', 'Logout', "logout.php");
    });

    $('#login').click(function() {
        location.href = 'login.php';
    });
});