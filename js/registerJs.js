import { displayMessage } from "./myLibrary.js";

$(document).ready(function() {

    console.log("register js attached")

    // fetching users
    function loadUsers() {
        $('#dataTable').html("");
        $('#dataTable').append('<thead><tr><th>User Id</th><th>First Name</th><th>Last Name</th>' +
            '<th>Email</th><th>Role</th><th>Delete</th></tr></thead>');

        $.ajax({
            url: "http://localhost/php/ibg/costume-apis/api-fetch-all-login_users.php",
            type: "GET",
            success: function(data) {
                $.each(data, function(key, value) {
                    $('#dataTable').append('<tr><td>' +
                        value['userId'] + '</td><td>' +
                        value['fname'] + '</td><td>' +
                        value['lname'] + '</td><td>' +
                        value['email'] + '</td><td>' +
                        value['roleName'] + '</td>' +
                        '<td><button type="button" class="btn btn-danger" id="user-delete" value="' + value['userId'] + '">Delete</button></td>' +
                        '</tr>');
                })
            }
        });
    }

    // end of my functions

    loadUsers();

    // logout confirmation
    $('#logout').click(function(event) {
        // $(location).prop('href', '../login.php');
        location.href = 'logout.php';
    })

    // registering new user
    $("#register").on("click", function(event) {
        event.preventDefault();

        var arr = $('#user-form').serializeArray();

        var obj = {};
        for (var i = 0; i < arr.length; i++) {
            obj[arr[i].name] = arr[i].value;
        }

        let json_string = JSON.stringify(obj);
        // console.log(json_string);

        // checking passwords
        if (obj.password === obj.repassword) {
            console.log("both password are correct");

            // inserting to database
            $.ajax({
                url: "http://localhost/php/ibg/costume-apis/api-add-login_user.php",
                type: "PUT",
                data: json_string,
                success: function(data) {
                    console.log(data);
                    displayMessage(data.message, data.status);
                    $('#user-form').trigger('reset');
                }
            });

        } else {
            console.log("password doesnot matched");
        }

    });

    // delete code here
    $(document).on('click', '#user-delete', function(event) {
        if (confirm("Do you really want to delet the record?")) {
            $.ajax({
                url: "http://localhost/php/ibg/costume-apis/api-delete-login_user.php?deleteId=" + $(this).val(),
                type: "DELETE",
                success: function(data) {
                    loadUsers();
                    console.log("inside delete");
                }
            });
        }
    })


});