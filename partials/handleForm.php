<?php
session_start();
//  echo '<pre>';
//  print_r($_POST);
 require('load.php');
$showError = false;
 global $action;
 $error=$action->helper->isAnyEmpty($_POST);

 $email = $action->db->clean($_POST['email']); 

 //number validation
//  $justNums = preg_replace("/[^0-9]/", '', $mobile);
//  $mobile = $action->db->clean($_POST['mobile']);
//  $title = $action->db->clean($_POST['headline']);
//  $name = $action->db->clean($_POST['full_name']);



if($error){
//     $showError = "$error is required";
//     $action->session->set('error'," $error is required ");
//     // echo "$error is empty"
//     header ("Location: /ARB project/form.php?resume=false&error=$showError");
    
    
// }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
//     // '/^\\S+@\\S+\\.\\S+$/'
//     $showError = "Not a Valid Email";
//     header ("Location: /ARB project/form.php?resume=false&error=$showError");
// }elseif(strlen($mobile) != 10){
//     $showError = "Not a Valid Mobile Number";
//     header ("Location: /ARB project/form.php?resume=false&error=$showError");
}
   else{
    $resume_data[0]=$action->session->get('user_id')['data']['user_id'];
    $resume_data[1]=$action->db->clean($_POST['full_name']);
    $resume_data[2]=$action->db->clean($_POST['headline']);
    $resume_data[4]=$action->db->clean($_POST['dob']);
    
    $contact['email']= $action->db->clean($_POST['email']);
    $contact['mobile']= $action->db->clean($_POST['mobile']);
    $contact['address']= $action->db->clean($_POST['address']);
    
    $resume_data[3]=json_encode($contact);
    $resume_data[5]=json_encode($_POST['skill']);
    $education=array();
    $internship=array();
    $project = array();

    foreach($_POST['title'] as $key => $value){
        $education[$key]['title'] = $action->db->clean($value);
        $education[$key]['college']= $action->db->clean($_POST['college'][$key]);
        $education[$key]['Cduration']= $action->db->clean($_POST['Cduration'][$key]);
        $education[$key]['score']= $action->db->clean($_POST['score'][$key]); 
        }
    
    foreach($_POST['company'] as $key=>$value){
    $internship[$key]['company'] =$action->db->clean( $value);
    $internship[$key]['duration']= $action->db->clean($_POST['duration'][$key]);
    $internship[$key]['description']= $action->db->clean($_POST['description'][$key]);
    }
    
    // project
    foreach($_POST['name'] as $key=> $value){
    $project[$key]['name'] =$action->db->clean( $value);
    $project[$key]['Pduration']=$action->db->clean($_POST['Pduration'][$key]);
    $project[$key]['Pdespcription']= $action->db->clean($_POST['Pdespcription'][$key]);
    }
    
    
    
    // $contact['award']= $action->db->clean($_POST['award']);  award sathi
    
    
    
    $resume_data[6]=json_encode($education);
    $resume_data[7]=json_encode($internship);
    $resume_data[8]=json_encode($project);
    $resume_data[9]=$action->helper->UID();
    // $resume_data[10]= $action->session->get('tid')['id'][''];
    
    
    //  echo '<pre>';
    //  echo $tid;
    //  print_r($_SESSION);
    //  print_r($resume_data);
    
    $run=$action->db->insert('resumes','user_id,full_name, headline,dob,contact,skill,education,internship,project,url' ,$resume_data);

    if($run){
        // header ("Location: /ARB project/form.php?resumesuccess=false");
    }else{
        header ("Location: /ARB project/dashboard.php?resumesuccess=true"); 
    }

 
}

//  if($error){
//     header ("Location: /ARB project/form.php?resumesuccess=false");
// }else{
//     $run=$action->db->insert('resumes','user_id,full_name, headline,dob,contact,skill,education,internship,project,url' ,$resume_data);
//     if($run){
//         header ("Location: /ARB project/form.php?resumesuccess=false");
//     }else{
//         header ("Location: /ARB project/dashboard.php?resumesuccess=true"); 
//     }

// }

// if($error){
//     if(empty($_POST["full_name"])) {
//         $showError = "Full Name is required";
//         header ("Location: /ARB project/form.php?resume=false&error=$showError");
//     }
//     if(empty($_POST["headline"])) {
//         $showError = "Job Title is required";
//         header ("Location: /ARB project/form.php?resume=false&error=$showError");
//     }
//     if(empty($_POST["email"])) {
//         $showError = "Email Address is required";
//         header ("Location: /ARB project/form.php?resume=false&error=$showError");
//     }
//     if(empty($_POST["mobile"])) {
//         $showError = "Phone Number is required";
//         header ("Location: /ARB project/form.php?resume=false&error=$showError");
//     }
//     if(empty($_POST["address"])) {
//         $showError = "Address is required";
//         header ("Location: /ARB project/form.php?resume=false&error=$showError");
//     }
// 

// }else if(!empty($_POST["email"]) || !empty($_POST["mobile"])){
//     $email = $action->db->clean($_POST['email']);
//     $mobile = $action->db->clean($_POST['mobile']);

//     // '/^\\S+@\\S+\\.\\S+$/'
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         $showError = "Not a Valid Email";
//         header ("Location: /ARB project/form.php?resume=false&error=$showError");
//     }

//     //eliminate every char except 0-9
//     $justNums = preg_replace("/[^0-9]/", '', $mobile);
//     //if we have 10 digits left, it's probably valid.
//     if (strlen($justNums) != 10) {
//         $showError = "Not a Valid Mobile Number";
//         header ("Location: /ARB project/form.php?resume=false&error=$showError");
//     }

    // if (!preg_match($mobile, '/^\d{10}$/')) {
    //     $showError = "Not a Valid Mobile Number";
    //     header ("Location: /ARB project/form.php?resume=false&error=$showError");
    // 