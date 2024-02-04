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

    <title><?=@$resumedata['full_name']?></title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="icon" href="../img/resume.png">

    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <link rel="stylesheet" type="text/css"
        href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" />
    <link rel="stylesheet" type="text/css" href="resume.css" media="all" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.js"></script>
</head>
<style>
.btn {
    margin-top: 10px;
    color: #6c0414;
    font-size: 15px;
    font-weight: bold;
}
</style>

<body>
    <div class="download">
        <button class="btn" id="download">Download PDF</button>
    </div>
    <div id="doc2" class="yui-t7">
        <div id="inner">

            <div id="hd">
                <div class="yui-gc">
                    <div class="yui-u first">
                        <h1> <?=@$resumedata['full_name']?></h1>
                        <h2><?=@$resumedata['headline']?></h2>
                    </div>

                    <div class="yui-u">
                        <div class="contact-info">
                            <h3><a id="pdf" href="#"><?=$contact->mobile?></a></h3>
                            <h3><a href="mailto:<?=$contact->email?>"><?=$contact->email?></a></h3>
                            <h3><?=$contact->address?></h3>
                        </div>
                        <!--// .contact-info -->
                    </div>
                </div>
                <!--// .yui-gc -->
            </div>
            <!--// hd -->

            <div id="bd">
                <div id="yui-main">
                    <div class="yui-b">

                        <!-- <div class="yui-gf">
                            <div class="yui-u first">
                                <h2>Profile</h2>
                            </div>
                            <div class="yui-u">
                                <p class="enlarge">
                                    Progressively evolve cross-platform ideas before impactful infomediaries.
                                    Energistically visualize tactical initiatives before cross-media catalysts for
                                    change.
                                </p>
                            </div>
                        </div> -->
                        <!--// .yui-gf -->

                        <div class="yui-gf">
                            <div class="yui-u first">
                                <h2>Education</h2>
                            </div>
                            <div class="yui-u">
                                <?php 
foreach($educations as $education){
    ?>
                                <div class="talent">
                                    <h2><?=$education->title?></h2>
                                    <h4><?=$education->college?></h4>
                                    <p><?=$education->Cduration?> </p>
                                    <p>score <?=$education->score?>%</p>
                                </div>
                                <?php
}
?>
                            </div>
                        </div>
                        <!--// .yui-gf -->

                        <div class="yui-gf">
                            <div class="yui-u first">
                                <h2>Skills</h2>
                            </div>
                            <div class="yui-u">
                                <?php 
                                 foreach($skills as $skill){
                                    ?>
                                <ul class="talent">
                                    <li><?=$skill?></li>

                                </ul>
                                <?php
                                 }
                                    ?>
                            </div>
                        </div>
                        <!--// .yui-gf-->

                        <div class="yui-gf">

                            <div class="yui-u first">
                                <h2>Projects</h2>
                            </div>
                            <!--// .yui-u -->

                            <div class="yui-u">

                                <?php
                            foreach($projects as $project){
                          ?>

                                <div class="job">
                                    <h2><?=$project->name?></h2>
                                    <!-- <h3>Senior Interface Designer</h3> -->
                                    <h4><?=$project->Pduration?></h4>
                                    <p><?=$project->Pdespcription?> </p>
                                </div>
                                <?php
                                 }
                                    ?>


                                <!-- <div class="job">
                                    <h2>Microsoft</h2>
                                    <h3>Principal and Creative Lead</h3>
                                    <h4>2004-2005</h4>
                                    <p>Intrinsicly transform flexible manufactured products without excellent
                                        intellectual capital. Energistically evisculate orthogonal architectures through
                                        covalent action items. Assertively incentivize sticky platforms without
                                        synergistic materials. </p>
                                </div> -->


                                <!-- <div class="job last">

                                </div> -->

                            </div>
                            <!--// .yui-u -->
                        </div>
                        <!--// .yui-gf -->

                        <!-- internship -->
                        <div class="yui-gf">

                            <div class="yui-u first">
                                <h2>Internship</h2>
                            </div>
                            <!--// .yui-u -->

                            <div class="yui-u">

                                <?php
                            foreach($internships as $internship){
                          ?>
                                <div class="job">
                                    <h2><?=$internship->company?></h2>
                                    <!-- <h3>Senior Interface Designer</h3> -->
                                    <h4><?=$internship->duration?></h4>
                                    <p><?=$internship->description?> </p>
                                </div>
                                <?php
     }
        ?>




                            </div>
                            <!--// .yui-u -->
                        </div>



                        <!-- <div class="yui-gf last">
                            <div class="yui-u first">
                                <h2>Education</h2>
                            </div>
                            <div class="yui-u">
                                <h2>Indiana University - Bloomington, Indiana</h2>
                                <h3>Dual Major, Economics and English &mdash; <strong>4.0 GPA</strong> </h3>
                            </div>
                        </div> -->
                        <!--// .yui-gf -->


                    </div>
                    <!--// .yui-b -->
                </div>
                <!--// yui-main -->
            </div>
            <!--// bd -->

            <div id="ft">
                <p><?=@$resumedata['full_name']?> &mdash; <a href="mailto:<?=$contact->email?>"><?=$contact->email?></a>
                    &mdash; <?=$contact->mobile?></p>
            </div>
            <!--// footer -->

        </div><!-- // inner -->


    </div>
    <!--// doc -->

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