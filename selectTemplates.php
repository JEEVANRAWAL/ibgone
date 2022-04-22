<?php include "myHeader.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="myVendor/bootstrap/bootstrap.css">

    <style>
        .templateOuterDiv {
            padding: 3rem;
        }

        .templateRow {
            justify-content: space-around;
        }

        .box {
            height: 250px;
            width: 200px;
            margin: 0.5rem 2rem;
            background-size: cover;
            cursor: pointer;
            border: none;
        }
        .box1{
            background-image: url(img/biodata1.png);
        }
        .box2{
            background-image: url(img/biodata2.png);
        }
        .box3{
            background-image: url(img/biodata3.png);
        }
        .box4{
            background-image: url(img/biodata4.png);
        }
    </style>
</head>

<body>

    <div class="container-fluid templateOuterDiv">
        <div class="row d-flex templateRow">

            <button type="button" value="BioData1.php" class="box shadow  rounded box1"></button>
            <button type="button" value="BioData2.php" class="box shadow  rounded box2"></button>
            <button type="button" value="BioData3.php" class="box shadow  rounded box3"></button>
            <button type="button" value="BioData4.php" class="box shadow  rounded box4"></button>
        </div>
    </div>

    <?php include "footer.php"; ?>
    <script src="myVendor/jquery/jquery.js"></script>
    <!-- external bootstrap file -->
    <script src="myVendor/bootstrap/bootstrap.js"></script>

    <script>
        $(document).ready(function(){
            var user_id = <?php echo $_GET['id']; ?>;
            
            $('.box').click(function() {
                var temp_no = $(this).val();
                location.href = "http://localhost/php/ibg/templet/Bio_data/" + temp_no +"?id=" + user_id;
            });
        });
    </script>
</body>

</html>