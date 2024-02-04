<?php
require ('../partials/load.php');
global $action;
$url2 = $_GET['url'];
@session_start();
// include ('../partials/dbconnect2.php');
// $noresults = true;
// $sql = "SELECT * FROM `resumes` WHERE url = '$url'";
// $result = mysqli_query( $conn ,$sql);
// while($row = mysqli_fetch_assoc($result)){
// $id=$row['id'];
// print_r($sql);
// }
$resumedata = $action->db->read('resumes','*',"WHERE url = '$url2' ");
if(!$resumedata){
    // header ("Location: /ARB project/home.php");
}



// $url = 'http://localhost/ARB%20project/resumes/resume-2.php?'.$url2;
// file_put_contents("Tmpfile.pdf", file_get_contents(""));

// $file_name = basename($url);

// if (file_put_contents($file_name, file_get_contents($url)))
    // {
    //     echo "File downloaded successfully";
    // }
    // else
    // {
    //     echo "File downloading failed.";
    // }
   
// $url  = 'http://localhost/ARB%20project/resumes/resume-2.php?url=5wt6xq9y9z214611uy';
// $path = "output3.pdf";

// $ch = curl_init($url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_REFERER, 'http://localhost/ARB%20project/resumes/resume-2.php?url=5wt6xq9y9z214611uy');

// $data = curl_exec($ch);

// curl_close($ch);

// $result = file_put_contents($path, $data);

// if (!$result) {
//     echo "error";
// } else {
//     echo "success";
// }


$url = 'http://localhost/ARB%20project/resumes/resume-2.php?url=5wt6xq9y9z214611uy';

$file_name = basename('download.pdf');
 
if(file_put_contents($file_name,file_get_contents($url))){
    echo "success";
}else{
    echo "error";
}