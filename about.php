<!DOCTYPE html>
<html>

<head>
    <title>About Us </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap');

* {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.section {
    width: 100%;
    min-height: 83vh;
    background-color: #ddd;
}

.container {
    width: 80%;
    display: block;
    margin: auto;
    padding-top: 100px;
}

.content-section {
    float: left;
    width: 55%;
}

.image-section {
    float: right;
    width: 40%;
}

.image-section img {
    width: 100%;
    height: auto;
}

.content-section .title {
    text-transform: uppercase;
    font-size: 28px;
}

.content-section .content h3 {
    margin-top: 20px;
    color: #5d5d5d;
    font-size: 21px;
}

.content-section .content p {
    margin-top: 10px;
    font-family: sans-serif;
    font-size: 18px;
    line-height: 1.5;
}

.content-section .content .button {
    margin-top: 30px;
}

.content-section .content .button a {
    background-color: #3d3d3d;
    padding: 12px 30px;
    text-decoration: none;
    color: #fff;
    font-size: 20px;
    letter-spacing: 1.5px;
}

.content-section .content .button a:hover {
    background-color: #a52a2a;
    color: #fff;
}

.content-section .social {
    margin: 40px 40px;
}

.content-section .social i {
    color: #a52a2a;
    font-size: 30px;
    padding: 0px 10px;
}

.content-section .social i:hover {
    color: #3d3d3d;
}

@media screen and (max-width: 768px) {
    .container {
        width: 80%;
        display: block;
        margin: auto;
        padding-top: 50px;
    }

    .content-section {
        float: none;
        width: 100%;
        display: block;
        margin: auto;
    }

    .image-section {
        float: none;
        width: 100%;

    }

    .image-section img {
        width: 100%;
        height: auto;
        display: block;
        margin: auto;
    }

    .content-section .title {
        text-align: center;
        font-size: 19px;
    }

    .content-section .content .button {
        text-align: center;
    }

    .content-section .content .button a {
        padding: 9px 30px;
    }

    .content-section .social {
        text-align: center;
    }

}
</style>

<body>
    <?php include 'header.php' ?>

    <div class="section">
        <div class="container">
            <div class="content-section">
                <div class="title">
                    <h1>About Us</h1>
                </div>
                <div class="content">
                    <h3><strong>Our resume builder is 100% free to use.</strong> </h3>
                    <p>Our mission is to help job seekers <strong> grow careers</strong>.
                        We love helping people stand out in their job search and get hired faster.</p>
                    <div class="button">
                        <a href="templetes.php">View Templates</a>
                    </div>
                </div>
                <!-- <div class="social">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                </div> -->
            </div>
            <div class="image-section">
                <img src="img/contact.jpeg">
            </div>
        </div>
    </div>


</body>

</html>