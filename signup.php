<!DOCTYPE html>
<!-- Created By Vinay -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login and Registration Form</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="stylesheet" href="css only modal.css">
</head>
<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.text {
    display: flex;
    justify-content: center;
    margin-left: 50%;
}

html,
body {
    display: grid;
    height: 100%;
    width: 100%;
    place-items: center;
    /* background: -webkit-linear-gradient(left, #a445b2, #fa4299); */
}

.wrapper {
    overflow: hidden;
    max-width: 390px;
    background: #fff;
    padding: 25px;
    border-radius: 5px;
    margin-left: 30%;
    box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.1);

}

.wrapper .title-text {
    display: flex;
    width: 200%;
}

.title-text img {
    opacity: 1;
}

.wrapper .title {
    width: 50%;
    font-size: 35px;
    font-weight: 600;
    text-align: center;
    transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .slide-controls {
    position: relative;
    display: flex;
    height: 50px;
    width: 100%;
    overflow: hidden;
    margin: 30px 0 10px 0;
    justify-content: space-between;
    border: 1px solid lightgrey;
    border-radius: 5px;

}

.slide-controls .slide {
    height: 100%;
    width: 100%;
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    text-align: center;
    line-height: 48px;
    cursor: pointer;
    z-index: 1;
    transition: all 0.6s ease;

}

.slide-controls label.signup {
    color: #000;
}

.slide-controls .slider-tab {
    position: absolute;
    height: 100%;
    width: 50%;
    left: 0;
    z-index: 0;
    border-radius: 5px;
    background: -webkit-linear-gradient(left, #a445b2, #fa4299);
    transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

input[type="radio"] {
    display: none;
}

#signup:checked~.slider-tab {
    left: 50%;
}

#signup:checked~label.signup {
    color: #fff;
    cursor: default;
    user-select: none;
}

#signup:checked~label.login {
    color: #000;
}

#login:checked~label.signup {
    color: #000;
}

#login:checked~label.login {
    cursor: default;
    user-select: none;
}

.wrapper .form-container {
    width: 100%;
    overflow: hidden;
}

.form-container .form-inner {
    display: flex;
    width: 200%;
}

.form-container .form-inner form {
    width: 50%;
    transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.form-inner form .field {
    height: 50px;
    width: 100%;
    margin-top: 20px;
}

.form-inner form .field input {
    height: 100%;
    width: 100%;
    outline: none;
    padding-left: 15px;
    border-radius: 5px;
    border: 1px solid lightgrey;
    border-bottom-width: 2px;
    font-size: 17px;
    transition: all 0.3s ease;
}

.form-inner form .field input:focus {
    border-color: #fc83bb;
    /* box-shadow: inset 0 0 3px #fb6aae; */
}

.form-inner form .field input::placeholder {
    color: #999;
    transition: all 0.3s ease;
}

form .field input:focus::placeholder {
    color: #b3b3b3;
}

.form-inner form .pass-link {
    margin-top: 5px;
}

.form-inner form .signup-link {
    text-align: center;
    margin-top: 30px;
}

.form-inner form .pass-link a,
.form-inner form .signup-link a {
    color: #fa4299;
    text-decoration: none;
}

.form-inner form .pass-link a:hover,
.form-inner form .signup-link a:hover {
    text-decoration: underline;
}

form .btn {
    height: 50px;
    width: 100%;
    border-radius: 5px;
    position: relative;
    overflow: hidden;
}

form .btn .btn-layer {
    height: 100%;
    width: 300%;
    position: absolute;
    left: -100%;
    background: -webkit-linear-gradient(right, #a445b2, #fa4299, #a445b2, #fa4299);
    border-radius: 5px;
    transition: all 0.4s ease;
    ;
}

form .btn:hover .btn-layer {
    left: 0;
}

form .btn input[type="submit"] {
    height: 100%;
    width: 100%;
    z-index: 1;
    position: relative;
    background: none;
    border: none;
    color: #fff;
    padding-left: 0;
    border-radius: 5px;
    font-size: 20px;
    font-weight: 500;
    cursor: pointer;
}

.signupForm {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    max-width: 90%;
    margin: auto;
    height: 80%;
    margin: 3%;
}

.firsthalf {
    /* width: 40%; */
    display: flex;
    justify-content: center;
    flex-direction: column;
    margin-top: 8%;
    margin-left: 30%;

}

.secondhalf {
    /* width: 60%; */
    margin-right: 30px;
    margin-top: 10%;
    margin-left: 6rem;
}

.signupForm .text {
    width: 100%;
    display: flex;
    justify-content: left;
}

.bigText {
    display: flex;
    justify-content: center;
    margin-bottom: 15px;
}

.item {

    margin-bottom: 2.5rem;
    margin-left: 2.5rem;
}

.item img {
    width: 45px;
}

.button {
    display: flex;
    justify-content: center;
    width: 20%;
}

.iteminfo {
    display: flex;

}

.Btn-main {
    border: 2px solid black;
    background-color: wheat;
    border-radius: 7px;
    color: black;
    padding: 10px;
}
</style>

<body>

    <?php include 'partials/load.php' ?>
    <?php include 'alert.php'?>

    <div class="signupForm">
        <div class="firstHalf" style="width: 60%;">
            <h3 class="bigText">Create a resume you proud of</h3>
            <div class="item">
                <img src="../img/save-time.png" alt="">
                <div class="iteminfo">
                    <p>Save time with hassle free templates</p>
                </div>
            </div>
            <div class="item">
                <img src="../img/snap.png" alt="">
                <div class="iteminfo">
                    <p>Resume writing made easy</p>
                </div>
            </div>
            <div class="item">
                <img src="../img/trophy.png" alt="">
                <div class="iteminfo">
                    <p>Make a resume that wins interviews</p>
                </div>
            </div>
            <div class="item">
                <a href="../tempates.php">
                    <button class="Btn-main">View Templetes</button>
                </a>
            </div>
        </div>
        <div class="secondHalf" style="width: 60%;">
            <!-- <div class="wrapper  "  data-aos="fade-up"> -->
            <div class="wrapper">
                <div class="title-text">
                    <div class="title login">
                        Login Form
                    </div>
                    <div class="title signup">
                        Signup Form
                    </div>
                </div>
                <div class="form-container ">
                    <div class="slide-controls">
                        <input type="radio" name="slide" id="login" checked>
                        <input type="radio" name="slide" id="signup">
                        <label for="login" class="slide login">Login</label>
                        <label for="signup" class="slide signup">Signup</label>
                        <div class="slider-tab"></div>
                    </div>
                    <div class="form-inner">
                        <form action="partials/handleSignup.php" method="post" class="login">
                            <div class="field">
                                <input type="text" name="email" placeholder="Email Address" required>
                            </div>
                            <div class="field">
                                <input type="password" name="password" placeholder="Password" required>
                            </div>
                            <div class="pass-link">
                                <a href="#">Forgot password?</a>
                            </div>
                            <div class="field btn">
                                <div class="btn-layer"></div>
                                <input type="submit" value="Login">
                            </div>
                            <div class="signup-link">
                                Not a member? <a href="">Signup now</a>
                            </div>
                        </form>
                        <form action="partials/handleSignup.php" method="post" class="signup">
                            <div class="field">
                                <input type="name" name="full_name" placeholder="Full Name">
                            </div>
                            <div class="field">
                                <input type="email" name="email" placeholder="Email Address" required>
                            </div>
                            <div class="field">
                                <input type="password" name="password" placeholder="Password" required>
                            </div>
                            <!-- <div class="field">
                        <input type="password" placeholder="Confirm password" required>
                    </div> -->
                            <div class="field btn">
                                <div class="btn-layer"></div>
                                <input type="submit" value="Signup">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>
    const loginText = document.querySelector(".title-text .login");
    const loginForm = document.querySelector("form.login");
    const loginBtn = document.querySelector("label.login");
    const signupBtn = document.querySelector("label.signup");
    const signupLink = document.querySelector("form .signup-link a");
    signupBtn.onclick = (() => {
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
    });
    loginBtn.onclick = (() => {
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
    });
    signupLink.onclick = (() => {
        signupBtn.click();
        return false;
    });
    </script>
    <!-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
       <script>
             AOS.init();
       </script> -->

</body>

</html>