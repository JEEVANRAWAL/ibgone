function displayMessage(message, status) {
    $(".alert").empty();

    if (status) {
        // green message goes here
        $(".alert-success").append(message).fadeIn("slow");
        setTimeout(function() {
            $(".alert-success").fadeOut("slow");
        }, 1000);
    } else {
        console.log("1")
            // red message goes here
        $(".alert-danger").append(message);
        $(".alert-danger").fadeIn("slow");
        setTimeout(function() {
            $(".alert-danger").fadeOut("slow");
        }, 1000);
    }
};

function modalCall(message, btn_message, destination) {
    $('.modal-body').empty();
    $('.modal-body').append(message);
    $('#btn-modal-true').html(btn_message);
    $('#myModal').modal('show');

    $('#btn-modal-true').click(function() {
        location.href = destination;
    });
}

var a = 12;


export { a, displayMessage, modalCall };