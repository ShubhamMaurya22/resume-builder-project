<?php
session_start();
require('load.php');
$showError = false;
global $action;
$error=$action->helper->isAnyEmpty($_POST);
if($error){
    // $action->session->set('error',"$error is empty");
    $showError = "$error is Empty";
    header ("Location: /ARB project/signup.php");
}else{
    $email = $action->db->clean($_POST['email']);
    // $password = $action->db->clean($_POST['password']);

    $pass = $action->db->clean($_POST['password']);
    // $hash = $action->db->read('users','password',"WHERE email= '$email'");
    include ('dbconnect2.php');
    $sql = "SELECT * FROM `users` WHERE email = '$email'";
            $result = mysqli_query( $conn ,$sql);
            while($row = mysqli_fetch_assoc($result)){
        // print_r( $hash);
        // echo "<pre>";
        if(password_verify($pass , $row['password'])){
 $user = $action->db->read('users',' user_id ,email,password',"WHERE email= '$email'");
    // print_r($row['user_id']);
    // if(count($user)>0){
        @session_start();
       
        // include ('dbconnect2.php');
        // $sql = "SELECT * FROM `users` WHERE email = '$email'";
        //         $result = mysqli_query( $conn ,$sql);
        //         while($row = mysqli_fetch_assoc($result)){
        //         $user_id=$row['user_id'];

        
        $action->session->set('user_id', ['status'=> true,'data'=> $user[0]]);
        $_SESSION['loggedin'] = true;
        $_SESSION['useremail'] =  $email;
        $showError = true;
        
        header ("Location: /ARB project/home.php");
        // print_r($_SESSION);
        // print_r($user);
   
    } else{
        $showError= "incorrect email/password";
        // $action->session->set('error',"incorrect email/password");
        header ("Location: /ARB project?loginsuccess=false");
    
    }
 }
}