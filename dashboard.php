<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <title>Automatic Resume Builder</title>
    <script src="https://kit.fontawesome.com/95708bdd37.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

</head>
<style>
.navbar {
    display: flex;
    align-items: center;
    justify-content: center;
    position: sticky;
    top: 0;
    cursor: pointer;
    height: 90px;


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
    font-size: 15px;
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

.container i {
    margin: 0 7px;
}
</style>

<body>
    <?php session_start(); ?>
    <?php include 'header.php' ?>
    <?php include 'alert.php' ?>
    <?php
//   require ('partials/load.php');
//      $key = $_GET['useremail'];
//      $sql = "SELECT * FROM `users`where `email`= '$key' ";
//      $result = mysqli_query( $this->connection ,$sql);
//      if(isset( $_SESSION['loggedin']) &&  $_SESSION['loggedin'] == true){
//      while($row = mysqli_fetch_assoc($result)){
//       $username = $row['full_name']; 

//     //   $signup_data=$action->db->clean($_POST['useremail']);
//     //   $action->db->read('users','full_name, email,password',$signup_data);
//     }
// }
// $sql = $action->db->read('resumes','*',"WHERE user_id = .$action->user_id()");
// print_r($sql);

  ?>

    <div class="container">
        <div class="card text-center my-4">
            <div class="card-body dashboard_head">
                <h3 class="card-userName">Welcome To Resume Builder </h3>
                <p class="card-text">Let us manage your resume.</p>
                <a href="templetes.php" class=" btn-create btn btn-primary"><i class="fa-solid fa-square-plus"></i>
                    Create New Resume</a>
            </div>
        </div>
        <?php
            //  print_r($_SESSION); 
                require ('partials/load.php');
                // $tid = $action->session->get('tid');
                $user_id = $action->session->get('user_id')['data']['user_id'];
                $tid = $action->session->get('tid');
                include ('partials/dbconnect2.php');
                $noresults = true;
                $sql = "SELECT * FROM `resumes` WHERE user_id = $user_id";
                $result = mysqli_query( $conn ,$sql);
                while($row = mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $full_name = $row['full_name'];
                $headline = $row['headline'];
                $tid = $row['tid'];
                $url = $row['url'];
                $copyurl =" resumes/resume-2.php?url='. $url .'";
                $noresults = false;
                echo '  <div class="card my-4 ">
                         <div class="card-body m-2">
                            <h5 class="card-title ">'. $headline .'</h5>
                            <a href="resumes/resume-4.php?url='. $url .'" class="btn btn-secondary m-2" type="button"><i class="fa-solid fa-eye"></i>View</a>
                            <a href="partials/handledelete.php?url='. $url .'" class="btn btn-danger m-2" type="button"><i class="fa-solid fa-trash"></i>Delete</a>
                           


    </div>
    </div>';
                            // <a href="#" class="btn btn-primary m-2" type="button"><i class="fa-solid fa-pen"></i>Edit</a>

    }
    if($noresults){
    echo' <div class="card my-4 ">
        <div class="card-body m-2">
            <h1 class="text-center text-muted">No Resume Available</h1>
        </div>
    </div>';
    }

    ?>
    </div>




</body>
<!-- <script>
function copyurl(copyurl) {
    navigator.clipboard.writeText(copyurl);
}
</script> -->

</html>