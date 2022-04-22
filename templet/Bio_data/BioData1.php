<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="http://localhost/php/IBG/myVendor/bootstrap/bootstrap.js"></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

    <link rel="stylesheet" href="http://localhost/php/IBG/myVendor/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="http://localhost/php/IBG/css/biodata1.css">

    <script>
        var id = <?php echo $_GET['id']; ?>;
    </script>

    <style>
        .imgbx {
            height: 200px;
            width: 150px;
        }

        .imgbx img {
            height: 100%;
            width: 100%;
            background-size: cover;
            inline-size: -webkit-fill-available;
        }

        td {
            font-size: 16;
        }

        table {
            margin-bottom: 3rem;
        }
    </style>

</head>

<body>

    <div class="container ">
        <button type="button" id="download-pdf" class="btn btn-primary">Download PDF</button>
        <div id="download-html" class="shadow p-3 mb-5 bg-white rounded mt-6">
            <table border="0" align="center" cellpadding="5">


                <div class="imgbx m-auto">
                    <img id="profile_pic" alt="profile_pic">
                </div>
                <tr>
                    <td colspan="2">Basic Info
                        <hr />
                    </td>
                </tr>
                <tr>
                    <td width="50%" align="right">Full Name:</td>
                    <td id="name">Name goes here</td>
                </tr>
                <tr>
                    <td align="right">Father's Name:</td>
                    <td id='father_name'>father's name here</td>
                </tr>
                <tr>
                    <td align="right">Date of Birth:</td>
                    <td id='dob'>01<sup>st</sup> November</td>
                </tr>
                <tr>
                    <td align="right">Religion:</td>
                    <td id="Religious">Christainity</td>
                </tr>
                <tr>
                    <td align="right">Nationality:</td>
                    <td id="Nationality">Nepali</td>
                </tr>
                <tr>
                    <td colspan="2">Contact Details
                        <hr />
                    </td>
                </tr>
                <tr>
                    <td align="right" valign="top">Address:</td>
                    <td id="address">putalisadak, kathmandu</td>
                </tr>
                <tr>
                    <td align="right" valign="top">Phone Number:</td>
                    <td id="mobile">9801111111</td>
                </tr>
                <tr>
                    <td align="right">Email Address:</td>
                    <td id="email">name@gmail.com</td>
                </tr>
                <tr>
                    <td colspan="2">Eduction & Knowledge
                        <hr />
                    </td>
                </tr>
                <tr>
                    <td align="right">Language:</td>
                    <td id="language">Nepali, English, Hindi</td>
                </tr>
                <tr>
                    <td align="right">Eduction:</td>
                    <td id="education">B.C.A</td>
                </tr>
                <tr>
                    <td align="right">Other Knowledge:</td>
                    <td id="knowledge">Ms Office, Photoshop, Java, php, html, css, java script, excel</td>
                </tr>
                <tr>
                    <td colspan="2">Work
                        <hr />
                    </td>
                </tr>
                <tr>
                    <td align="right" valign="top">Work Experience:</td>
                    <td id="work_exp">(1)Lab Assistant at A.I.T.S of CE- 1 Year<br />
                        (2)Head Teacher at GTS College - 2 Years & Continue
                    </td>
                </tr>

                <tr>
                    <td colspan="2">Other
                        <hr />
                    </td>
                </tr>
                <tr>
                    <td align="right">Hobbies:</td>
                    <td id="Hobbies">Computer, football, Travelling</td>
                </tr>

                <tr>
                    <td colspan="2">About Me
                        <hr />
                    </td>
                </tr>

                <tr>
                    <td colspan="2" id="About_me">I am a hard working person. Teaching is my passion. Since years I have worked with students to help them sharpen their skills.</td>
                </tr>
            </table>
        </div>
    </div>

    <!-- external jquery file -->
    <script src="http://localhost/php/IBG/myVendor/jquery/jquery.js"></script>
    <!-- external bootstrap file -->
    <script src="http://localhost/php/IBG/myVendor/bootstrap/bootstrap.js"></script>

    <script src="http://localhost/php/IBG/js/bioData.js"></script>
</body>

</html>