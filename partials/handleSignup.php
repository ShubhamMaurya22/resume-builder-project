<?php
  
require('load.php');
$showError = false;
global $action;
$error=$action->helper->isAnyEmpty($_POST);

    
    // $email = $action->db->clean($_POST['email']);
    // $regex = '/^([a-zA-z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/';
    // if(!preg_match($regex,$email)){
    //     $showError = "Invalid Email";
    //     header ("Location: /ARB project?signupsuccess=false&error=$showError");
    // }

    $email = $action->db->clean($_POST['email']); 

    if($error){
        $showError = "$error is empty";
       $action->session->set('error'," $error is empty");
     //  $action->helper->redirect('signup.php'); 
        
        header ("Location: /ARB project?signupsuccess=false&error=$showError");
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        // '/^\\S+@\\S+\\.\\S+$/'
        $showError = "Not a Valid Email";
        header ("Location: /ARB project?resume=false&error=$showError");
    }
    else{
            $signup_data[0]=$action->db->clean($_POST['full_name']);
            $signup_data[1]=$action->db->clean($_POST['email']);
            // $signup_data[2]=$action->db->clean($_POST['password']);
            $hash =$action->db->clean($_POST['password']);
            $signup_data[2]=password_hash($hash, PASSWORD_DEFAULT);
            $user = $action->db->read('users','email',"WHERE email='$signup_data[1]'");
            
            // if((strlen($signup_data[2]) < 8)){
            //     $showError = "Password must have 8 characters ";
            // }
            $signup_data[3]=$action->db->clean($_POST['password']);
            $ps = strlen( $signup_data[3]);
            if( $ps < 6 ){
                $showError = "Password must have 8 characters ";
            }
            elseif(count($user)>0){
                $action->session->set('error',$signup_data[1]." is already registerd");
                //  $action->helper->redirect('signup.php'); 
                $showError = $signup_data[1]." is already registerd ";
               
            }else{
            $action->db->insert('users','full_name, email,password',$signup_data);
            $showError=true;
            // print_r($signup_data);
            header ("Location: /ARB project?signupsuccess=true");
            exit();
            }
            header ("Location: /ARB project?signupsuccess=false&error=$showError");
    }
    
 

?>