<?php 
error_reporting(E_ALL ^ E_NOTICE); // hide all basic notices from PHP

//If the form is submitted
if(isset($_POST['submitted'])) {
  
  // require a name from user
  if(trim($_POST['contactName']) === '') {
    $nameError =  'Forgot your name!'; 
    $hasError = true;
  } else {
    $name = trim($_POST['contactName']);
  }
  
  // need valid email
  if(trim($_POST['email']) === '')  {
    $emailError = 'Forgot to enter in your e-mail address.';
    $hasError = true;
  } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
    $emailError = 'You entered an invalid email address.';
    $hasError = true;
  } else {
    $email = trim($_POST['email']);
  }

  // need valid phone
  // if(trim($_POST['phone']) === '')  {
  //   $phoneError = 'Forgot to enter in your phone number.';
  //   $hasError = true;
  // } else if (!preg_match("/^([1]-)?[0-9]{3}-[0-9]{3}-[0-9]{4}$/i", trim($_POST['phone']))) {
  //   $phoneError = 'You entered an invalid phone number.';
  //   $hasError = true;
  // } else {
  //   $phone = trim($_POST['phone']);
  // }
  
  // This WORKS
  $phone = trim($_POST['phone']);

  // validate a phone number
  // if( !preg_match("/^([1]-)?[0-9]{3}-[0-9]{3}-[0-9]{4}$/i", trim($_POST['email'])) ) { 
  //     $phoneError = 'Please enter a valid phone number.';
  //     $hasError = true;
  // } else {
  //   $phone = trim($_POST['phone']);
  // }
    
  // we need at least some content
  if(trim($_POST['comments']) === '') {
    $commentError = 'You forgot to enter a message!';
    $hasError = true;
  } else {
    if(function_exists('stripslashes')) {
      $comments = stripslashes(trim($_POST['comments']));
    } else {
      $comments = trim($_POST['comments']);
    }
  }
    
  // upon no failure errors let's email now!
  if(!isset($hasError)) {
    
    $emailTo = 'contactus@jvwlaw.net';
    $subject = 'Website contact from '.$name;
    $sendCopy = trim($_POST['sendCopy']);
    $body = "Name: $name \n\nEmail: $email \n\nPhone: $phone \n\nRequest: $comments";
    $headers = 'From: ' .' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

    mail($emailTo, $subject, $body, $headers);
        
        // set our boolean completion value to TRUE
    $emailSent = true;
  }
}
?>