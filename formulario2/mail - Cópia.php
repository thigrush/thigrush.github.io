<?php

include 'functions.php';

if (!empty($_POST)){

  $data['success'] = true;
  $_POST  = multiDimensionalArrayMap('cleanEvilTags', $_POST);
  $_POST  = multiDimensionalArrayMap('cleanData', $_POST);

  //your email adress 
  $emailTo ="contato@razinstudio.com"; //"yourmail@yoursite.com";

  //from email adress
  $emailFrom ="contato@razinstudio.com"; //"contact@yoursite.com";

  //email subject
  $emailSubject = "Mail from Porta";

  $email = $_POST["email"];
  $pass = $_POST["pass"];
  $cpass = $_POST["cpass"];
  $twitter = $_POST["twitter"];
  $facebook = $_POST["facebook"];
  $gplus = $_POST["gplus"];
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $phone = $_POST["phone"];
  $address = $_POST["address"];
  if($name == "")
   $data['success'] = false;
 
 if (!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) 
   $data['success'] = false;


 if($comment == "")
   $data['success'] = false;

 if($data['success'] == true){

  $message = "EMAIL: $email<br>
  EMAIL: $pass<br>
  NAME: $cpass<br>
  EMAIL: $twitter<br>
  NAME: $facebook<br>
  EMAIL: $gplus<br>
  NAME: $cpass<br>
  NAME: $name<br>
  EMAIL: $email<br>
  COMMENT: $comment";


  $headers = "MIME-Version: 1.0" . "\r\n"; 
  $headers .= "Content-type:text/html; charset=utf-8" . "\r\n"; 
  $headers .= "From: <$emailFrom>" . "\r\n";
  mail($emailTo, $emailSubject, $message, $headers);

  $data['success'] = true;
  echo json_encode($data);
}
}