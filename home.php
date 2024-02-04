<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="sktylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Automatic Resume Builder</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>


</head>

<body>

    <?php include 'alert.php' ?>
    <?php  
    require ('partials/load.php');
   require ('header.php');
   global $action;
    $action->onlyForAuthUser();
    ?>
    <section class="firstSection">
        <div class="main-box">
            <div class="firstHalf">
                <p class="text-big"> Resume Builder</p>
                <div class="text-slogen">Make Your Resume
                    <div class="slider">
                        <div>NOW</div>
                        <div>TODAY</div>
                        <div>FREE</DIv>
                    </div>
                </div>
                <p class="text-small">Resume writing can be stressful, confusing,<br> and time-consuming if you do it
                    all on your own. With our Resume Maker, it’s quick, pain-free, and effective.</p>
                <div class="button">
                    <a href="templetes.php">
                        <button class="Btn-main">Create Your Resume Now</button>
                    </a>
                </div>
            </div>
            <div class="secondHalf">
                <img src="img/resume.png" alt="resume">
            </div>
        </div>
    </section>
    <section class="features">
        <p class="featuresTag">Our Amazing Features</p>
        <div class="features-container ">
            <div class="feature_item ">
                <img src="img/resume-check.svg" alt="resume-check">
                <div class="features_info">
                    <h5>Easy User Interface</h5>
                    <p class="featuresText">
                        The Interface is designed specially to save your time and easy to handle even if you don't have
                        experience of handling our website.
                    </p>
                </div>
            </div>
            <!-- <div class="feature_item">
                <img src="img/resume-check.svg" alt="resume-check">
                <div class="features_info">
                    <h5>Build ATS-frinedly Resume</h5>
                    <p class="featuresText">
                        Our resume templates makes it easier to ATS(Aplicant Tracking System) to read your resume.
                    </p>
                </div>
            </div> -->
            <div class="feature_item">
                <img src="img/resume-check.svg" alt="resume-check">
                <div class="features_info">
                    <h5>Free of cost Resumes</h5>
                    <p class="featuresText">
                        Unlike other resume builders,you will not have to pay for making and downloading resumes.
                    </p>
                </div>
            </div>
            <!-- <div class="feature_item">
                <img src="img/resume-check.svg" alt="resume-check">
                <div class="features_info">
                    <h5>Suggestion and Tips</h5>
                    <p class="featuresText">
                        Design resumes with guidance and tips from industry proffessionals. We will be guiding you.
                    </p>
                </div>
            </div> -->

        </div>
    </section>

    <!-- About -->
    <section class="about">
        <!-- <p class="featuresTag">About Us</p> -->
        <!-- <p>With our BuildUrCV website, your dream job will become easier to achieve </p> -->

    </section>
    <!-- <section class="footer">
        <div class="vision">
            <h4>Our Vision is to</h4>
            <h3>Make Resumes creation Easy</h3>
             <h4>Made with ❤️&🍵 in Ratnagiri</h4> 
            <h6>Copyright © 2022 Automatic Resume Builder. All Rights Reserved.</h6>
            <br>
        </div>
    </section> -->

    <?php include 'partials/footer.php' ?>

    <body>

</html>