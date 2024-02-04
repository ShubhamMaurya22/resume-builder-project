<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    /* background: #4070f4; */
    flex-direction: column;
}

.container1 {
    position: relative;
    max-width: 950px;
    width: 50%;
    border-radius: 6px;
    padding: 30px;
    margin: 0 15px;
    margin-right: 46%;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0, 1);
    background-color: #fff;
    height: 190vh;
}

.container1 header {
    font-size: 20px;
    font-weight: 600;
    color: #333;
    position: relative;
}

.container1 header::before {
    content: "";
    left: 0;
    position: absolute;
    bottom: -2px;
    height: 3px;
    width: 27px;
    border-radius: 8px;
    background-color: #4070f4
}

.container1 form {
    position: relative;
    margin-top: 16px;
    min-height: 650px;
    background-color #f2f2d2;
    overflow: hidden;
}

/* part where next button work */
.container1 form .form {
    position: absolute;
    background-color: #fff;
    transition: 0.3s ease;
}

.container1 form .form.second {
    opacity: 1;
    pointer-events: none;
    transform: translateX(100%);

}

form.secActive .form.second {
    opacity: 1;
    pointer-events: auto;
    transform: translateX(0);
}

form.secActive .form.first {
    opacity: 0;
    pointer-events: none;
    transform: translateX(-100%);
}

.container1 .form.details {
    /* margin-top:30px; */
}

.container1 .form .details .education {
    /* margin-top:15px; */
}

.container1 .form .title {
    display: block;
    margin-bottom: 8px;
    font-size: 16px;
    font-weight: 500;
    margin: 6px 0;
    color: #333
}

.container1 .form .title2 {
    display: block;
    margin-bottom: 8px;
    font-size: 13px;
    font-weight: 500;
    margin: 6px 0;
    color: #333
}

.container1 .form .feilds {
    display: flex;
    align-items: center;
    justify-content: left;
    flex-wrap: wrap
}

.container1 .form .input-field {
    display: flex;
    flex-direction: column;
    width: calc(100% / 3 - 15px);
    margin: 4px 10px;
}

.input-field label {
    font-size: 12px;
    font-weight: 500;
    color: #2e2e2e;
}

.input-field input {
    font-size: 14px;
    font-weight: 400;
    outline: none;
    color: #333;
    border-radius: 5px;
    border: 1px solid #aaa;
    padding: 0 15px;
    height: 42px;
    margin: 8px 0;
}

.input-field input:is(:focus, :valid) {
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.13);
}

.input-field input[type="date"] {
    color: #707070;
}

.input-field input[type="date"]:valid {
    color: #333;
}

.container1 form button,
.backBtn {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 45px;
    max-width: 200px;
    width: 100%;
    border: none;
    outline: none;
    color: #fff;
    border-radius: 5px;
    margin: 25px 0;
    background-color: #4070f4;
    transition: all 0.3s linear;
    cursor: pointer;
}

.container1 form button,
.container1 form .backBtn {
    font-size: 16px;
    font-weight: 400;
}

form button:hover {
    background-color: #265df2;
}

form button i,
form .backBtn i {
    margin: 0 6px;
}

form .backBtn i {
    transform: rotate(180deg)
}

form .buttons {
    display: flex;
    align-items: center;
}

form .buttons button,
.backBtn {
    margin-right: 14px;
}

.nextBtn {
    display: flex;
    align-items: center;
    cursor: pointer;
}


@media (max-width: 750px) {
    .container1 form {
        overflow-y: scroll;
    }

    .container1 form::-webkit-scrollbar {
        display: none;
    }

    .container1 .form .input-field {

        width: calc(100% / 2 - 15px);

    }
}

@media (max-width: 550px) {
    .container1 .form .input-field {
        width: 100%;
    }
}

.removeskill {
    cursor: pointer;
}

.removeskill:hover {
    opacity: 0.7;
}

.resume {
    color: black;
}

/* .resume {
    position: fixed;
    display: flex;
    background-color: rgb(101, 110, 131);
    color: rgb(255, 255, 255);
    width: 50%;
    flex: 1 1 0%;


    /* position: fixed;
    top: 80px;
    bottom: 0px;
    right: 0px;
    width: 50%;
    flex: 1 1 0%;
    display: flex;

    -moz-box-align: center;
    align-items: center;
    -moz-box-pack: center;
    justify-content: center;
    flex-flow: column nowrap;
    background-color: rgb(101, 110, 131);
    color: rgb(255, 255, 255);
    user-select: none;
    z-index: 3; */
/* } */

*/
</style>

<body>

    <?php include 'header.php'?>
    <?php  include 'alert.php'?>



    <div class="container1">
        <header>Fill Your Details</header>

        <!-- <form action="partials/handleForm.php" method="post"> -->
        <!-- onsubmit="return setAction(this)" -->
        <form action="partials/handleForm.php" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="feilds">

                        <div class="input-field">
                            <label>Wanted Job title</label>
                            <input type="text" name="job-title" placeholder="Enter Job Title " required>
                        </div>

                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" name="full-name" placeholder="Enter Your Name" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Enter Email" required>
                        </div>

                        <div class="input-field">
                            <label>Phone</label>
                            <input type="text" placeholder="Phone Number" required>
                        </div>

                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" name="address" placeholder="Enter Address" required>
                        </div>

                        <div class="input-field">
                            <label>Date Of Birth</label>
                            <input type="Date" name="dob" placeholder="Enter Birth date " required>
                        </div>


                    </div>
                </div>


                <!-- education -->
                <div class="details education">
                    <span class="title">Education</span>
                    <!-- graduation -->
                    <span class="title2">Graduation :-</span>

                    <div class="feilds">

                        <div class="input-field">
                            <label>Course</label>
                            <input type="text" name="course" placeholder="Enter Job Title " required>
                        </div>

                        <div class="input-field">
                            <label>College Name</label>
                            <input type="text" name="clg-name" placeholder="Enter College Name" required>
                        </div>

                        <div class="input-field">
                            <label>Score</label>
                            <input type="text" name="clg-score" placeholder="Enter Marks in %" required>
                        </div>





                    </div>

                    <!-- 12th -->
                    <span class="title2">12th :-</span>
                    <div class="feilds">

                        <div class="input-field">
                            <label>Board Name</label>
                            <input type="text" name="HB-name" placeholder="Enter Board Name " required>
                        </div>

                        <div class="input-field">
                            <label>Collage Name</label>
                            <input type="text" name="HB-clg" placeholder="Enter College Name" required>
                        </div>

                        <div class="input-field">
                            <label>Score</label>
                            <input type="text" name="HB-score" placeholder="Enter Marks in %" required>
                        </div>

                    </div>

                    <!-- 12th -->
                    <span class="title2">10th :-</span>
                    <div class="feilds">

                        <div class="input-field">
                            <label>Board Name</label>
                            <input type="text" name="SB-name" placeholder="Enter Board Name " required>
                        </div>

                        <div class="input-field">
                            <label>Collage Name</label>
                            <input type="text" name="SB-clg" placeholder="Enter College Name" required>
                        </div>

                        <div class="input-field">
                            <label>Score</label>
                            <input type="text" name="SB-score" placeholder="Enter Marks in %" required>
                        </div>


                    </div>

                </div>
                <button class="nextBtn">
                    <span class="btnText">Next</span>
                    <i class="uil uil-navigator"></i>
                </button>

            </div>
        </form>
        <!-- </form> -->
    </div>
    <div class="resume">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, sapiente!
    </div>


    <script src="partials/form.js"></script>
    <script>
    $showError = false;
    $("#addskill").click(function() {
        var skill = $('#userskill').val();
        if (!skill) {
            // $showError = "Enter a Skill";
            <
            div class = "alert alert-success alert-dismissible fade show my-0"
            width = "100%"
            role = "alert" >
                Enter a Skill. <
                button type = "button"
            class = "btn-close"
            data - bs - dismiss = "alert"
            aria - label = "Close" > < /button> < /
            div >
                return;
        } else {


            $("#skills").append(
                '<span class="badge text-bg-danger p-1 m-1">"${skill}" <input type = "hidden" name = skill[]" value ="${skill}"/><span class="text-black removeskill" onclick = "removeskill(this)" >X</span></span>'
            );

            function removeskill(button) {
                $(button).parent().remove();
            }
        }
    });
    //    if(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true"){
    //         echo '<div class="alert alert-success alert-dismissible fade show my-0"  width="100%" role="alert">
    //                 <strong>Success!-</strong> You can now login.
    //                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //               </div>'
    </script>
</body>

</html>



backup
//
<!DOCTYPE html>
// <html lang="en">

//

<head>
    //
    <meta charset="UTF-8">
    //
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    //
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    //
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    // <script src="https://kit.fontawesome.com/95708bdd37.js" crossorigin="anonymous"></script>
    // <title>Form - ARB</title>
    // <script src="https://code.jquery.com/jquery-3.6.1.min.js" //
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    //
    <link rel="stylesheet" href="assets/css/form.css">
    //
</head>

//

<body>

    // <?php include 'header.php'?>
    // <?php  include 'alert.php'?>
    // <?php
//   @session_start();
// //  $tid =;
//  require ('partials/load.php');
// //  $action->session->set('tid',  $_GET['tid']);

// ?>
    // <div class="container1">
        // <header>Fill Your Details</header>

        // <form action="partials/handleForm.php" method="post" id="form">


            // <div class="form first">
                // <div class="details personal">
                    // <span class="title">Personal Details</span>

                    // <div class="feilds">

                        // <div class="input-field">
                            // <label>Desired Job title</label>
                            // <input type="text" name="headline" id="headline" placeholder="Enter Job Title ">
                            // <span class="errormsg"></span>
                            // <i class="icon " style="margin-left: 255px;"></i>

                            // </div>

                        // <div class="input-field">
                            // <label>Full Name</label>
                            // <input type="text" name="full_name" id="full_name" placeholder="Enter Your Name">
                            // <span class="errormsg"></span>
                            // <i class="icon " style="margin-left: 255px;"></i>
                            // </div>

                        // <div class="input-field">
                            // <label>Email</label>
                            // <input type="text" name="email" id="email" placeholder="Enter Email">
                            // <span class="errormsg"></span>
                            // <i class="icon " style="margin-left: 255px;"></i>

                            // </div>

                        // <div class="input-field">
                            // <label>Phone</label>
                            // <input type="number" name="mobile" id="mobile" placeholder="Phone Number">
                            // <span class="errormsg"></span>
                            // <i class="icon " style="margin-left: 255px;"></i>
                            // </div>

                        // <div class="input-field">
                            // <label>Address</label>
                            // <input type="text" name="address" id="address" placeholder="Enter Address">
                            // <span class="errormsg"></span>
                            // <i class="icon " style="margin-left: 255px;"></i>
                            // </div>

                        // <div class="input-field">
                            // <label>Date Of Birth</label>
                            // <input type="Date" name="dob" id="dob" placeholder="Enter Birth date ">
                            // <span class="errormsg"></span>
                            // <i class="icon " style="margin-left: 255px;"></i>
                            // </div>


                        // </div>
                    // </div>


                //
                <!-- education -->
                // <div class="details education">
                    // <span class="title">Education</span>
                    // <div id="education">

                        // </div>

                    // <div class="feilds">

                        // <div class="input-field">
                            // <label>Course / Board</label>
                            // <input type="text" id="Ctitle" placeholder="Enter course/board name ">
                            // </div>

                        // <div class="input-field">
                            // <label>College Name</label>
                            // <input type="text" id="Cname" placeholder="Enter College Name">
                            // </div>

                        // <div class="input-field">
                            // <label>Score</label>
                            // <input type="numberd" id="Cscore" placeholder="Enter Marks in %">
                            // </div>

                        // <div class="input-field">
                            // <label>Duration</label>
                            // <input type="text" id="Cdura" placeholder="2020-2024">

                            // </div>
                        // <div class="input-field" style="margin-right: 34%; ">
                            // <label style="opacity: 0;"> h</label>
                            // <button type="button" class=" " style="width: 70px; height: 41px;margin: 0; " //
                                id="addeducation">ADD</button>
                            // </div>


                        // </div>



                    // </div>

                //
            </div>

            //
            <!-- second -->
            // <div class="form second">
                // <div class="details education">
                    // <span class="title">Other Deatails</span>

                    //
                    <!-- graduation -->
                    // <span class="title2">Internship :-</span>
                    // <div id="internship">

                        // </div>
                    // <div class="feilds">

                        // <div class="input-field">
                            // <label>Company Name</label>
                            // <input type="text" placeholder="Company Name " id="IComp">
                            // </div>

                        // <div class="input-field">
                            // <label>Duration (Months)</label>
                            // <input type="text" placeholder="Enter Duration" id="Idura">
                            // </div>

                        // <div class="input-field">
                            // <label>Description</label>
                            // <input type="text" placeholder="Description" id="Idesp">
                            // </div>
                        // <button class="" type="button" style="width: 70px; height: 41px;margin: 0;" //
                            id="addinternship">ADD</button>

                        // </div>

                    //
                    <!-- 12th -->
                    // <span class="title2">Project :-</span>
                    // <div id="project"></div>

                    // <div class="feilds">

                        // <div class="input-field">
                            // <label>Project Name</label>
                            // <input type="text" id="Pname" placeholder="Enter Project Name ">
                            // </div>

                        // <div class="input-field">
                            // <label>Duration (Months)</label>
                            // <input type="text" id="Pdura" placeholder="Enter Duration">
                            // </div>

                        // <div class="input-field">
                            // <label>Description</label>
                            // <input type="text" id="Pdesp" placeholder="Description">
                            // </div>

                        // <button class="" type="button" style="width: 70px; height: 41px;margin: 0;" //
                            id="addproject">ADD</button>

                        // </div>

                    //
                    <!-- 12th -->
                    // <span class="title2">Specialization :-</span>
                    // <div class="feilds">

                        // <div class="input-field2" style="width: calc(100% / 3 - 15px);  margin-bottom: -34px;">
                            // <label>Skill</label>
                            // <div id="skills">

                                //
                                <!-- <input style="width: 88%;" type="text" value = "HTML" name = "skill[]" disabled  > -->
                                //
                            </div>

                            // <div class="input-group mb-3" style="gap: 6px;">
                                // <input type="text" style="height: 42px; margin-top: 27px;" id="userskill" //
                                    class="form-control w-full" placeholder="Enter Skills" //
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                // <div class="input-field2 ">
                                    // <button class="btn btn-primary " type="button" id="addskill">Add Skill</button>
                                    // </div>
                                // </div>
                            //
                            <!-- <input type="text" placeholder="Enter Skills" required> -->
                            //
                        </div>


                        // </div>
                    //
                    <!-- <span class="title2">Awards and Honor :-</span>
//                      <div class="feilds">
                        
//                         <div class="input-field">
                           
//                             <input type="text" placeholder="Enter Awards and Honor" required>
//                         </div>    

//                      </div> -->
                    //
                    <!-- <input type="submit" id="submit" value="Create Resume"> -->
                    // <div class="buttons" id="btnText">
                        // <button class="nextBtn " id="btnText" style="background-color: #f0ad4e;">
                            // <input type="submit" value="Create Resume">
                            // <i class="uil uil-navigator"></i>
                            // </button>
                        // </div>

                    //
                </div>

                // </div>



            //
        </form>

        //
        <!-- </form> -->

        //
    </div>
    // <script src="partials/form.js"></script>
    // <script>
    //     $("#addskill").click(function() {
    //         // console.log("click");
    //         var skill = document.getElementById("userskill");
    //         var skill = $('#userskill').val();
    //         if (!skill) {

    //             return;
    //         }
    //         $("#skills").append(
    //             `<span class="badge text-bg-danger p-2 m-1"> ${skill}<input type="hidden" name="skill[]" value='${skill}'/><span class="text-black removeskill" onclick = "removeskill(this)" >X</span></span>`
    //         )
    //         $('#userskill').val('');
    //     });

    //     function removeskill(button) {
    //         $(button).parent().remove();
    //     }


    //     $("#addinternship").click(function() {

    //         // var skill = document.getElementById("userskill"); 
    //         var company = $('#IComp').val();
    //         var Iduration = $('#Idura').val();
    //         var Idescription = $('#Idesp').val();
    //         if (!company || !Iduration || !Idescription) {

    //             return;
    //         }
    //         $("#internship").append(` <div  class="d-inline-block border rounded p-2 my-2   box-shadow: 0px 15px 20px rgba(0,0,0,0.1);" style="width: 440px;">
    //                                 <input type="hidden" name="company[]" value="${company}">
    //                                 <input type="hidden" name="duration[]" value=" ${Iduration}">
    //                                 <input type="hidden" name="description[]" value="${Idescription}">
    //                                     <p class=""> <strong>${company} </strong>  </p><p>| ${Iduration} <p>
    //                                     <p class="mt-1 mb-0 t "> <small>${Idescription}</small> </p>
    //                                     <button type="button" class="btn-danger"  style="width: 76px;height: 33px;margin: 14px;" onclick= "removeinternship(this)">Remove</button>
    //                             </div>`)
    //         $('#IComp').val('');
    //         $('#Idura').val('');
    //         $('#Idesp').val('');
    //     });

    //     function removeinternship(button) {
    //         $(button).parent().remove();

    //     }
    //     //education
    //     $("#addeducation").click(function() {

    //         // var skill = document.getElementById("userskill"); 
    //         var Ctitle = $('#Ctitle').val();
    //         var college = $('#Cname').val();
    //         var score = $('#Cscore').val();
    //         var duration = $('#Cdura').val();
    //         if (!Ctitle || !college || !score || !duration) {

    //             return;
    //         }
    //         $("#education").append(` <div popcard class="d-inline-block border rounded p-2 my-2   box-shadow: 0px 15px 20px rgba(0,0,0,0.1);" style="width: 280px; margin-right: 7px;">
    //                                     <input type="hidden" name="title[]" value="${Ctitle}">
    //                                     <input type="hidden" name="college[]" value="${college}">
    //                                     <input type="hidden" name="Cduration[]" value="${duration}">
    //                                     <input type="hidden" name="score[]" value=" ${score}">
    //                                     <p class=""> <strong> ${Ctitle} </strong> </p><p>| ${duration} <p>
    //                                     <p class="mt-1 mb-0 t "><small>College Name:</small> ${college}</p>
    //                                     <p  class="mt-1 mb-0 t "><small>Score:</small> ${score}%</p>
    //                                     <button type="button" class="btn-danger"  style="width: 76px;height: 33px;margin: 14px;" onclick= "removeeducation(this)">Remove</button>
    //                             </div>`)
    //         $('#Ctitle').val('');
    //         $('#Cname').val('');
    //         $('#Cscore').val('');
    //         $('#Cdura').val('');
    //     });

    //     function removeeducation(button) {
    //         $(button).parent().remove();

    //     }

    //     //project
    //     $("#addproject").click(function() {

    //         var name = $('#Pname').val();
    //         var duration = $('#Pdura').val();
    //         var description = $('#Pdesp').val();

    //         if (!name || !duration || !description) {

    //             return;
    //         }
    //         $("#project").append(`<div  class="d-inline-block border rounded p-2 my-2   box-shadow: 0px 15px 20px rgba(0,0,0,0.1);" style="width: 440px;">
    //                                     <input type="hidden" name="name[]" id="name[]" value="${name}">
    //                                     <input type="hidden" name="Pduration[]" value="${duration}">
    //                                     <input type="hidden" name="Pdespcription[]" value="${description}">
    //                                     <p class=""> <strong> ${name} </strong>  </p><p>| ${duration} <p>
    //                                     <p class="mt-1 mb-0 t "> <small>${description}</small> </p>
    //                                     <button type="button" class="btn-danger"  style="width: 76px;height: 33px;margin: 14px;" onclick= "removeproject(this)">Remove</button>
    //                             </div>`)
    //         $('#Pname').val('');
    //         $('#Pdura').val('');
    //         $('#Pdesp').val('');
    //     });

    //     function removeproject(button) {
    //         $(button).parent().remove();
    //     }






    //     // document.getElementById("btnText").addEventListener("click", function(event) {
    //     //     event.preventDefault();
    //     //     // alert("hello");
    //     //     checkData();
    //     // });
    //     // var job = document.getElementById("headline");
    //     // var number = document.getElementById("email");
    //     // var phone = document.getElementById('mobile');
    //     // var fullname = document.getElementById('full_name');
    //     // var address = document.getElementById('address');
    //     // var dob = document.getElementById('dob');


    //     // function sendDate(fullnameValue, Rate, count) {
    //     //     if (sRate === count) {
    //     //         location.href = `partials/handleForm.php`;
    //     //     }
    //     // }

    //     // //final validation
    //     // function successMsg(dobValue, addressValue, fullnameValue, phoneValue, numValue, jobValue) {
    //     //     let formCon = document.getElementsByClassName("input-field");
    //     //     count = 5;
    //     //     for (var i = 0; i < formCon.length; i++) {
    //     //         if (formCon[i].className === "input-field success") {
    //     //             var sRate = 0 + i;
    //     //             sendDate((dobValue, addressValue, fullnameValue, phoneValue, numValue, jobValue, sRate, count);
    //     //             }
    //     //             else {
    //     //                 return false
    //     //             }
    //     //         }
    //     //     }


    //     //     const isEmail = (numValue) => {
    //     //         var reg =
    //     //             /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    //     //         return reg.test(numValue);
    //     //         // var atSymbol = numValue.indexOf("@");
    //     //         // if (atSymbol < 1) return false;
    //     //         // var dot = numValue.lastIndexOf(".");
    //     //         // if (dot <= atSymbol + 2) return false;
    //     //         // if (dot === numValue.length - 1) return false;
    //     //         // return true;
    //     //     }

    //     //     function checkData() {
    //     //         var jobValue = job.value.trim();

    //     //         if (jobValue === "") {
    //     //             setError(job, "Job Title can't be blank");
    //     //         } else {
    //     //             setSuccess(job);
    //     //         }

    //     //         var numValue = number.value.trim();
    //     //         if (numValue === "") {
    //     //             setError(email, "Email cannot be blank");
    //     //         } else if (!isEmail(numValue)) {
    //     //             setError(email, "Not a Valid Email");
    //     //         } else {
    //     //             setSuccess(email);
    //     //         }

    //     //         var phoneValue = phone.value.trim();
    //     //         if (phoneValue === "") {
    //     //             setError(phone, "Phone number can't be blank");
    //     //         } else if (!phoneValue.match(/^\d{10}$/)) {
    //     //             setError(phone, "Not a Valid Phone Number");
    //     //         } else {
    //     //             setSuccess(phone);
    //     //         }

    //     //         var fullnameValue = fullname.value.trim();
    //     //         if (fullnameValue === "") {
    //     //             setError(fullname, "Full Name can't be blank");
    //     //         } else {
    //     //             setSuccess(fullname);
    //     //         }

    //     //         var addressValue = address.value.trim();
    //     //         if (addressValue === "") {
    //     //             setError(address, "Address can't be blank");
    //     //         } else {
    //     //             setSuccess(address);
    //     //         }

    //     //         var dobValue = dob.value.trim();
    //     //         if (dobValue === "") {
    //     //             setError(dob, "Birth Day can't be blank");
    //     //         } else {
    //     //             setSuccess(dob);
    //     //         }
    //     //         successMsg(dobValue, addressValue, fullnameValue, phoneValue, numValue, jobValue);

    //     //     }

    //     //     function setError(j, msg) {
    //     //         var parentBox = j.parentElement;
    //     //         parentBox.className = "input-field error";
    //     //         var span = parentBox.querySelector("span");
    //     //         span.innerText = msg;
    //     //         var icon = parentBox.querySelector(".icon");
    //     //         icon.className = "icon fa-sharp fa-solid fa-circle-exclamation";
    //     //     }

    //     //     function setSuccess(j) {
    //     //         var parentBox = j.parentElement;
    //     //         parentBox.className = "input-field success";
    //     //         var icon = parentBox.querySelector(".icon");
    //     //         icon.className = "icon fa-sharp fa-solid fa-square-check";
    //     //         var span = parentBox.querySelector("span");
    //     //         span.innerText = "";
    //     //         // span.remove();

    //     //     }

    //     // function setError(n, msg) {
    //     //     var parentBox = n.parentElement;
    //     //     parentBox.className = "input-field error";
    //     //     var span = parentBox.querySelector("span");
    //     //     span.innerText = msg;
    //     //     var icon = parentBox.querySelector(".icon");
    //     //     icon.className = "icon fa-sharp fa-solid fa-circle-exclamation";
    //     // }

    //     // function setSuccess(n) {
    //     //     var parentBox = n.parentElement;
    //     //     parentBox.className = "input-field success";
    //     //     var icon = parentBox.querySelector(".icon");
    //     //     icon.className = "icon fa-sharp fa-solid fa-square-check";
    //     // }
    //     // const form = document.getElementById('form');
    //     // const email = document.getElementById('email');
    //     // const title = document.getElementById('headline');
    //     // const full_name = document.getElementById('full_name');
    //     // const phone = document.getElementById('mobile');


    //     // // //add event
    //     // form.addEventListener('submit', (event) => {
    //     //     event.preventDefault();
    //     //     alert("hello");
    //     //     validate();
    //     // });

    //     // const isEmail = (emailVal) => {
    //     //     var atSymbol = rmailVal.indexOf("@");
    //     //     if (atSymbol < 1) return false;
    //     //     var dot = emailVal.lastIndexOf(".");
    //     //     if (dot <= atSymbol + 2) return false;
    //     //     if (dot === emailVal.length - 1) return false;
    //     //     return true;
    //     // }
    //     // //validate function

    //     // const validate = () => {
    //     //     const emailVal = email.value.trim();
    //     //     const titleVal = title.value.trim();
    //     //     const full_nameVal = full_name.value.trim();
    //     //     const phoneVal = phone.value.trim();

    //     //     //validate title
    //     //     if (titleVal === "") {
    //     //         setError(title, "Title cannot be blank");
    //     //     } else if (titleVal.length <= 3) {
    //     //         setError(title, "Title min 5 char");
    //     //     } else {
    //     //         setSuccess(title);
    //     //     }

    //     //     //validate email
    //     //     if (emailVal === "") {
    //     //         setError(email, "Email cannot be blank");
    //     //     } else if (!isEmail(emailVal)) {
    //     //         setError(email, "Not a Valid Email");
    //     //     } else {
    //     //         setSuccess(email);
    //     //     }
    //     // }



    //     // function setError(input, msg) {
    //     //     const parentBox = input.parentElement;
    //     //     parentBox.className = "input-field error";
    //     //     const span = parentBox.querySelector("span");
    //     //     span.innerText = msg;
    //     //     var icon = parentBox.querySelector(".icon");
    //     //     icon.className = "icon fa-sharp fa-solid fa-circle-exclamation";
    //     // }
    //     
    </script>



    // </body>

//

</html>