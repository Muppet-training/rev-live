<?php

if(isset($_POST['submit'])){
  $submit = $_POST['submit'];

  echo "<pre>";
  print_r($_POST);
  echo "</pre>";

  $name = $_POST['name'];
  $company = $_POST['company'];
  $interest = $_POST['interest'];
  $mailFrom = $_POST['email'];
  $mailFrom = $_POST['phone'];
  $objective = $_POST['objective'];
  $desire = $_POST['desire'];
  $url = $_POST['url'];
  $optin = $_POST['optin'];

  $mailTo = 'tom@xenus.com.au';
  $subject = 'Email From Xenus Website';
  $headers = 'From: '.$mailFrom;
  $txt = 'You recieved an email from '.$email.'.\n\n'.$message;
 
  // mail($mailTo, $subject, $txt, $headers);

  // header('Location: index.php?mailsent');
}