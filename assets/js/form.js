function validateForm() {
    var returnVal = true;
    // clearErrors();
    //perfrom validation....-->

    var headline = document.forms['form']['headline'].value
    var fullname = document.forms['form']['full_name'].value
    var email = document.forms['form']['email'].value
    var phone = document.forms['form']['mobile'].value
    var address = document.forms['form']['address'].value
    var dob = document.forms['form']['dob'].value


    if (!isNaN(headline)) {
        seterror("headline1", "*Title can't be a Number");
        returnVal = false;
    } else {
        clearErrors("headline1");
        // returnVal = true;

    }

    if (!isNaN(fullname)) {
        seterror("full_name1", "*Name can't be a Number");
        returnVal = false;
    } else {
        clearErrors("full_name1");
        // returnVal = true;
    }
    // //email 
    var re = /\S+@\S+\.\S+/;
    if (!email.match(re)) {
        seterror("email1", "*Not valid Email Address.");
        returnVal = false;
    } else {
        clearErrors("email1");
        // returnVal = true;
    }
    // //mobile number
    if (phone.length != 10) {
        seterror("mobile1", "*Not valid Phone Number.");
        returnVal = false;
    } else {
        clearErrors("mobile1");
        // returnVal = true;
    }
    // //address
    // if (address.length < 10) {
    //     seterror("address1", "*Address is too short");
    //     returnVal = false;
    // } else {
    //     clearErrors("address1");
    //     returnVal = true;
    // }


    var skill = document.getElementById("userskill");
    if (skill = "") {
        seterror("eskill", "*Skill required");
        returnVal = false;
    } else {
        clearErrors("eskill");
        returnVal = true;
    }


    return returnVal;

}

    $("#addskill").click(function() {
console.log("skill");
    // var skill = document.getElementById("userskill"); 
    var skill = $('#userskill').val();
    if (!skill) {

    return;
    }
    $("#skills").append(
    `<span class="badge text-bg-danger p-2 m-1"> ${skill}<input type="hidden" name="skill[]" value='${skill}'/><span class="text-black removeskill" onclick = "removeskill(this)" >X</span></span>`
    )
    $('#userskill').val('');
    });

    function removeskill(button) {
    $(button).parent().remove();
    }


    $("#addinternship").click(function() {

    // var skill = document.getElementById("userskill"); 
    var company = $('#IComp').val();
    var Iduration = $('#Idura').val();
    var Idescription = $('#Idesp').val();
    if (!company || !Iduration || !Idescription) {

    return;
    }
    $("#internship").append(` <div  class="d-inline-block border rounded p-2 my-2   box-shadow: 0px 15px 20px rgba(0,0,0,0.1);" style="width: 440px;">
                        <input type="hidden" name="company[]" value="${company}">
                        <input type="hidden" name="duration[]" value=" ${Iduration}">
                        <input type="hidden" name="description[]" value="${Idescription}">
                            <p class=""> <strong>${company} </strong>  </p><p>| ${Iduration} <p>
                            <p class="mt-1 mb-0 t "> <small>${Idescription}</small> </p>
                            <button type="button" class="btn-danger"  style="width: 76px;height: 33px;margin: 14px;" onclick= "removeinternship(this)">Remove</button>
                    </div>`)
    $('#IComp').val('');
    $('#Idura').val('');
    $('#Idesp').val('');
    });

    function removeinternship(button) {
    $(button).parent().remove();

    }
    //education
    $("#addeducation").click(function() {
    // var skill = document.getElementById("userskill"); 
    var Ctitle = $('#Ctitle').val();
    var college = $('#Cname').val();
    var score = $('#Cscore').val();
    var duration = $('#Cdura').val();
    if (!Ctitle || !college || !score || !duration) {

    return;
    }
    $("#education").append(` <div popcard class="d-inline-block border rounded p-2 my-2   box-shadow: 0px 15px 20px rgba(0,0,0,0.1);" style="width: 280px; margin-right: 7px;">
                            <input type="hidden" name="title[]" value="${Ctitle}">
                            <input type="hidden" name="college[]" value="${college}">
                            <input type="hidden" name="Cduration[]" value="${duration}">
                            <input type="hidden" name="score[]" value=" ${score}">
                            <p class=""> <strong> ${Ctitle} </strong> </p><p>| ${duration} <p>
                            <p class="mt-1 mb-0 t "><small>College Name:</small> ${college}</p>
                            <p  class="mt-1 mb-0 t "><small>Score:</small> ${score}%</p>
                            <button type="button" class="btn-danger"  style="width: 76px;height: 33px;margin: 14px;" onclick= "removeeducation(this)">Remove</button>
                    </div>`)
    $('#Ctitle').val('');
    $('#Cname').val('');
    $('#Cscore').val('');
    $('#Cdura').val('');
    });

    function removeeducation(button) {
    $(button).parent().remove();

    }

    //project
    $("#addproject").click(function() {

    var name = $('#Pname').val();
    var duration = $('#Pdura').val();
    var description = $('#Pdesp').val();

    if (!name || !duration || !description) {

    return;
    }
    $("#project").append(`<div  class="d-inline-block border rounded p-2 my-2   box-shadow: 0px 15px 20px rgba(0,0,0,0.1);" style="width: 440px;">
                            <input type="hidden" name="name[]" id="name[]" value="${name}">
                            <input type="hidden" name="Pduration[]" value="${duration}">
                            <input type="hidden" name="Pdespcription[]" value="${description}">
                            <p class=""> <strong> ${name} </strong>  </p><p>| ${duration} <p>
                            <p class="mt-1 mb-0 t "> <small>${description}</small> </p>
                            <button type="button" class="btn-danger"  style="width: 76px;height: 33px;margin: 14px;" onclick= "removeproject(this)">Remove</button>
                    </div>`)
    $('#Pname').val('');
    $('#Pdura').val('');
    $('#Pdesp').val('');
    });

    function removeproject(button) {
    $(button).parent().remove();
    }