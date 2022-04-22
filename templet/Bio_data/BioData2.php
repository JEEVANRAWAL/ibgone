<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BioTemp</title>

    <script src="http://localhost/php/IBG/myVendor/bootstrap/bootstrap.js"></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

    <link rel="stylesheet" href="http://localhost/php/IBG/myVendor/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="http://localhost/php/IBG/css/biodata2.css">

    
    <script>
        var id = <?php echo $_GET['id']; ?>;
    </script>
</head>

<body>
    <div class="container">
        <button type="button" id="download-pdf" class="btn btn-primary mt-4 mb-5">Download PDF</button>

        <div id="download-html" class="frame shadow mb-4">
            <div class="row">

                <div class="col second-con">
                    <div class="row">
                        <h1>BIO-DATA</h1>
                    </div>

                    <div class="row">
                        <div class="pdetails">
                            <h4>Personal Information</h4>
                            <div class="plabel">
                                <label for="name">Full Name :</label>
                                <span id="name">Jeevan</span>
                            </div>

                            <div class="plabel">
                                <label for="father_name">Father Name:</label>
                                <span id="father_name"></span>
                            </div>

                            <div class="plabel">
                                <label for="dob">Date Of Birth:</label>
                                <span id="dob"></span>
                            </div>


                            <div class="plabel">
                                <label for="religion">Riligion:</label>
                                <span id="Religious"></span>
                            </div>

                            <div class="plabel">
                                <label for="Nationality">Nationality:</label>
                                <span id="Nationality"></span>
                            </div>

                        </div>


                        <div class="contac-details">
                            <h4>Contact Details</h4>
                            <div class="plabel">
                                <label for="address">Address :</label>
                                <span id="address"></span>
                            </div>

                            <div class="plabel">
                                <label for="mobile">Phone Number :</label>
                                <span id="mobile"></span>
                            </div>

                            <div class="plabel">
                                <label for="email">Email Address:</label>
                                <span id="email"></span>
                            </div>

                        </div>


                        <div class="edu-knowledge">

                            <h4>Education & knowledge</h4>
                            <div class="plabel">
                                <label for="language">Language:</label>
                                <span id="language"></span>
                            </div>

                            <div class="plabel">
                                <label for="education">Education:</label>
                                <span id="education"></span>
                            </div>

                            <div class="plabel">
                                <label for="knowledge">Other Knowledge:</label>
                                <span id="knowledge"></span>
                            </div>

                        </div>


                        <div class="work">

                            <h4>Work</h4>
                            <div class="plabel">
                                <label for="work">Work Experience:</label>
                                <span id="work_exp"></span>
                            </div>

                        </div>


                        <div class="other">
                            <h4>Other</h4>

                            <div class="plabel">
                                <label for="hobbies">Hobbies:</label>
                                <span id="Hobbies"></span>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-5 third-con">
                    <div class="row p-3">
                        <div class="imgbx ">
                            <img id="profile_pic" alt="profile picture" src="../../img/jeevan.jpg">
                        </div>
                    </div>
                    <div class="row">
                        <h5 style="color: white;">About Me</h5>
                        <div class="about-me">
                            <p id="About_me">
                                hello i am jeevan rawal from kailali. Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio error omnis officia consequuntur! Tempore architecto rerum excepturi beatae! Excepturi cum vero architecto. Rem aliquam corporis obcaecati sed suscipit,
                                harum animi? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis laborum odio magni facilis quasi, aspernatur velit tempora quod magnam tenetur officia nihil, sed assumenda perspiciatis quos. Harum dolorum
                                suscipit ex.
                            </p>
                        </div>
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