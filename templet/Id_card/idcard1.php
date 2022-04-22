

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../css/idcard.css">
    <title>
        Identity Card Design
        | HTML and CSS Code
    </title>

    <script src="http://localhost/php/IBG/myVendor/bootstrap/bootstrap.js"></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

    <link rel="stylesheet" href="http://localhost/php/IBG/myVendor/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="http://localhost/php/IBG/css/idcard.css">

    <script>
        var id = <?php echo $_GET['id']; ?>;
    </script>
</head>

<body>
    <div class="card m-auto">
        <img style="align-self: center" id="profile_pic" alt="profile picture"/>
        <h1 id="name"></h1>

        <table>
            <tr>
                <td><strong>Title</strong></td>
                <td id="title"></td>
            </tr>
            <tr>
                <td><strong>ID no</strong></td>
                <td id="id_no"></td>
            </tr>
            <tr>
                <td><strong>Blood Type</strong></td>
                <td id="blood_type">39</td>
            </tr>
            <tr>
                <td><strong>Issue</strong></td>
                <td id="issue_date">39</td>
            </tr>
            <tr>
                <td><strong>Expires</strong></td>
                <td id="expire_date"></td>
            </tr>
            <tr>
                <td><strong>Organization</strong></td>
                <td id="organization"></td>
            </tr>
        </table>
    </div>
    
    <!-- external jquery file -->
    <script src="http://localhost/php/IBG/myVendor/jquery/jquery.js"></script>
    <!-- external bootstrap file -->
    <script src="http://localhost/php/IBG/myVendor/bootstrap/bootstrap.js"></script>

    <script src="http://localhost/php/IBG/js/idcard.js"></script>
</body>

</html>