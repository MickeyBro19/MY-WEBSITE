<?php

  $receiving_email_address = 'bhaskarp986@gmail.com';

  
  $to = $receiving_email_address;
  $from_name = $_POST['name'];
  $from = $_POST['email'];
  $subject = $_POST['subject'];
  $body = $_POST['message'}

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */
/*
  $add_message( $_POST['name'], 'From');
  $add_message( $_POST['email'], 'Email');
  $add_message( $_POST['message'], 'Message', 10);
*/
mail ($to,$from,$subject,$body)
  echo $send();
?>
