import { displayMessage, modalCall } from "./myLibrary.js";

$(document).ready(function() {
    console.log("javascript attached");

    var profile;

    // $('input[type="file"]').change(function(e) {
    //     profile = e.target.files[0];
    // });
    // // console.log("my file details outside: " + profile['name']);
    // console.log(profile);


    $('#send-user-details').on('click', function(event) {
        event.preventDefault();

        let profile = document.getElementById('user-profile-image').files[0];

        console.log(profile);

        var arr = $('#user-details-form').serializeArray();

        var obj = {};
        for (var i = 0; i < arr.length; i++) {
            obj[arr[i].name] = arr[i].value;
        }

        obj["user_id"] = user_id;

        var json_string = JSON.stringify(obj);

        // console.log(json_string);

        // $.ajax({
        //     url: "http://localhost/php/ibg/costume-apis/api-add-user-details.php",
        //     type: "PUT",
        //     data: json_string,
        //     success: function(data) {
        //         console.log(data);
        //         location.href = "http://localhost/php/ibg/selectTemplates.php?id=" + data.id;
        //         // location.href = "http://localhost/php/ibg/templet/Bio_data/Biodata1.php?id=" + data.id;
        //     }
        // });

        $('input[type="file"]').change(function(e) {
            var geekss = e.target.files[0];
            console.log(geekss);

        });

        // var arr = $('#user-details-form').serializeArray();

        // var obj = {};
        // for (var i = 0; i < arr.length; i++) {
        //     obj[arr[i].name] = arr[i].value;
        // }

        // obj["user_id"] = user_id;

        // var json_string = JSON.stringify(obj);

        // console.log(json_string);

        // // $.ajax({
        // //     url: "http://localhost/php/ibg/costume-apis/api-add-user-details.php",
        // //     type: "PUT",
        // //     data: json_string,
        // //     success: function(data) {
        // //         console.log(data);
        // //         location.href = "http://localhost/php/ibg/selectTemplates.php?id=" + data.id;
        // //         // location.href = "http://localhost/php/ibg/templet/Bio_data/Biodata1.php?id=" + data.id;
        // //     }
        // // });
    });

    $('#update-user-details').on('click', function(event) {
        event.preventDefault();


        if (uid) {
            $.ajax({
                url: "http://localhost/php/ibg/costume-apis/api-update-biodata.php?id=" + uid,
                type: "GET",
                success: function(data) {
                    console.log(data);

                    $('#user-name').val(data[0].name);
                    $('#user-father').val(data[0].father_name);
                    $('#user-religious').val(data[0].Religious);
                    $('#user-nationality').val(data[0].Nationality);
                    $('#user-address').val(data[0].address);
                    $('#user-mobile-no').val(data[0].mobile);
                    $('#user-email').val(data[0].email);
                    $('#user-education').val(data[0].education);
                    $('#user-language').val(data[0].language);
                    $('#user-knowledge').val(data[0].knowledge);
                    $('#user-experience').val(data[0].work_exp);
                    $('#hobbies').val(data[0].Hobbies);
                    $('#about-me').val(data[0].About_me);
                }
            });
        }

        // var arr = $('#user-details-form').serializeArray();

        // var obj = {};
        // for (var i = 0; i < arr.length; i++) {
        //     obj[arr[i].name] = arr[i].value;
        // }

        // obj["user_id"] = uid;

        // var json_string = JSON.stringify(obj);
        // console.log(json_string);

        // $.ajax({
        //     url: "http://localhost/php/ibg/costume-apis/api-update-biodata.php",
        //     type: "PUT",
        //     data: json_string,
        //     success: function(data) {
        //         console.log(data);
        //         location.href = "http://localhost/php/IBG/table.php";
        //     }
        // });
    });

});