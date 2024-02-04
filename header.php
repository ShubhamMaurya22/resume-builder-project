<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <link rel="icon" href="img/resume.png">
    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


</head>
<style>
/* @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"); */
* {
    margin: 0;
    padding: 0;
}

.demo {
    display: flex;
    align-items: center;
    justify-content: center;
    /* position: sticky; */
    top: 0;
    cursor: pointer;
    height: 90px;
    width: 100%;

}

.logo {
    width: 30px;
    display: flex;
    justify-content: center;

}

.logo img {
    width: 60px;
    margin-top: 5px;
    margin-left: 4px;

}

.nav-list {
    width: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 10px;
}

.nav-list li {
    list-style: none;
    padding: 21px 22px;
    margin-left: 20px;
}

.nav-list li a {
    text-decoration: none;
    color: white;
    font-size: 20px;
    font-family: Serif;

}

.nav-list li a:hover {
    color: rgb(0, 0, 0);

}

.rightnav {
    width: 50%;
    text-align: right;
}

.btnlogin {
    padding: 8px 20px;
    margin: 7px 0;
    border: 1px white;
    border-radius: 9px;
    font-size: 17px;
    background: none;
    color: white;
}

.btnlogin:hover {
    color: rgb(0, 0, 0);
}

.btnsignup {
    padding: 14px 20px;
    margin: 10px 15px;
    border: 1px white;
    border-radius: 9px;
    font-size: 15px;
    background-color: rgba(6, 91, 127, 0.959);
    color: white;
}

.btnsignup:hover {
    /* background-color: blue; */
    color: black;
}

.background {
    /* background-color: rgba(0, 0, 0, 0.7); */
    /* background-color: rgb(3, 114, 99); */
    background-color: #1f262E;
    /* background-size: cover;
    background-blend-mode: darken; */
}

.alert {
    width: 100%;
}
</style>

<body>

    <?php 
// require ('partials/load.php');
echo '
    <nav class="demo background">
        <ul class="nav-list">
            <div class="logo"><img src="img/logo.png" alt=""></div>
           <li><a href="home.php" >Home</a></li>
           <li><a href="about.php">About</a></li>
           <li><a href="contact.php" >ContactUs</a></li>
           <li><a href= "templetes.php">Templates</a></li>
        </ul>';

        
        if(isset( $_SESSION['loggedin']) &&  $_SESSION['loggedin'] == true){
            echo ' <div class="rightnav">
            <a href="partials/logout.php"><button class="btnlogin btn-sm  " ><i class="bi bi-box-arrow-left"></i>  Logout</button></a>
          <a href="dashboard.php"><button class="btnsignup btn-sm"><i class="bi bi-person-circle"></i>  My Account</button></a>
        </div>';
            
        }else{
            echo ' <div class="rightnav">
            <a href="partials/logout.php"><button class="btnlogin btn-sm  " ><i class="bi bi-box-arrow-left"></i>  Logout</button></a>
          <a href="dashboard.php"><button class="btnsignup btn-sm"><i class="bi bi-person-circle"></i>  My Account</button></a>
        </div>';
        }
       
     echo '</nav>';
    
  
    if(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] =="true"){
        echo '<div class="alert alert-success alert-dismissible fade show my-0"  width="100%" role="alert">
                <strong>Success!-</strong> You can now login.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
    }elseif(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] =="false"){
            echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
                     '.$_GET['error'].'.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>';
    }elseif (isset($_GET['loginsuccess'] )&& $_GET['loginsuccess'] == "false") {
            echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
            <strong>Sorry!</strong> Unable to Login. Please check your username & password.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
    }

?>


</body>

</html>