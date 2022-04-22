<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bio-tamp3</title>

    <script src="http://localhost/php/IBG/myVendor/bootstrap/bootstrap.js"></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

    <link rel="stylesheet" href="http://localhost/php/IBG/myVendor/bootstrap/bootstrap.css">

    <link rel="stylesheet" href="http://localhost/php/IBG/css/biodata4.css">


    <script>
        var id = <?php echo $_GET['id']; ?>;
    </script>

    <style>
        #download-pdf {
            border: none;
            padding: 10px;
            background: blue;
            color: white;
        }
    </style>
</head>

<body>

    <button type="button" id="download-pdf">Download PDF</button>
    <div class="container" id="download-html">
        <section class="sidebar">
            <div class="small-con1">
                <span class="name" id="name">Jeevan rawal</span>
                <p id="About_me"></p>
            </div>

            <div class="small-con2">
                <span>i am looking for better job. which can uplift my living standard and help me to built better future.</span>
            </div>

            <div class="small-con3">
                <span>My Education</span>
            </div>

            <div class="small-con4">
                <span>Details of my family.</span>
            </div>

            <div class="small-con5">
                <span>Here are my contact details</span>
            </div>

        </section>

        <div class="about-myself">
            <h3>ABOUT MYSELF</h3>
        </div>

        <div class="EDUCATION">
            <h3>EDUCATION</h3>
        </div>

        <div class="FAMILY-DETAILS">
            <h3>FAMILY DETAILS</h3>
        </div>

        <div class="CONTACT-DETAILS">
            <h3>CONTACT DETAILS</h3>
        </div>

        <div class="imgbx">
            <img id="profile_pic" alt="profile picture" src="user2.jpg">
        </div>

        <h2>BIO-DATA</h2>

        <div class="aboutmyself-content">
            <div class="label">
                <label for="">Date Of Birth:</label>
                <span id="dob">2058/08/25</span>
            </div>

            <div class="label">
                <label for="">Religion:</label>
                <span id="Religious">Hindu</span>
            </div>

            <div class="label">
                <label for="">Nationality:</label>
                <span id="Nationality">Nepali</span>
            </div>

        </div>

        <div class="education-content">
            <div class="label">
                <label for="">Language:</label>
                <span id="language">Nepali</span>
            </div>

            <div class="label">
                <label for="">Education:</label>
                <span id="education">bachelor</span>
            </div>

            <div class="label">
                <label for="">Other Knowledge:</label>
                <span id="knowledge">programmer</span>
            </div>
        </div>

        <div class="family-content">
            <div class="label1">
                <label for="">Father Name:</label>
                <span id="father_name">XYZ XYZ</span>
            </div>

            <div class="label1">
                <label for="">Nationality:</label>
                <span id="Nationality">Nepali</span>
            </div>

            <div class="label1">
                <label for="">Religion:</label>
                <span id="Religious">Hindu</span>
            </div>
        </div>

        <div class="contact-content">
            <div class="label">
                <label for="">Address:</label>
                <span id="address">kathmandu, nepal</span>
            </div>

            <div class="label">
                <label for="">Phone:</label>
                <span id="mobile">9863648578</span>
            </div>

            <div class="label">
                <label for="">Email:</label>
                <span id="email">rawaljeevan123@gmail.com</span>
            </div>
        </div>
    </div>


    <!-- external jquery file -->
    <script src="http://localhost/php/IBG/myVendor/jquery/jquery.js"></script>
    <!-- external bootstrap file -->
    <script src="http://localhost/php/IBG/myVendor/bootstrap/bootstrap.js"></script>

    <script src="http://localhost/php/IBG/js/biodata.js"></script>

</body>

</html>