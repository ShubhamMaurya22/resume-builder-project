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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=@$resumedata['full_name']?></title>
    <link rel="icon" href="../img/resume.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.js"></script>

    <link rel="stylesheet" href="css/resume-4.css">
</head>

<body>
    <div class="download">
        <button class="btn" id="download">Download PDF</button>
    </div>
    <div id="inner">
        <div class="paper">
            <div class="paper2">

                <div class="contact">
                    <!-- <ul>
              <li><img src="https://i.postimg.cc/VL1v2bLL/icon-marker.png" alt="" width=27px></li>
              <li><img src="https://i.postimg.cc/fRC98fcN/icon-phone.png" alt="" width=27px></li>
              <li><img src="https://i.postimg.cc/g0GxRXQT/icon-email.png" alt="" width=27px</li>
              <li><img src="https://i.postimg.cc/VNwCRHr4/icon-earth.png" alt="" width=27px></li>
            </ul> -->
                    <!-- <h3 class="grey">LANCUAGE</h3> -->
                </div>
                <div class="content">
                    <h1 class="name"> <?=@$resumedata['full_name']?></h1>
                    <div class="left">
                        <h2><?=@$resumedata['headline']?></h2>

                        <!-- <p style="text-align: justify;color:#838385">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p> -->
                        <h3>CONTACT</h3>
                        <h4>Address</h4>
                        <p><?=$contact->address?></p>
                        <h4>Phone</h4>
                        <p>+91<?=$contact->mobile?></p>
                        <h4>Email</h4>
                        <p><?=$contact->email?></p>
                        <!-- <h4>Website</h4>
              <p>www.yourweb.com</p> -->

                        <!-- skill -->
                        <div class="language">
                            <h3>Skill</h3>
                            <?php 
                                 foreach($skills as $skill){
                                    ?>
                            <h4><?=$skill?></h4>
                            <div class="rate">
                                <div class="bigo"></div>
                                <div class="bigo"></div>
                                <div class="bigo"></div>
                                <div class="bigo"></div>
                                <div class="bigo"></div>
                            </div>
                            <?php
                                 }
                                    ?>
                        </div>

                    </div>
                    <div class="right">
                        <!-- <div class="pic">
                <img src="https://i.postimg.cc/jdnTLWnH/women2.jpg" alt="" width=345px>
                <div class="colorbox"></div>
                <div class="colorbox2"></div>
                 <img class="colorbox3" src="https://i.postimg.cc/KjHJLvVw/arrow.png" alt="" width=124px>
              </div> -->
                        <h3 class="center" style="padding:80px 0px 5px 65px;">EDUCATION</h3>
                        <?php 
foreach($educations as $education){
    ?>
                        <div class="year">
                            <h4><?=$education->Cduration?> </h4>
                            <div class="info grey"><?=$education->title?> At <?=$education->college?> With Passing Score
                                <?=$education->score?>%
                            </div>
                        </div>
                        <?php
}
?>



                        <!-- internship -->
                        <h3 class="center" style="padding:80px 0px 5px 65px;">PROJECTS</h3>
                        <?php
                            foreach($projects as $project){
                          ?>
                        <div class="year">
                            <h4><?=$project->Pduration?></h4>
                            <div class="info grey"><?=$project->name?> :- <?=$project->Pdespcription?>
                            </div>
                        </div>
                        <?php
                            }
                    ?>


                        <!-- experince -->
                        <h3 class="center" style="padding:80px 0px 5px 65px;">INTERNSHIP</h3>
                        <?php
                            foreach($internships as $internship){
                          ?>
                        <div class="year">
                            <h4><?=$internship->duration?></h4>
                            <div class="info grey"><?=$internship->company?> :- <?=$internship->description?>
                            </div>
                        </div>
                        <?php
                            }
                    ?>




                    </div>
                </div>
                <div class="greybox"></div>
            </div>
        </div>
    </div>
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