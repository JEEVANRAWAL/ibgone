<?php include "myHeader.php";

if ($_GET) {
    echo "<script>
           var uid= " . $_GET['user_id'] . ";
        </script>";
}


?>


<div class="container-fluid">
    <div class="container shadow-lg p-3 mb-5 mt-5 bg-white rounded">

        <form action="update-idcard.php?user_id=<?php echo $_GET['user_id']; ?>" method="post" id="user-details-form" enctype="multipart/form-data">
            <!-- basic information -->
            <div class="form-group row mt-2 mb-1">
                <label for="user-name" class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="user-name" placeholder="Full Name">
                </div>
            </div>

            <div class="form-group row mt-2 mb-1">
                <label for="user-title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" id="user-title" placeholder="Title">
                </div>
            </div>

            <div class="form-group row mt-2 mb-1">
                <label for="user-id" class="col-sm-2 col-form-label">ID no</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_no" id="user-id_no" placeholder="ID number">
                </div>
            </div>

            <div class="form-group row mt-2 mb-1">
                <label for="user-organization" class="col-sm-2 col-form-label">Organization</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="organization" id="user-organization" placeholder="Organization name">
                </div>

                <div class="form-group row mt-2 mb-1">
                    <label for="blood_type" class="col-sm-2 col-form-label">Blood Type</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="blood_type" id="blood_type" required>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mt-2 mb-1">
                    <label for="user-issue" class="col-sm-2 col-form-label">Issue</label>
                    <div class="col-sm-10">
                        <input type="datetime-local" class="form-control" name="issue" id="user-issue-date" placeholder="Issue Date">
                    </div>
                </div>

                <div class="form-group row mt-2 mb-1">
                    <label for="user-expire" class="col-sm-2 col-form-label">Expires</label>
                    <div class="col-sm-10">
                        <input type="datetime-local" class="form-control" name="expire" id="user-expire-date" placeholder="Expire Date">
                    </div>
                </div>


                <div class="form-group row mt-2 mb-1">
                    <label for="user-profile-image " class="col-sm-2 col-form-label ">Profile Image</label>
                    <div class="col-sm-10 ">
                        <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                        <input type="file" class="form-control " name="profile-image" id="user-profile-image">
                    </div>
                </div>

                <!-- submit button -->
                <button type="submit" class="btn btn-primary">Update</button>

        </form>
    </div>
</div>
<?php include "footer.php"; ?>


<!-- costume external js file -->
<script type="module" src="js/update-idcard.js"></script>