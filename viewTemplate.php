<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ARB- Templetes</title>
    <link rel="icon" href="img/resume.png">
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
* {
    margin: 0;
    padding: 0;
}

.tamplets-container {
    gap: 2rem;
    height: 100px;

}

.display-templates {
    border-radius: 1rem;
    background-color: black;
}

.display-templates:hover img {
    /* transform: scale(1.1) */
}

.card-body {
    margin-left: 30px;

}

.templete_img {
    margin: 20px;
    border-radius: 1rem;

}

.templete_img:hover {
    transform: scale(1.1);
}

.card-title {
    display: flex;
    justify-content: left;
    color: wheat;
}

.card-text {
    display: flex;
    justify-content: left;
    color: wheat;
}
</style>

<body>
    <?php require ('partials/load.php');?>



    <div class="container ">
        <h2 class="my-4 text-center"><em> Our Resume Template</em></h2>
        <div class="tamplets-container row">

            <?php
         @session_start();
         include ('partials/dbconnect2.php');
    
         $noresults = true;
         $sql = "SELECT * FROM `templetes`";
         $result = mysqli_query( $conn ,$sql);
         while($row = mysqli_fetch_assoc($result)){
         $tempid=$row['temp_id'];
         $title = $row['temp_title'];
         $desp = $row['temp_desp'];
         $link = $row['temp_link'];
         $img = $row['temp_img'];

         $noresults = false;
          
         echo '  <div class="display-templates card mb-3  bg-dark" data-aos="fade-left" data-aos-duration="800"
         style="max-width: 540px;">
         <div class="row g-0">
             <div class="col-md-4">
                 <img src="img/resume-template_3.png" class=" templete_img img-fluid rounded-start" alt="...">
             </div>
             <div class=" col-md-8">
                 <div class="card-body">
                     <h5 class="card-title">'. $title.'</h5>
                     <p class="card-text">'.$desp.'</p>
                     <div class="btn1 ">
                         
                         <a href="img/resume/'.$img.'.png" class="btn btn-secondary m-2">Overview</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
   ';
         }
        ?>

        </div>
    </div>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>


    <script>
    AOS.init();
    </script>

</body>

</html>