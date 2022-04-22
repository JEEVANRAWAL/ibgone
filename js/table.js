import { displayMessage, modalCall } from "./myLibrary.js";

$(document).ready(function() {

    $.ajax({
        url: "http://localhost/php/ibg/costume-apis/api-fetch-single-user.php?id=" + user_id,
        type: "GET",
        success: function(data) {

            var tableData = "<thead><tr><th scope='col'>SN</th><th scope='col'>Full Name</th><th scope='col'>Father's Name</th><th>Date of Birth</th><th>Religious</th><th>Nationality</th><th>" +
                'Address</th><th>Phone Number</th><th>Email</th><th>Education</th><th>Language</th><th>Other knowledge</th><th>Work Experience</th><th>Hobbies</th><th>About me</th><th>Action</th><th>Create</th></tr></thead><tbody>';

            for (let i = 0; i < data.length; i++) {
                tableData += '<tr>';
                tableData += `<th scope="row">${i+1}</th>`;
                tableData += `<td>${data[i]['name']}</td>`;
                tableData += `<td>${data[i]['father_name']}</td>`;
                tableData += `<td>${data[i]['dob']}</td>`;
                tableData += `<td>${data[i]['Religious']}</td>`;
                tableData += `<td>${data[i]['Nationality']}</td>`;
                tableData += `<td>${data[i]['address']}</td>`;
                tableData += `<td>${data[i]['mobile']}</td>`;
                tableData += `<td>${data[i]['email']}</td>`;
                tableData += `<td>${data[i]['education']}</td>`;
                tableData += `<td>${data[i]['language']}</td>`;
                tableData += `<td>${data[i]['knowledge']}</td>`;
                tableData += `<td>${data[i]['work_exp']}</td>`;
                tableData += `<td>${data[i]['Hobbies']}</td>`;
                tableData += `<td>${data[i]['About_me']}</td>`;
                tableData += `<td>
                <button  value='${data[i]['user_id']}' type="button" class="btn btn-danger delete-user-detail">Delete</button>
                <button value='${data[i]['user_id']}' type="button" class="btn btn-primary edit-user-detail">Edit</button>
                </td>`;
                tableData += `<td>
                <button  value='${data[i]['user_id']}' type="button" class="btn btn-primary create-biodata">Bio Data</button>
                </td>`;
                tableData += '</tr>';
            }
            tableData += '</tbody>';

            $('#biodata-tbl').html(tableData);
        }
    });

    $.ajax({
        url: "http://localhost/php/ibg/costume-apis/api-fetch-single-idcard.php?id=" + user_id,
        type: "GET",
        success: function(data) {

            var idcard_tableData = "<thead><tr><th>SN</th><th>Name</th><th>Title</th><th>ID number</th><th>Blood Type</th><th>Issue Date</th><th>" +
                'Expire Date</th><th>Organization</th><th>Action</th><th>Create</th></tr></thead><tbody>';

            for (let i = 0; i < data.length; i++) {
                idcard_tableData += '<tr>';
                idcard_tableData += `<th scope="row">${i+1}</th>`;
                idcard_tableData += `<td>${data[i]['name']}</td>`;
                idcard_tableData += `<td>${data[i]['title']}</td>`;
                idcard_tableData += `<td>${data[i]['id_no']}</td>`;
                idcard_tableData += `<td>${data[i]['blood_type']}</td>`;
                idcard_tableData += `<td>${data[i]['issue_date']}</td>`;
                idcard_tableData += `<td>${data[i]['expire_date']}</td>`;
                idcard_tableData += `<td>${data[i]['organization']}</td>`;
                idcard_tableData += `<td>
                <button  value='${data[i]['user_id']}' type="button" class="btn btn-danger delete-idcard">Delete</button>
                <button value='${data[i]['user_id']}' type="button" class="btn btn-primary edit-idcard">Edit</button>
                </td>`;
                idcard_tableData += `<td>
                <button value='${data[i]['user_id']}' type="button" class="btn btn-primary create-idcard">ID Card</button>
                </td>`;
                idcard_tableData += '</tr>';
            }
            idcard_tableData += '</tbody>';

            $('#idcard-tbl').html(idcard_tableData);
        }
    });

    // biodata delete and edit btn
    $(document).on("click", ".delete-user-detail", function() {
        var app = $(this).val();
        modalCall('Are you sure you want to delete this information?', 'Delete', 'http://localhost/php/ibg/costume-apis/api-delete-user-detail.php?deleteId=' + $(this).val());
    });

    $(document).on("click", ".edit-user-detail", function() {
        modalCall('Edit your information?', 'Edit', "http://localhost/php/ibg/update.php?user_id=" + $(this).val());
    });


    // idcard delete and edit btn
    $(document).on("click", ".delete-idcard", function() {
        var app = $(this).val();
        modalCall('Are you sure you want to delete this information?', 'Delete', 'http://localhost/php/ibg/costume-apis/api-delete-idcard.php?deleteId=' + $(this).val());
    });

    $(document).on("click", ".edit-idcard", function() {
        modalCall('Edit your information?', 'Edit', "http://localhost/php/ibg/update-idcard-form.php?user_id=" + $(this).val());
    });

    // create idcard and biodata btn
    $(document).on("click", ".create-biodata", function() {
        modalCall('Create Bio Data of select information?', 'Create', "http://localhost/php/ibg/selectTemplates.php?id=" + $(this).val());
    });

    $(document).on("click", ".create-idcard", function() {
        modalCall('Create Id card of select information?', 'Create', "http://localhost/php/ibg/selectidTemplates.php?id=" + $(this).val());
    });


});