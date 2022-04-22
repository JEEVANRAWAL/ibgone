$(document).ready(function() {
    if (uid) {
        $.ajax({
            url: "http://localhost/php/ibg/costume-apis/api-fetch-idcard.php?id=" + uid,
            type: "GET",
            success: function(data) {
                console.log(data);

                $('#user-name').val(data[0].name);
                $('#user-title').val(data[0].title);
                $('#user-organization').val(data[0].organization);
                $('#user-blood_type').val(data[0].blood_type);
                $('#user-id_no').val(data[0].id_no);
            }
        });
    }

    // $('#update-user-idcard').click(function(event) {
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
    //         url: "http://localhost/php/ibg/costume-apis/api-update-idcard.php",
    //         type: "PUT",
    //         data: json_string,
    //         success: function(data) {
    //             console.log(data);
    //             location.href = "http://localhost/php/IBG/table.php";
    //         }
    //     });
    // });

});