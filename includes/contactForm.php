<?php

// ob_start();

// $con_error      = 'There was unfortunately an error submitting your form..';
// $db_host        = '103.9.170.105';
// $db_user        = 'xenusfit_admin';
// $db_pass        = '727887@admin';
// $db_database    = 'xenusfit_business'; 
// // $db_port        = '3306';

// $link = mysqli_connect($db_host,$db_user,$db_pass,$db_database) or die($con_error);

// echo 'Connected';

if(isset($_POST['submit'])){



  // Connect to database
  // include_once 'db.php'

  $submit = $_POST['submit'];

  // echo "<pre>";
  // print_r($_POST);
  // echo "</pre>";

  $name = $_POST['name'];
  $company = $_POST['company'];
  $interest = $_POST['interest'];
  $mailFrom = $_POST['email'];
  $phone = $_POST['phone'];
  $objective = $_POST['objective'];
  $desire = $_POST['desire'];
  $url = $_POST['url'];
  $optin = $_POST['optin'];

  $mailTo = 'tom@xenus.com.au';
  $subject = 'Email From Xenus Website';
  $headers = 'From: '.$mailFrom;

  $txt = "You recieved an email from Xenus.com.au";
  $txt .= "\n\r \n\r Name:".$name;
  $txt .= "\n\r Company:".$company;
  $txt .= "\n\r Phone:".$phone;
  $txt .= "\n\r Email:".$name;
  $txt .= "\n\r Interested In:".$interest;
  $txt .= "\n\r \n\r Problems: \n\r".$desire;
  $txt .= "\n\r \n\r Objectives: \n\r".$objective;
  $txt .= "\n\r \n\r URL:\n\r".$url;
  $txt .= "\n\r Optin:".$optin;

  if(empty($name) || empty($company) || empty($mailFrom) || empty($phone) || empty($objective) || empty($desire)){
    header('Location: ../index.php?contact=empty');
  }else{
    if(!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)){
      header('Location: ../index.php?contact=invalidemail');
    }
    // if(!empty($url)){
    //   if(!is_url($url)){
    //     // header('Location: ../index.php?contact=invalidurl');
    //     exit(header("Location: ../index.php?contact=invalidurl"));
    //   }
    // }
    // echo "Add user to database";
  //   echo "<pre>";
  // print_r($txt);
  // echo "</pre>";
    mail($mailTo, $subject, $txt, $headers);
    // echo "Email Sent";
    header('Location: ../index.php?contact=mailsent');
    
  }
}else{
  header('Location: ../index.php?contact=error');
}


function is_url($uri){
  if(preg_match( '/^(http|https):\\/\\/[a-z0-9_]+([\\-\\.]{1}[a-z_0-9]+)*\\.[_a-z]{2,5}'.'((:[0-9]{1,5})?\\/.*)?$/i' ,$uri)){
    return $uri;
  }
  else{
      return false;
  }
}