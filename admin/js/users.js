import { a, modalCall } from "./myLibrary.js";

$(document).ready(function() {
    $.ajax({
        url: "http://localhost/php/ibg/costume-apis/api-fetch-all-login_users.php",
        type: 'GET',
        success: function(data) {
            console.log(data);

            var tableData = "<thead><tr><th scope='col'>SN</th><th scope='col'>First Name</th><th scope='col'>Last Name</th><th>Email of user</th><th>Role</th><th>Action</th></tr></thead><tbody></tbody></tbody>";

            for (let i = 0; i < data.length; i++) {
                tableData += '<tr>';
                tableData += `<th scope="row">${i+1}</th>`;
                tableData += `<td>${data[i]['fname']}</td>`;
                tableData += `<td>${data[i]['lname']}</td>`;
                tableData += `<td>${data[i]['email']}</td><td>`;

                if (data[i]['roleId'] == 1) {
                    tableData += 'Admin';
                } else {
                    tableData += 'Normal';
                }

                tableData += `</td><td>`;
                if (data[i]['roleId'] != 1) {
                    tableData += `<button  value='${data[i]['userId']}' type="button" class="btn btn-danger delete-user">Delete</button>`;
                }
                tableData += '</td></tr>';
            }

            tableData += '</tbody>';
            $('#users-tbl').html(tableData);
        }
    });

    $(document).on("click", ".delete-user", function() {
        modalCall('Are you sure you want to delete this information?', 'Delete', 'http://localhost/php/ibg/costume-apis/api-delete-login_user.php?deleteId=' + $(this).val());
    });


    // console.log(a);

});