<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic resume</title>
    <link rel="stylesheet" href="assets/css/newform.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>

<body>
    <section class="firstSection">
        <div class="container1">
            <div class="form">
                <header>Fill Your Details</header>
                <form action="partials/handleForm.php" method="post" id="form" name="form"
                    onsubmit="return validateForm()">
                    <div class="form first">
                        <div class="details personal">
                            <span class="title">Personal Details</span>

                            <div class="feilds">

                                <div class="input-field" id="headline1">
                                    <label>Desired Job title <span class="star">*</span></label>
                                    <input type="text" name="headline" id="headline"
                                        oninput="Confirmjobtitle.value = headline.value" placeholder="Enter Job Title ">
                                    <span class="errormsg"></span>
                                    <i class="icon " style="margin-left: 255px;"></i>

                                </div>

                                <div class="input-field" id="full_name1">
                                    <label>Full Name <span class="star">*</span></label>
                                    <input type="text" name="full_name" id="full_name" placeholder="Enter Your Name">
                                    <span class="errormsg"></span>
                                    <i class="icon " style="margin-left: 255px;"></i>
                                </div>

                                <div class="input-field" id="email1">
                                    <label>Email <span class="star">*</span></label>
                                    <input type="text" name="email" id="email" placeholder="Enter Email">
                                    <span class="errormsg"></span>
                                    <i class="icon " style="margin-left: 255px;"></i>

                                </div>

                                <div class="input-field" id="mobile1">
                                    <label>Phone <span class="star">*</span></label>
                                    <input type="number" name="mobile" id="mobile" placeholder="Phone Number">
                                    <span class="errormsg"></span>
                                    <i class="icon " style="margin-left: 255px;"></i>
                                </div>

                                <div class="input-field" id="address1">
                                    <label>Address <span class="star">*</span></label>
                                    <input type="text" name="address" id="address" placeholder="Enter Address">
                                    <span class="errormsg"></span>
                                    <i class="icon " style="margin-left: 255px;"></i>
                                </div>

                                <div class="input-field" id="dob1">
                                    <label>Date Of Birth <span class="star">*</span></label>
                                    <input type="Date" name="dob" id="dob" placeholder="Enter Birth date ">
                                    <span class="errormsg"></span>
                                    <i class="icon " style="margin-left: 255px;"></i>
                                </div>


                            </div>
                        </div>
                        <!-- education -->
                        <div class="details education">
                            <span class="title">Education</span>
                            <div id="education">

                            </div>

                            <div class="feilds">

                                <div class="input-field">
                                    <label>Course / Board</label>
                                    <input type="text" id="Ctitle" oninput="Comfrimctitle.value = Ctitle.value"
                                        placeholder="Enter course/board name ">
                                </div>

                                <div class="input-field">
                                    <label>College Name</label>
                                    <input type="text" id="Cname" placeholder="Enter College Name">
                                </div>

                                <div class="input-field">
                                    <label>Score</label>
                                    <input type="numberd" id="Cscore" placeholder="Enter Marks in %">
                                </div>

                                <div class="input-field">
                                    <label>Duration</label>
                                    <input type="text" id="Cdura" placeholder="2020-2024">

                                </div>
                                <div class="input-field" style="margin-right: 34%; ">
                                    <label style="opacity: 0;"> h</label>
                                    <button type="button" class=" " style="width: 70px; height: 41px;margin: 0; "
                                        id="addeducation">ADD</button>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- second -->
                    <div class="form second">
                        <div class="details education">
                            <span class="title">Other Deatails</span>

                            <!-- graduation -->
                            <span class="title2">Internship :-</span>
                            <div id="internship">

                            </div>
                            <div class="feilds">

                                <div class="input-field">
                                    <label>Company Name</label>
                                    <input type="text" placeholder="Company Name " id="IComp">
                                </div>

                                <div class="input-field">
                                    <label>Duration (Months)</label>
                                    <input type="text" placeholder="Enter Duration" id="Idura">
                                </div>

                                <div class="input-field">
                                    <label>Description</label>
                                    <input type="text" placeholder="Description" id="Idesp">
                                </div>
                                <button class="" type="button" style="width: 70px; height: 41px;margin: 0;"
                                    id="addinternship">ADD</button>

                            </div>
                        </div>
                        <!-- 12th -->
                        <span class="title2">Project :-</span>
                        <div id="project"></div>

                        <div class="feilds">

                            <div class="input-field">
                                <label>Project Name</label>
                                <input type="text" id="Pname" placeholder="Enter Project Name ">
                            </div>

                            <div class="input-field">
                                <label>Duration (Months)</label>
                                <input type="text" id="Pdura" placeholder="Enter Duration">
                            </div>

                            <div class="input-field">
                                <label>Description</label>
                                <input type="text" id="Pdesp" placeholder="Description">
                            </div>

                            <button class="" type="button" style="width: 70px; height: 41px;margin: 0;"
                                id="addproject">ADD</button>

                        </div>

                        <!-- 12th -->
                        <span class="title2">Specialization :-</span>
                        <div class="feilds">

                            <div class="input-field2" style="width: calc(100% / 3 - 15px);  margin-bottom: -34px;">
                                <label>Skill</label>
                                <div id="skills">

                                    <!-- <input style="width: 88%;" type="text" value = "HTML" name = "skill[]" disabled  > -->
                                </div>

                                <div class="input-group mb-3" style="gap: 6px;">
                                    <input type="text" style="height: 42px; margin-top: 27px;" id="userskill"
                                        class="form-control w-full" placeholder="Enter Skills"
                                        aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <div class="input-field2 ">
                                        <button class="btn btn-primary " type="button" id="addskill">Add Skill</button>
                                    </div>
                                </div>
                                <!-- <input type="text" placeholder="Enter Skills" > -->
                            </div>


                        </div>
                        <!-- <span class="title2">Awards and Honor :-</span>
                    <div class="feilds">
                    
                    <div class="input-field">
                    
                        <input type="text" placeholder="Enter Awards and Honor" >
                    </div>    

                    </div> -->
                        <!-- <input type="submit" id="submit" value="Create Resume"> -->
                        <div class="buttons" id="btnText">
                            <button class="nextBtn " id="btnText" style="background-color: #f0ad4e;">
                                <input type="submit" value="Create Resume">
                                <i class="uil uil-navigator"></i>
                            </button>
                        </div>

                    </div>

            </div>
            <!-- </form> -->

            <!-- </form> -->

        </div>




        </div>
        </div>
        </form>
        </div>

        </div>

        <div class="resumeSection">
            <div class="inner">
                <!-- <div class="resume"> -->
                <div id="hd">
                    <div class="yui-gc" style="display: flex;">
                        <div class="yui-u first">
                            <h1>mobile engineer<input type="text" id="Confirmjobtitle" readonly></h1>
                            <h2>Web Designer, Director</h2>
                        </div>

                        <div class="yui-u" style="width: 34%;">
                            <div class="contact-info">
                                <h3><a id="pdf" href="#">Download PDF</a></h3>
                                <h3><a href="mailto:name@yourdomain.com">name@yourdomain.com</a></h3>
                                <h3>(313) - 867-5309</h3>
                            </div>
                            <!--// .contact-info -->
                        </div>
                    </div>
                    <!--// .yui-gc -->
                </div>
                <!--// hd -->
                <div class="info">
                    <div class="main">
                        <div class="box">
                            <div class=" box_u first">
                                <h2>Profile</h2>
                            </div>
                            <div class="box_u">
                                <div class="talent">
                                    <h2><input type="text" id="Comfrimctitle" readonly></h2>
                                    <p>Assertively exploit wireless initiatives rather than synergistic core
                                        competencies. </p>
                                </div>

                                <div class="talent">
                                    <h2>Interface Design</h2>
                                    <p>Credibly streamline mission-critical value with multifunctional functionalities.
                                    </p>
                                </div>
                                <div class="talent">
                                    <h2>Interface Design</h2>
                                    <p>Credibly streamline mission-critical value with multifunctional functionalities.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="box">
                            <div class=" box_u first ">
                                <h2>Skill</h2>
                            </div>
                            <!-- <div class="box_u skill">
                                <ul class="talent">
                                    <li>XHTML</li>
                                    <li>CSS</li>
                                    <li class="last">Javascript</li>
                                </ul>

								<ul class="talent">
                                    <li>XHTML</li>
                                    <li>CSS</li>
                                    <li class="last">Javascript</li>
                                </ul>
                               
                            </div> -->
                        </div>
                        <div class="box">
                            <div class=" box_u first">
                                <h2>Profile</h2>
                            </div>
                            <!-- <div class="box_u project">
                                <div class="job">
                                    <h2>Facebook</h2>
                                    <h4>2005-2007</h4>
                                    <p>Intrinsicly enable optimal core competencies through corporate relationships. Phosfluorescently implement worldwide vortals and client-focused imperatives. Conveniently initiate virtual paradigms and top-line convergence. </p>
                                </div>

                                <div class="job">
                                    <h2>Facebook</h2>
                                    <h4>2005-2007</h4>
                                    <p>Intrinsicly enable optimal core competencies through corporate relationships. Phosfluorescently implement worldwide vortals and client-focused imperatives. Conveniently initiate virtual paradigms and top-line convergence. </p>
                                </div>
                               
                            </div> -->
                        </div>
                        <div class="box">
                            <div class=" box_u first">
                                <h2>Internship</h2>
                            </div>
                            <div class="box_u project">
                                <!-- <div class="job">
                                    <h2>Facebook</h2>                             
                                    <h4>2005-2007</h4>
                                    <p>Intrinsicly enable optimal core competencies through corporate relationships. Phosfluorescently implement worldwide vortals and client-focused imperatives. Conveniently initiate virtual paradigms and top-line convergence. </p>
                                </div>                           -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
            </div>
        </div>

    </section>
    <script src="assets/js/form.js"></script>
    <script>
    $("#addinternship").click(function() {

        console.log("education");
    });
    </script>
</body>

</html>