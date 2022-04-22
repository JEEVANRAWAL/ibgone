<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID-CARD</title>
    <link rel="stylesheet" href="http://localhost/php/IBG/css/id-card1.css">

    
    <script>
        var id = <?php echo $_GET['id']; ?>;
    </script>
</head>

<body>
    <div id="container">
        <div class="info-column">
            <div class="label">
                <label for="">Name:</label>
                <span class="title" id="name">Jeevan rawal</span>
            </div>

            <div class="label">
                <label for="">Title:</label>
                <span class="title" id="title">Director</span>
            </div>

            <div class="label">
                <label for="">ID no:</label>
                <span class="title" id="id_no">3455678</span>
            </div>

            <div class="label">
                <label for="">Blood Type:</label>
                <span class="title" id="blood_type">AB+</span>
            </div>

            <div class="label">
                <label for="">Issue:</label>
                <span class="title" id="issue_date">2078/12/01</span>
            </div>

            <div class="label">
                <label for="">Expires:</label>
                <span class="title" id="expire_date">2081/01/01</span>
            </div>

            <div class="label">
                <label for="">Organization:</label>
                <span class="title" id="organization">xyz organ</span>
            </div>
        </div>

        <div class="imgbx">
            <img id="profile_pic" alt="profile picture">
        </div>

        <div class="header">
            <h3>ID - CARD</h3>
        </div>
    </div>


    
    <!-- external jquery file -->
    <script src="http://localhost/php/IBG/myVendor/jquery/jquery.js"></script>
    <!-- external bootstrap file -->
    <script src="http://localhost/php/IBG/myVendor/bootstrap/bootstrap.js"></script>

    <script src="http://localhost/php/IBG/js/idcard.js"></script>
</body>

</html>