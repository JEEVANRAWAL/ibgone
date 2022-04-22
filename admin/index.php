<?php include "myHeader.php"; ?>

<style>
    #banner {
        height: 100vh;
    }
</style>
<!-- ----------------------- banner section ------------------------------ -->

<section id="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <p class="web_title">ID BIO GENERATOR</p>
                <p>ADMIN DASHBOARD <br>
                <h1>
                    <?php echo 'Mr. '. $_SESSION['fname'];?>
                </h1>
                </p>
            </div>

            <div class="col-md-6 text-center">
                <img alt="home" src="http://localhost/php/IBG/img/home2.png" class="home-img">
            </div>
        </div>
    </div>
</section>


</body>

</html>