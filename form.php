<?php include "myHeader.php"; ?>

<div class="container-fluid">
    <div class="container shadow-lg p-3 mb-5 mt-5 bg-white rounded">


        <form action="upload-form.php" method="post" id="user-details-form" enctype="multipart/form-data">
            <!-- basic information -->
            <div class="form-group row mt-2 mb-1">
                <label for="user-name" class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="user-name"
                    value="<?php
                        if (isset( $_SESSION['value']['name'])) {
                            echo $_SESSION['value']['name'];
                        }
                        ?>" placeholder="First Name" >
                    <small class="text-danger">
                        <?php
                        if (isset( $_SESSION['error']['name'])) {
                            echo $_SESSION['error']['name'];
                        }
                        ?>
                    </small>
                </div>
            </div>
            <div class="form-group row mt-2 mb-1">
                <label for="user-father" class="col-sm-2 col-form-label">Father's Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="father" id="user-father" value="<?php
                        if (isset( $_SESSION['value']['father'])) {
                            echo $_SESSION['value']['father'];
                        }
                        ?>" placeholder="Father's Name" >
                    <small class="text-danger">
                    <small class="text-danger">
                        <?php
                        if (isset($_SESSION['error']['father'])) {
                            echo $_SESSION['error']['father'];
                        }
                        ?>
                    </small>
                    </small>
                </div>
            </div>
            <div class="form-group row mt-2 mb-1">
                <label for="user-dob" class="col-sm-2 col-form-label">DOB</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="dob" id="user-dob" value="<?php
                        if (isset( $_SESSION['value']['dob'])) {
                            echo $_SESSION['value']['dob'];
                        }
                        ?>" placeholder="Date of Birth" required>
                    <small class="text-danger">
                        <?php
                        if (isset($_SESSION['error']['dob'])) {
                            echo $_SESSION['error']['dob'];
                        }
                        ?>
                    </small>
                </div>
            </div>
            <div class="form-group row mt-2 mb-1">
                <label for="user-religious" class="col-sm-2 col-form-label">Religious</label>
                <div class="col-sm-10">
                    <select class="form-control" name="religious" id="user-religious" 
                    <?php
                        if (isset($_SESSION['error']['religious'])) {
                            echo $_SESSION['error']['religious'];
                        }
                        ?>
                    required>
                        <option value="Hinduism">Hinduism</option>
                        <option value="Buddhism">Buddhism</option>
                        <option value="Christianity">Christianity</option>
                        <option value="Islam">Islam</option>
                        <option value="Kirat">Kirat</option>
                    </select>

                </div>
            </div>
            <div class="form-group row mt-2 mb-1">
                <label for="user-nationality" class="col-sm-2 col-form-label">Nationality</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nationality" id="user-nationality"
                    value="<?php
                        if (isset( $_SESSION['value']['nationality'])) {
                            echo $_SESSION['value']['nationality'];
                        }
                        ?>" placeholder="Nepali" required>
                    <small class="text-danger">
                        <?php
                        if (isset($_SESSION['error']['nationality'])) {
                            echo $_SESSION['error']['nationality'];
                        }
                        ?>
                    </small>
                </div>
            </div>

            <!-- contact details -->
            <div class="form-group row mt-2 mb-1">
                <label for="user-address" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="address" id="user-address" 
                    value="<?php
                        if (isset( $_SESSION['value']['address'])) {
                            echo $_SESSION['value']['address'];
                        }
                        ?>" placeholder="kathmandu, Nepal" required>
                    <small class="text-danger">
                        <?php
                        if (isset($_SESSION['error']['address'])) {
                            echo $_SESSION['error']['address'];
                        }
                        ?>
                    </small>
                </div>
            </div>
            <div class=" form-group row mt-2 mb-1">
                <label for="user-mobile-no " class="col-sm-2 col-form-label ">Phone Number</label>
                <div class="col-sm-10 ">
                    <input type="number" class="form-control " name="mobile" id="user-mobile-no"
                    value="<?php
                        if (isset( $_SESSION['value']['mobile'])) {
                            echo $_SESSION['value']['mobile'];
                        }
                        ?>" placeholder="9801111111" required>
                    <small class="text-danger">
                        <?php
                        if (isset($_SESSION['error']['mobile'])) {
                            echo $_SESSION['error']['mobile'];
                        }
                        ?>
                    </small>
                </div>
            </div>
            <div class="form-group row mt-2 mb-1">
                <label for="user-email " class="col-sm-2 col-form-label ">Email Address</label>
                <div class="col-sm-10 ">
                    <input type="text " class="form-control " name="email" id="user-email"value="<?php
                        if (isset( $_SESSION['value']['email'])) {
                            echo $_SESSION['value']['email'];
                        }
                        ?>"
                     placeholder="abc@gmail.com" >
                    <small class="text-danger">
                        <?php
                        if (isset($_SESSION['error']['email'])) {
                            echo $_SESSION['error']['email'];
                        }
                        ?>
                    </small>
                </div>
            </div>

            <!-- educational -->
            <div class="form-group row mt-2 mb-1">
                <label for="user-education " class="col-sm-2 col-form-label ">Education</label>
                <div class="col-sm-10 ">
                    <input type="text " class="form-control " name="education" id="user-education"
                    value="<?php
                        if (isset( $_SESSION['value']['education'])) {
                            echo $_SESSION['value']['education'];
                        }
                        ?>" placeholder="S.L.C/S.E.E/N.E.B" required>
                    <small class="text-danger">
                        <?php
                        if (isset($_SESSION['error']['education'])) {
                            echo $_SESSION['error']['education'];
                        }
                        ?>
                    </small>
                </div>
            </div>
            <div class="form-group row mt-2 mb-1">
                <label for="user-language " class="col-sm-2 col-form-label ">Language</label>
                <div class="col-sm-10 ">
                    <input type="text " class="form-control " name="language" id="user-language"
                    value="<?php
                        if (isset( $_SESSION['value']['language'])) {
                            echo $_SESSION['value']['language'];
                        }
                        ?>" placeholder="English, Neplai" required>
                    <small class="text-danger">
                        <?php
                        if (isset($_SESSION['error']['language'])) {
                            echo $_SESSION['error']['language'];
                        }
                        ?>
                    </small>
                </div>
            </div>
            <div class="form-group row mt-2 mb-1">
                <label for="user-knowledge " class="col-sm-2 col-form-label ">Other knowledge</label>
                <div class="col-sm-10 ">
                    <input type="text " class="form-control " name="knowledge" id="user-knowledge"
                    value="<?php
                        if (isset( $_SESSION['value']['knowledge'])) {
                            echo $_SESSION['value']['knowledge'];
                        }
                        ?>" placeholder="ms-word, excel, photoshop" required>
                    <small class="text-danger">
                        <?php
                        if (isset($_SESSION['error']['knowledge'])) {
                            echo $_SESSION['error']['knowledge'];
                        }
                        ?>
                    </small>
                </div>
            </div>

            <!-- work -->
            <div class="form-group row mt-2 mb-1">
                <label for="user-experience " class="col-sm-2 col-form-label ">Work Experience</label>
                <div class="col-sm-10 ">
                    <input type="text " class="form-control " name="work_exp" id="user-experience"
                    value="<?php
                        if (isset( $_SESSION['value']['work_exp'])) {
                            echo $_SESSION['value']['work_exp'];
                        }
                        ?>" placeholder="one year at abcd" required>
                    <small class="text-danger">
                        <?php
                        if (isset($_SESSION['error']['work_exp'])) {
                            echo $_SESSION['error']['work_exp'];
                        }
                        ?>
                    </small>
                </div>
            </div>

            <!-- Other -->
            <div class="form-group row mt-2 mb-1">
                <label for="user-hobbies " class="col-sm-2 col-form-label ">Hobbies</label>
                <div class="col-sm-10 ">
                    <input type="text " class="form-control " name="hobbies" id="hobbies"
                    value="<?php
                        if (isset( $_SESSION['value']['hobbies'])) {
                            echo $_SESSION['value']['hobbies'];
                        }
                        ?>" placeholder="football, basketball, kabaddi" required>
                </div>
            </div>
            <div class="form-group row mt-2 mb-1">
                <label for="user-about-me " class="col-sm-2 col-form-label ">About Me</label>
                <div class="col-sm-10 ">
                    <input type="text" class="form-control " name="about_me" id="about-me"
                    value="<?php
                        if (isset( $_SESSION['value']['about_me'])) {
                            echo $_SESSION['value']['about_me'];
                        }
                        ?>" placeholder="I am hard worker" required>
                    <small class="text-danger">
                        <?php
                        if (isset($_SESSION['error']['about_me'])) {
                            echo $_SESSION['error']['about_me'];
                        }
                        ?>
                    </small>
                </div>
            </div>

            <div class="form-group row mt-2 mb-1">
                <label for="user-profile-image " class="col-sm-2 col-form-label ">Profile Image</label>
                <div class="col-sm-10 ">
                    <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                    <input type="file" class="form-control " name="profile-image" id="user-profile-image" required>
                </div>
            </div>

            <!-- submit button -->
            <button type="submit" class="btn btn-primary" id="send-user-details">Submit</button>

        </form>
    </div>
</div>
<!-- costume external js file -->
<!-- <script type="module" src="js/formJs.js"></script> -->

<?php include "footer.php"; ?>