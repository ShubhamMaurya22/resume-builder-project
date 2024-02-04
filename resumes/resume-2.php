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
<html>

<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');

    body {
        background: #fafafa;
        height: 122vh;
        font-weight: bold;
        letter-spacing: 2px;
    }

    * {
        margin: 0px;
        padding: 0px;
        font-family: 'Montserrat', sans-serif;
    }

    .main {
        background-color: beige;
        height: auto;
        width: 650px;
        position: absolute;
        transform: translate(-50%, -34%);
        left: 50%;
        top: 60%;
        box-shadow: 5px 2px 14px 10px #eeeaea;
    }

    .left {
        padding: 0px 0px 0px 20px;
        width: 238px;
        height: 100%;
        float: left;
    }

    .right {
        float: left;
        margin-top: -34px;
        margin-bottom: 30px;
        width: 367px;
        margin-left: 25px;
    }

    .box-1 {
        position: relative;
    }

    .p1 {
        padding: 10px 0px;
        font-size: 11px;
        display: flex;
    }

    .icons1 {
        font-size: 16px !important;
        padding-right: 10px !important;
        vertical-align: sub;
    }

    .skill {
        margin-left: 20px;
        font-size: 12px;
        font-weight: normal;
    }

    .skill li {
        padding: 13px 0px;
    }

    .name-div {
        padding: 50px 0px 40px 5px;
        text-align: center;
        letter-spacing: 3px;
        color: black;
    }

    .name-div h1 {
        margin-bottom: 10px;
    }

    .box-2 {
        padding: 0px 50px;
        margin-top: 30px;
    }

    .p2 {
        font-size: 10px;
        font-weight: 300;
        letter-spacing: 1px;
        word-spacing: 2px;
        line-height: 18px;
        margin-top: 5px;
    }

    .p2title {
        font-size: 15px;
        font-weight: 300;
        letter-spacing: 1px;
        word-spacing: 2px;
        line-height: 18px;
        margin-top: 5px;
        font-weight: bold;
        margin-right: 10px;
    }

    .internship {
        /* display: flex; */
        /* margin-top: 10px; */
    }

    .education {
        /* display: flex; */
        margin-top: 5px;
    }

    h2 {
        font-size: 16px;
        margin-bottom: 15px;
    }

    .p2edu {
        font-size: 13px;
        font-weight: 300;
        letter-spacing: 1px;
        word-spacing: 2px;
        line-height: 18px;
        margin-top: 5px;
        font-weight: bold;
        margin-right: 10px;
    }

    .buttons {
        display: flex;
        align-items: center;
        background-color: #f0ad4e;
        margin-top: 28px;
        border: 2px solid;
        /* width: 106px; */
        padding: 8px 15px;
        border-radius: 12px;
        font-size: 15px;
    }
    </style>
</head>

<body>
    <div class="">
        <button class="btn" id="download">Download PDF</button>
    </div>
    <div class="main" id="inner">
        <div class="name-div">
            <h1><?=$resumedata['full_name']?></h1>
            <p><?=$resumedata['headline']?></p>
        </div>

        <div class="left">
            <div class="box-1">
                <p class="heading">Contact</p>

                <p class="p1"><i class="material-icons icons1">call</i><?=$contact->mobile?></p>
                <p class="p1"><i class="material-icons icons1">email</i><?=$contact->email?></p>
                <p class="p1"><i class="material-icons icons1">map</i><?=$contact->address?></p>
                <!-- <p class="p1"><i class="material-icons icons1">fax</i>Lorem Dummy</p> -->
            </div>

            <div class="box-1">
                <br />
                <p class="heading">INTERNSHIP :-</p>
                <br>
                <?php
            foreach($internships as $internship){
                ?>
                <div class="internship">


                    <p class="p2title"><?=$internship->company?></p>
                    <p class="p2">| <?=$internship->duration?></p>
                </div>

                <p class="p2"><?=$internship->description?></p>
                <br>
                <?php
            }
            ?>


            </div>
            <br />
            <div class="box-1">
                <p class="heading">SKILLS :-</p>
                <ul class="skill">
                    <?php 
                foreach ($skills as $skill ) {
                    ?>
                    <li><?=$skill?></li>
                    <?php
                }
                ?>

                </ul>
            </div>

        </div>

        <div class="right">

            <div class="box-2">
                <!-- <h2>PROFILE</h2>
                <p class="p2">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s,<br> when an unknown printer took a galley of
                    type and scrambled it to make a type specimen book. It has survived not only five centuries,
                </p> -->

            </div>

            <div class="box-2">
                <h2>EDUCATION :-</h2>
                <?php
                    foreach($educations as $education){
                        ?>
                <h4 style="font-size: 15px; font-weight: 600 "><?=$education->title?>
                </h4>
                <div class="education ">

                    <p class="p2edu"><?=$education->college?></p>
                    <p class="p2">| <?=$education->Cduration?></p>
                </div>
                <p class="p2">SCORE: 78% </p>
                <br />
                <?php
                    }
                ?>




                <div class="box-1">

                    <p class="heading">PROJECT :-</p>
                    <br>
                    <?php
            foreach($projects as $project){
                ?>
                    <div class="internship">


                        <p class="p2title"><?=$project->name?></p>
                        <p class="p2">| <?=$project->Pduration?></p>
                    </div>

                    <p class="p2"><?=$project->Pdespcription?></p>
                    <br>
                    <?php
            }
            ?>


                </div>

            </div>


        </div>
        <!-- <div class="" style="margin-left: 36%;">
            <button onclick="window.print()" class="buttons"> Download Resume</i></button>
        </div> -->

        <script>
        window.onload = function() {
            document.getElementById("download").addEventListener("click", () => {
                const inner = this.document.getElementById("inner");
                console.log(inner);
                console.log(window);
                html2pdf().from(inner).save();

            });
        }
        </script>
</body>

</html>