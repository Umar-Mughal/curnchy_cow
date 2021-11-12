<?php
 session_start();
 include('MailChimp.php'); 
 use \DrewM\MailChimp\MailChimp;


 $list_id = '8bb571c6a4';
$MailChimp = new MailChimp('679e8063d562842e0e46772954d761be-us5');


 if($_POST)
 {
     $email = $_POST['email'];
 }



 $result = $MailChimp->post("lists/$list_id/members", [
                 'email_address' =>  $email,
                 'status'        => 'subscribed',
             ]);
 
 if ($MailChimp->success()) {

   $_SESSION['status'] = "Thanks For Subscribing";
   $_SESSION['status_code'] = "success";
   header("location: index.php");
 } else {
    //  echo $MailChimp->getLastError();
    $_SESSION['status'] = "Already Subscribed";
    $_SESSION['status_code'] = "error";
    header("location: index.php");
 }