<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- CSS only -->
 <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
 <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>


</head>
<style>
   *{
    margin :0;
    padding: 0;
}
   .demo{
    display: flex;
    align-items: center;
    justify-content: center;
    /* position: sticky; */
    top: 0;
    cursor: pointer;
    height: 90px;
    width:100%
}
.logo{
   width: 30px;
   display: flex;
   justify-content: center;
    
}
.logo img{
    width: 60px;
    margin-top: 5px; 
    margin-left: 4px;
   
}
.nav-list{
    width: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 10px;
}
.nav-list li{
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
.rightnav{
    width: 50%;
    text-align: right;
}
.btnlogin{
    padding: 8px 20px;
    margin: 7px 0;
    border: 1px white;
    border-radius: 9px;
    font-size: 15px;
    background: none;
    color:white;
}
.btnlogin:hover{
    color: rgb(0, 0, 0);
}
.btnsignup{
    padding: 14px 20px;
    margin: 10px 15px;
    border: 1px  white;
    border-radius: 9px;
    font-size: 15px;
    background-color: rgba(6, 91, 127, 0.959);
    color: white;
}
.btnsignup:hover{
    /* background-color: blue; */
    color: black;
}
.background{
    /* background-color: rgba(0, 0, 0, 0.7); */
    /* background-color: rgb(3, 114, 99); */
    background-color: #1f262E;
    /* background-size: cover;
    background-blend-mode: darken; */
}

</style>
<body>
    <nav class="demo background">
        <ul class="nav-list">
            <div class="logo"><img src="../img/logo.png" alt=""></div>
           <li><a href="index.php" >Home</a></li>
           <li><a href="#about">About</a></li>
           <li><a href="#contact" >ContactUs</a></li>
           <li><a href= "tempates.php">Templates</a></li>
        </ul>
        <div class="rightnav">
            <a href="dashboard.php"> <button class="btnlogin btn-sm" data-bs-toggle="modal" data-bs-target="#signupModal">LOGIN</button></a>
          <a href="partials/signup.php"><button class="btnsignup btn-sm">SIGN UP</button></a>
        </div>
     </nav>
     
</body>
</html>