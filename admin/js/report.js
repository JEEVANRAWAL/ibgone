$(document).ready(function() {
    $.ajax({
        url: "http://localhost/php/ibg/costume-apis/api-no-of-users.php",
        type: 'GET',
        success: function(data) {
            console.log(data);

            var tableData = "<thead><tr><th scope='col'>Number of users</th><th scope='col'>Number of Bio data created</th><th>Number of ID card created</th></tr></thead><tbody></tbody></tbody>";
            tableData += `<tr><td>${data[0]['users_number']}</td><td>${data[1]['bio_number']}</td><td>${data[2]['id_number']}</td></tr>`
            tableData += '</tbody>';

            $('#reprot-tbl').html(tableData);
        }
    });
});