$(document).ready(function() {

    console.log('apple');

    var field = 1;
    $('#add_field_btn').click(function() {
        console.log('clicked');

        $('.work_exp' + field).after("<div class='work_exp" + (field + 1) + "'><input type='text' name='work_exp" + (field + 1) + "'/></div>");
        field++;
    });
});