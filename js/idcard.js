$(document).ready(function() {

    console.log("i m working fine");

    function fetchSingleUser(userId) {
        $.ajax({
            url: "http://localhost/php/ibg/costume-apis/api-fetch-idcard.php?id=" + userId,
            type: "GET",
            success: function(data) {
                console.log(data);

                $.each(data[0], function(key, value) {
                    if (key == 'img_url') {
                        console.log("the value of img_url : " + "http://localhost/php/ibg/" + value);
                        $("#profile_pic").attr("src", "http://localhost/php/ibg/" + value);
                    }
                    $(`#${key}`).html(value);
                });
            }
        });
    }

    fetchSingleUser(id);

    $('#download-pdf').click(function() {

        console.log('btn clicked');
        var download = document.getElementById('download-html');

        var options = {
            filename: 'my-file.pdf'
        };

        // Create instance of html2pdf class
        var exporter = new html2pdf(download, options);

        // Download the PDF or...
        exporter.getPdf(true).then((pdf) => {
            console.log('pdf file downloaded');
        });
    });

});