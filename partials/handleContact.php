<?php
require ('load.php');
require ('../alert.php');
$error = false;
$error=$action->helper->isAnyEmpty($_POST);
if($error){
    $showError = "$error is empty";
   $action->session->set('error'," $error is empty");
    header ("Location: /ARB project/contact.php?e=$showError");
}
// $user_id = $action->session->get('user_id')['data']['user_id'];

$contact_data[0]=$action->db->clean($_POST['name']);
$contact_data[1]=$action->db->clean($_POST['email']);
$contact_data[2]=$action->db->clean($_POST['message']);

$user = $action->db->read('users','email',"WHERE email='$contact_data[1]'");

if(!$user){
$error = "Invalid E-mail.";
header ("Location: /ARB project/contact.php?e=$error");
}else{
    
    $action->db->insert('contact','name,email,massage',$contact_data);
    header ("Location: /ARB project/contact.php?c=true");
}