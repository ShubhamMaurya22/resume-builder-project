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

 </head>

 <body>


     <?php
      // if(isset( $_SESSION['loggedin']) &&  $_SESSION['loggedin'] == true){
      //       echo '<a href="#"><button class="btnsignup btn-sm">My Account</button></a>';
          
      //   }else{
      //       echo ' <div class="rightnav">
      //       <a href="dashboard.php"> <button class="btnlogin btn-sm" data-bs-toggle="modal" data-bs-target="#signupModal">LOGIN</button></a>
      //     <a href="signup.php"><button class="btnsignup btn-sm">SIGN UP</button></a>
      //   </div>';

        // }
  
    
    //  if(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] =="true"){
    //     echo '<div class="alert alert-success alert-dismissible fade show my-0"  width="100%" role="alert">
    //             <strong>Success!-</strong> You can now login.
    //             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //           </div>';
    //   }else{
    //     if(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] =="false"){
    //         echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
    //                  '.$_GET['error'].'.
    //                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //               </div>';
    //   }
    // }
    // if(isset($_GET['loginsuccess'] )&& $_GET['loginsuccess'] == "false"){
    //     echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
    //     <strong>Sorry!</strong> Unable to Login. Please check your username & password.
    //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //   </div>';
        
    //   }else{
    //     echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
    //    Succesfully Loggedin
    //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //   </div>';
    //   }
  
    if(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true"){
        echo '<div class="alert alert-success alert-dismissible fade show my-0"  width="100%" role="alert">
                <strong>Success!-</strong> You can now login.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
    }elseif(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "false"){
            echo '<div class="alert alert-danger alert-dismissible fade show my-0"  width="100%" role="alert">
                     '.$_GET['error'].'. 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>';
    }elseif(isset($_GET['resume']) && $_GET['resume'] == "false"){
      echo '<div class="alert alert-danger alert-dismissible fade show my-0"  width="100%" role="alert">
               '.$_GET['error'].'. 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div>';
}
    elseif (isset($_GET['loginsuccess'] )&& $_GET['loginsuccess'] == "false") {
            echo '<div class="alert alert-danger alert-dismissible fade show my-0"  width="100%" role="alert" id="success-alert">
            <strong>Sorry!</strong> Unable to Login. Please check your Email & password.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
    }elseif(isset($_GET['resumesuccess'] )&& $_GET['resumesuccess'] == "true"){
          echo '<div class="alert alert-success alert-dismissible fade show my-0"  width="100%" role="alert">
          <strong>Resume Created!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
    }elseif(isset($_GET['resumesuccess'] )&& $_GET['resumesuccess'] == "false"){
      echo '<div class="alert alert-danger alert-dismissible fade show my-0"  width="100%" role="alert">
      <strong>Something went wrong ,try again</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
}elseif(isset($_GET['logoutsuccess'] )&& $_GET['logoutsuccess'] == "true"){
  echo '<div class="alert alert-danger alert-dismissible fade show my-0"  width="100%" role="alert">
  <strong>You are Logged out.</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}elseif(isset($_GET['rdelete'] )&& $_GET['rdelete'] == "true"){
  echo '<div class="alert alert-danger alert-dismissible fade show my-0"  width="100%" role="alert">
  <strong>Resume Deleted.</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}elseif(isset($_GET['c'] )&& $_GET['c'] == "true"){
  echo '<div class="alert alert-success alert-dismissible fade show my-0"  width="100%" role="alert">
  <strong>Our Team will get back to you within 24 hours.</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
elseif(isset($_GET['e'] )){
  echo '<div class="alert alert-danger alert-dismissible fade show my-0"  width="100%" role="alert">
  '.$_GET['e'].'. 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
?>
 </body>
 <script>

 </script>

 </html>