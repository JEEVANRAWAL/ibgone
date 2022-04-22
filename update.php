<?php include "myHeader.php";

if($_GET){
    echo "<script>
           var uid= " . $_GET['user_id'] . ";
        </script>";
}
?>


<div class="container-fluid">
    <div class="container shadow-lg p-3 mb-5 mt-5 bg-white rounded">
        <form id="user-details-form" action="update-form.php?user_id=<?php echo $_GET['user_id'];?>" method="post" enctype="multipart/form-data">

            <!-- basic information -->
            <div class="form-group row">
                <label for="user-name" class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="user-name" placeholder="First Name">
                </div>
            </div>
            <div class="form-group row">
                <label for="user-father" class="col-sm-2 col-form-label">Father's Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="father" id="user-father" placeholder="Father's Name">
                </div>
            </div>
            <div class="form-group row">
                <label for="user-dob" class="col-sm-2 col-form-label">DOB</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="dob" id="user-dob" placeholder="Date of Birth">
                </div>
            </div>
            <div class="form-group row">
                <label for="user-religious" class="col-sm-2 col-form-label">Religious</label>
                <div class="col-sm-10">
                    <select class="form-control" name="religious" id="user-regigious">
                        <option value="Hinduism">Hinduism</option>
                        <option value="Buddhism">Buddhism</option>
                        <option value="Christianity">Christianity</option>
                        <option value="Islam">Islam</option>
                        <option value="Kirat">Kirat</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="user-nationality" class="col-sm-2 col-form-label">Nationality</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nationality" id="user-nationality" placeholder="Nepali">
                </div>
            </div>

            <!-- contact details -->
            <div class="form-group row">
                <label for="user-address" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="address" id="user-address" placeholder="kathmandu, Nepal">
                </div>
            </div>
            <div class=" form-group row ">
                <label for="user-mobile-no " class="col-sm-2 col-form-label ">Phone Number</label>
                <div class="col-sm-10 ">
                    <input type="number" class="form-control " name="mobile" id="user-mobile-no" placeholder="9801111111">
                </div>
            </div>
            <div class="form-group row ">
                <label for="user-email " class="col-sm-2 col-form-label ">Email Address</label>
                <div class="col-sm-10 ">
                    <input type="text " class="form-control " name="email" id="user-email" placeholder="abc@gmail.com">
                </div>
            </div>

            <!-- educational -->
            <div class="form-group row ">
                <label for="user-education " class="col-sm-2 col-form-label ">Education</label>
                <div class="col-sm-10 ">
                    <input type="text " class="form-control " name="education" id="user-education" placeholder="S.L.C/S.E.E/N.E.B">
                </div>
            </div>
            <div class="form-group row ">
                <label for="user-language " class="col-sm-2 col-form-label ">Language</label>
                <div class="col-sm-10 ">
                    <input type="text " class="form-control " name="language" id="user-language" placeholder="English, Neplai">
                </div>
            </div>
            <div class="form-group row ">
                <label for="user-knowledge " class="col-sm-2 col-form-label ">Other knowledge</label>
                <div class="col-sm-10 ">
                    <input type="text " class="form-control " name="knowledge" id="user-knowledge" placeholder="ms-word, excel, photoshop">
                </div>
            </div>

            <!-- work -->
            <div class="form-group row ">
                <label for="user-experience " class="col-sm-2 col-form-label ">Work Experience</label>
                <div class="col-sm-10 ">
                    <input type="text " class="form-control " name="work_exp" id="user-experience" placeholder="1. one year at abcd">
                </div>
            </div>

            <!-- Other -->
            <div class="form-group row ">
                <label for="user-hobbies " class="col-sm-2 col-form-label ">Hobbies</label>
                <div class="col-sm-10 ">
                    <input type="text " class="form-control " name="hobbies" id="hobbies" placeholder="football, basketball, kabaddi">
                </div>
            </div>
            <div class="form-group row ">
                <label for="user-about-me " class="col-sm-2 col-form-label ">About Me</label>
                <div class="col-sm-10 ">
                    <input type="text" class="form-control " name="about_me" id="about-me" placeholder="I am hard worker">
                </div>
            </div>

            
            <div class="form-group row ">
                <label for="user-profile-image " class="col-sm-2 col-form-label ">Profile Image</label>
                <div class="col-sm-10 ">
                    <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'];?>">
                    <input type="file" class="form-control " name="profile-image" id="user-profile-image">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>

        </form>
    </div>
</div>

<?php include "footer.php"; ?>


<!-- costume external js file -->
<script type="module" src="js/update.js"></script>