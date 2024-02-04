<?php
require ('../partials/load.php');
global $action;
$url = $_GET['url'];
@session_start();
// include ('../partials/dbconnect2.php');
// $noresults = true;
// $sql = "SELECT * FROM `resumes` WHERE url = '$url'";
// $result = mysqli_query( $conn ,$sql);
// while($row = mysqli_fetch_assoc($result)){
// $id=$row['id'];
// print_r($sql);
// }
$resumedata = $action->db->read('resumes','*',"WHERE url = '$url' ");
if(!$resumedata){
    header ("Location: /ARB project/home.php");
}

$resumedata = $resumedata[0];

$title = $resumedata['full_name'];

$data['resume']=$resumedata;
$resumedata['contact'] = str_replace('\\',"", $resumedata['contact']);
$contact = json_decode($resumedata['contact']);

$resumedata['internship'] = str_replace('\\',"", $resumedata['internship']);
$internships = json_decode($resumedata['internship']);

$resumedata['skill'] = str_replace('\\',"", $resumedata['skill']);
$skills = json_decode($resumedata['skill']);

$resumedata['education'] = str_replace('\\',"", $resumedata['education']);
$educations = json_decode($resumedata['education']);

$resumedata['project'] = str_replace('\\',"", $resumedata['project']);
$projects = json_decode($resumedata['project']);

?>
<!DOCTYPE html>
<!--Code By Webdevtrick ( https://webdevtrick.com )-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo $title ;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="icon" href="../img/resume.png">
    <style>
    /* Code By Webdevtrick ( https://webdevtrick.com ) */
    @import url(https://fonts.googleapis.com/css?family=Varela+Round);
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700);

    *,
    *::after,
    *::before {
        box-sizing: border-box;
    }

    html,
    body {
        height: 100%;
    }

    body {
        font-family: 'Open Sans', sans-serif;
        font-size: 16px;
        line-height: 1.5em;
    }

    a {
        color: #66cc99;
        text-decoration: none;
    }

    .clearfix::after,
    .clearfix::before {
        content: " ";
        display: table;
    }

    .clearfix::after {
        clear: both;
    }

    .bold {
        color: #4a4e51;
        font-weight: 400;
    }

    .resume-wrapper {
        position: relative;
        text-align: center;
        height: 100%;
        display: flex;
        width: 76%;
        margin-left: 13%
    }

    .container {
        min-height: 600px;
    }

    .profile {
        background: #fff;
        float: left;
        color: #9099a0;
        width: 50%;
        background-color: lightgray;
        height: 172%;
    }

    @media (max-width: 850px) {
        .profile {
            width: 100%;
        }
    }

    .profile .name-wrapper {
        float: left;
        width: 100%;
    }

    .profile h1 {
        font-size: 2.5em;
        text-align: left;
        font-family: 'Varela Round', sans-serif;
        color: #4a4e51;
        text-transform: uppercase;
        line-height: 1em;
        padding-top: 25px;
    }

    @media (max-width: 1200px) {
        .profile h1 {
            padding-top: 20px;
        }
    }

    @media (max-width: 450px) {
        .profile h1 {
            font-size: 1.8em;
            padding-top: 20px;
        }
    }

    .profile li {
        margin-bottom: 10px;
    }

    .profile .picture-resume-wrapper {
        width: 40%;
        display: block;
        float: left;
    }

    @media (max-width: 1200px) {
        .profile .picture-resume-wrapper {
            width: 100%;
        }
    }

    .profile .picture-resume {
        width: 220px;
        height: 220px;
        background-size: cover;
        border-radius: 50%;
        margin-right: 0px;
        display: table;
        position: relative;
        vertical-align: middle;
    }

    .profile .picture-resume span {
        display: table-cell;
        vertical-align: middle;
        position: relative;
        margin: 0 auto;
        z-index: 10;
        text-align: center;
    }

    .profile .picture-resume img {
        border-radius: 50%;
        width: 130px;
    }

    @media (max-width: 1500px) {
        .profile .picture-resume img {
            width: 80px;
        }
    }

    @media (max-width: 1200px) {
        .profile .picture-resume img {
            width: 120px;
            height: 120px;
        }
    }

    @media (max-width: 1500px) {
        .profile .picture-resume {
            width: 250%;
            height: 150px;
        }
    }

    @media (max-width: 1200px) {
        .profile .picture-resume {
            width: 200px;
            height: 200px;
        }
    }

    @media (max-width: 450px) {
        .profile .picture-resume {
            width: 180px;
            height: 180px;
        }
    }

    .profile .contact-info {
        margin-top: 50px;
        font-weight: 300;
    }

    @media (max-width: 1200px) {
        .profile .contact-info {
            margin-top: 70px;
        }
    }

    @media (max-width: 450px) {
        .profile .contact-info {
            margin-top: 50px;
        }
    }

    .profile .list-titles {
        float: left;
        text-align: left;
        font-weight: 600;
        width: 40%;
        color: #4a4e51;
    }

    .profile .list-content {
        float: left;
        width: 60%;
        text-align: left;
        font-weight: 300;
    }

    .profile .contact-presentation {
        text-align: left;
        font-weight: 300;
        margin-top: -60px;
        margin-bottom: 100px;
    }

    @media (max-width: 1200px) {
        .profile .contact-presentation {
            margin-top: 70px;
            margin-bottom: 70px;
        }
    }

    @media (max-width: 850px) {
        .profile .contact-presentation {
            margin-top: 50px;
            margin-bottom: 50px;
        }
    }

    .profile svg {
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
    }

    .profile .st0,
    .profile .st1 {
        fill: #66cc99;
    }

    .experience {
        background: #3d3e42;
        width: 50%;
        float: left;
        position: relative;
        color: #9099a0;
        font-weight: 300;
        min-height: 100%;
        min-height: 100vh;
        height: 172%;
    }

    @media (max-width: 850px) {
        .experience {
            width: 100%;
        }
    }

    .experience h3.experience-title {
        color: #66cc99;
        text-align: left;
        text-transform: uppercase;
        font-size: 1.2em;
        margin-bottom: 20px;
        font-weight: 400;
    }

    .experience .company-wrapper {
        width: 45%;
        float: left;
        text-align: left;
        padding-right: 5%;
        margin-bottom: 15px;

    }

    @media (max-width: 450px) {
        .experience .company-wrapper {
            width: 100%;
            margin-bottom: 20px;
        }
    }

    .experience .job-wrapper {
        width: 53%;
        float: left;
        text-align: left;
        padding-right: 5%;
        margin-bottom: 15px;
    }

    @media (max-width: 450px) {
        .experience .job-wrapper {
            width: 100%;
            margin-bottom: 40px;
        }
    }

    .experience .experience-title {
        color: white;
        margin-bottom: 15px;
    }

    .section-padding {
        padding: 60px 60px 40px 40px;
    }

    @media (max-width: 850px) {
        .section-padding {
            padding: 80px 15% 40px 10%;
        }
    }

    @media (max-width: 450px) {
        .section-padding {
            padding: 40px 10% 20px 5%;
        }
    }

    .section-wrapper {
        width: 50%;
        float: left;
        text-align: left;
        color: #9099a0;
        font-weight: 300;
        margin-bottom: 20px;
        margin-top: 50px;
    }

    @media (max-width: 450px) {
        .section-wrapper {
            width: 100%;
        }
    }

    .section-wrapper:nth-child(3) {
        padding-right: 8%;
    }

    .section-wrapper h3.section-title {
        color: #66cc99;
        text-align: left;
        text-transform: uppercase;
        font-size: 1.2em;
        margin-bottom: 20px;
        font-weight: 400;
    }

    .section-wrapper .skill-percentage {
        margin-bottom: 10px;
        position: relative;
    }

    .section-wrapper .skill-percentage::after {
        content: "";
        width: 100%;
        height: 6px;
        background: #4a4e51;
        display: block;
        margin-top: 3px;
    }

    .section-wrapper .skill-percentage::before {
        content: "";
        height: 6px;
        background: #66cc99;
        position: absolute;
        margin-top: 3px;
        bottom: 0;
    }

    .section-wrapper .skill-percentage:nth-child(1)::before {
        width: 80%;
        -webkit-animation: skill_1 0.6s ease;
        animation: skill_1 0.6s ease;
    }

    .section-wrapper .skill-percentage:nth-child(2)::before {
        width: 90%;
        -webkit-animation: skill_2 0.6s ease;
        animation: skill_2 0.6s ease;
    }

    .section-wrapper .skill-percentage:nth-child(3)::before {
        width: 50%;
        -webkit-animation: skill_3 0.6s ease;
        animation: skill_3 0.6s ease;
    }

    .section-wrapper .skill-percentage:nth-child(4)::before {
        width: 60%;
        -webkit-animation: skill_4 0.6s ease;
        animation: skill_4 0.6s ease;
    }

    .section-wrapper .skill-percentage:nth-child(5)::before {
        width: 70%;
        -webkit-animation: skill_5 0.6s ease;
        animation: skill_5 0.6s ease;
    }

    .section-wrapper .skill-percentage:nth-child(6)::before {
        width: 70%;
        -webkit-animation: skill_6 0.6s ease;
        animation: skill_6 0.6s ease;
    }

    .section-wrapper .skill-percentage:nth-child(7)::before {
        width: 70%;
        -webkit-animation: skill_6 0.6s ease;
        animation: skill_6 0.6s ease;
    }

    @-webkit-keyframes skill_1 {
        from {
            width: 0%;
        }

        to {
            width: 80%;
        }
    }

    @keyframes skill_1 {
        from {
            width: 0%;
        }

        to {
            width: 80%;
        }
    }

    @-webkit-keyframes skill_2 {
        from {
            width: 0%;
        }

        to {
            width: 90%;
        }
    }

    @keyframes skill_2 {
        from {
            width: 0%;
        }

        to {
            width: 90%;
        }
    }

    @-webkit-keyframes skill_3 {
        from {
            width: 0%;
        }

        to {
            width: 50%;
        }
    }

    @keyframes skill_3 {
        from {
            width: 0%;
        }

        to {
            width: 50%;
        }
    }

    @-webkit-keyframes skill_4 {
        from {
            width: 0%;
        }

        to {
            width: 60%;
        }
    }

    @keyframes skill_4 {
        from {
            width: 0%;
        }

        to {
            width: 60%;
        }
    }

    @-webkit-keyframes skill_5 {
        from {
            width: 0%;
        }

        to {
            width: 70%;
        }
    }

    @keyframes skill_5 {
        from {
            width: 0%;
        }

        to {
            width: 70%;
        }
    }

    @-webkit-keyframes skill_6 {
        from {
            width: 0%;
        }

        to {
            width: 70%;
        }
    }

    @keyframes skill_6 {
        from {
            width: 0%;
        }

        to {
            width: 70%;
        }
    }

    @-webkit-keyframes skill_7 {
        from {
            width: 0%;
        }

        to {
            width: 70%;
        }
    }

    @keyframes skill_7 {
        from {
            width: 0%;
        }

        to {
            width: 70%;
        }
    }

    .headline {
        margin-top: 10%;
        width: 80%;
        font-size: 1.4rem;
        display: flex;

    }
    </style>
</head>

<body>

    <div class="resume-wrapper">
        <section class="profile section-padding">
            <div class="container">
                <div class="picture-resume-wrapper">
                    <div class="picture-resume">
                        <div class="name-wrapper">
                            <!-- <h1>SHANTANU <br/>RAJPUT</h1> -->
                            <h1>
                                <?=@$resumedata['full_name']?>
                            </h1>
                            <p class="headline"><?=@$resumedata['headline']?></p>
                        </div>
                        <div class="clearfix"></div>
                        <div class="contact-info clearfix">
                            <ul class="list-titles">

                                <li>Call</li>
                                <li>Mail</li>
                                <!-- <li>Web</li> -->
                                <li>Home</li>
                            </ul>

                            <ul class="list-content ">
                                <li><?=$contact->mobile?></li>
                                <li><?=$contact->email?></li>
                                <!-- <li><a href="#">webdevtrick.com</a></li> -->
                                <li><?=$contact->address?></li>
                            </ul>
                        </div>

                        <?php
                            foreach($internships as $internship){
                          ?>
                        <div class="contact-social clearfix">
                            <h6 style="margin-right: 90%; padding:10px;">Intenships:-</h6>
                            <ul class="list-titles">
                                <li>Company Name</li>
                                <li>Duration</li>
                                <li>Discription</li>
                            </ul>
                            <ul class="list-content">
                                <li><?=$internship->company?></li>
                                <li><?=$internship->duration?></li>
                                <li><?=$internship->description?></li>
                            </ul>
                        </div>
                        <?php
}
?>

                        <?php
                            foreach($projects as $project){
                          ?>
                        <div class="contact-social clearfix">
                            <h6 style="margin-right: 90%; padding:10px;">Projects</h6>
                            <ul class="list-titles">
                                <li>Project Name</li>
                                <li>Duration</li>
                                <li>Discription</li>
                            </ul>
                            <ul class="list-content">
                                <li><?=$project->name?></li>
                                <li><?=$project->Pduration?></li>
                                <li><?=$project->Pdespcription?></li>
                            </ul>
                        </div>
                        <?php
}
?>

                    </div>
        </section>

        <section class="experience section-padding">
            <div class="container">
                <h3 class="experience-title">Education</h3>
                <?php 
foreach($educations as $education){
    ?>
                <div class="experience-wrapper">
                    <h6 style="margin-right: 94%; padding:10px;"></h6>
                    <div class="company-wrapper clearfix">
                        <div class="experience-title">Course/Board name</div>
                        <div class="experience-title">College name</div>
                        <div class="experience-title"> Duration</div>
                        <div class="experience-title"> Score</div>

                    </div>
                    <div class="job-wrapper clearfix">
                        <div class="experience-title"><?=$education->title?></div>
                        <div class="experience-title"><?=$education->college?></div>
                        <div class="experience-title"><?=$education->Cduration?></div>
                        <div class="experience-title"><?=$education->score?></div>

                    </div>
                </div>

                <?php
}
?>

                <div class="section-wrapper clearfix">
                    <h3 class="section-title">Skills</h3>
                    <?php
                            foreach($skills as $skill){
                                ?>
                    <ul>
                        <li class="skill-percentage"><?=$skill?></li>
                    </ul>
                    <?php
                            }
                            ?>
                    <!-- <ul>
                                <li class="skill-percentage">HTML / HTML5</li>
                                <li class="skill-percentage">CSS / CSS3 / SASS / LESS</li>
                                <li class="skill-percentage">Javascript</li>
                                <li class="skill-percentage">Jquery</li>
                                <li class="skill-percentage">Wordpress</li>
                                <li class="skill-percentage">PHP</li>

                            </ul> -->

                </div>

                <!-- <div class="section-wrapper clearfix">
        <h3 class="section-title">Hobbies</h3>  
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a elit facilisis, adipiscing leo in, dignissim magna.</p>
        
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a elit facilisis, adipiscing leo in, dignissim magna.</p> 
      </div> -->

            </div>
        </section>

        <div class="clearfix"></div>
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js'></script>
    <script src="function.js"></script>
    <script>
    // Code By Webdevtrick ( https://webdevtrick.com )
    var select = function(s) {
        return document.querySelector(s);
    }

    function randomBetween(min, max) {
        var number = Math.floor(Math.random() * (max - min + 1) + min);

        if (number !== 0) {
            return number;
        } else {
            return 0.5;
        }
    }

    var tl = new TimelineMax();

    for (var i = 0; i < 20; i++) {

        var t = TweenMax.to(select('.bubble' + i), randomBetween(1, 1.5), {
            x: randomBetween(12, 15) * (randomBetween(-1, 1)),
            y: randomBetween(12, 15) * (randomBetween(-1, 1)),
            repeat: -1,
            repeatDelay: randomBetween(0.2, 0.5),
            yoyo: true,
            ease: Elastic.easeOut.config(1, 0.5)
        })

        tl.add(t, (i + 1) / 0.6)
    }

    tl.seek(50);
    </script>
</body>

</html>