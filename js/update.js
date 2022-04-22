$(document).ready(function() {
    if (uid) {
        $.ajax({
            url: "http://localhost/php/ibg/costume-apis/api-fetch-biodata.php?id=" + uid,
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

    // $('#update-user-details').click(function(event) {
    //     event.preventDefault();

    //     var arr = $('#user-details-form').serializeArray();

    //     var obj = {};
    //     for (var i = 0; i < arr.length; i++) {
    //         obj[arr[i].name] = arr[i].value;
    //     }

    //     obj["user_id"] = uid;

    //     var json_string = JSON.stringify(obj);
    //     console.log(json_string);

    //     $.ajax({
    //         url: "http://localhost/php/ibg/costume-apis/api-update-biodata.php",
    //         type: "PUT",
    //         data: json_string,
    //         success: function(data) {
    //             console.log(data);
    //             location.href = "http://localhost/php/IBG/table.php";
    //         }
    //     });
    // });

});