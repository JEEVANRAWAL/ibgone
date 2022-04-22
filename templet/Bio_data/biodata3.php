<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bio-data2</title>


    <script src="http://localhost/php/IBG/myVendor/bootstrap/bootstrap.js"></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

    <link rel="stylesheet" href="http://localhost/php/IBG/myVendor/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="http://localhost/php/IBG/css/biodata3.css">

    <script>
        var id = <?php echo $_GET['id']; ?>;
    </script>

    <style>
        #download-pdf{
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
        <div class="second-container">
            <div class="colmn1-info">
                <h3>ABOUT</h3>
                <div class="about">
                    <p id="About_me">Lorem ipsum amet consectetur adipisicing elit. Non beatae error ex facere sequi inventore aliquid eveniet, similique excepturi aspernatur atque eos consequuntur, minima incidunt.</p>
                </div>

                <h3>PERSONAL INFORMATION</h3>

                <div class="pinfo">
                    <div class="label">
                        <label for="">Full Name :</label>
                        <span class="fullname" id="name">Jeevan rawal</span>
                    </div>

                    <div class="label">
                        <label for="">Father Name :</label>
                        <span class="fathername" id="father_name">Min bahadur rawal</span>
                    </div>

                    <div class="label">
                        <label for="">Date Of Birth:</label>
                        <span class="dateofbirth" id="dob">2002/12/11</span>
                    </div>

                    <div class="label">
                        <label for=""> Religion:</label>
                        <span class="religion" id="Religious">Hindu</span>
                    </div>

                    <div class="label">
                        <label for=""> Nationality:</label>
                        <span class="nationality" id="Nationality">Nepali</span>
                    </div>
                </div>

                <h3>EDUCATION & KNOWLEDGE</h3>

                <div class="edu-knowledge">

                    <div class="label">
                        <label for=""> Language:</label>
                        <span class="language" id="language">Nepali</span>
                    </div>

                    <div class="label">
                        <label for=""> Education:</label>
                        <span class="education" id="education">Bachelor</span>
                    </div>

                    <div class="label">
                        <label for=""> Other Knowledge:</label>
                        <span class="other-knowledge" id="knowledge">Programming</span>
                    </div>
                </div>

                <h3>WORK EXPERIENCE</h3>

                <div class="work">

                    <div class="label">
                        <label for=""> Work Experience:</label>
                        <span class="work-experience" id="work_exp"> 4 Years</span>
                    </div>

                </div>
            </div>

            <div class="colmn2-info">
                <div class="imgbx">
                    <img id="profile_pic" alt="profile picture">
                </div>

                <h4>CONTACT DETAILS</h4>

                <div class="conact">
                    <div class="label">
                        <label for=""> Address:</label>
                        <span class="address" id="address"> kailali, nepal</span>
                    </div>

                    <div class="label">
                        <label for="">Phone Number:</label>
                        <span class="phone-number" id="mobile"> 984800000</span>
                    </div>

                    <div class="label">
                        <label for="">Email:</label>
                        <span class="email" id="email"> rawaljeevan123@gmail.com</span>
                    </div>
                </div>

                <h4>OTHER</h4>

                <div class="other">

                    <div class="label">
                        <label for="">Hobbies:</label>
                        <span class="hobbies" id="Hobbies"> Travelling, music</span>
                    </div>

                </div>
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