import { displayMessage, modalCall } from "./myLibrary.js";

$(document).ready(function() {
    console.log('hello world');
    $('#create-bio-btn').click(function() {
        console.log('flag');
        if (flag) {
            console.log("the flag is true it means session is created");
            location.href = 'form.php';
        } else {
            console.log("session not created");
            modalCall("You have to login first.", "Login", "login.php");
        }
    });

    $('#create-id-btn').click(function() {
        console.log('flag');
        if (flag) {
            console.log("the flag is true it means session is created");
            location.href = 'id-card-form.php';
        } else {
            console.log("session not created");
            modalCall("You have to login first.", "Login", "login.php");
        }
    });

});