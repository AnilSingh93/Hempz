<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./css/style.css">
</head>

<body>
<main>

<?php
if(isset($_POST['submit']))
{
  $name  = $_POST['name'];
  $phone  = $_POST['phone'];
  $email  = $_POST['email'];



  $mail_body = "<b>Name</b> : ".$name."<br>";
  $mail_body .= "<b>Phone</b> : ".$phone."<br>";
  $mail_body .= "<b>Email ID</b> : ".$email."<br>";


  //echo $mail_body;die();
  $headers  = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= "From: <heyanil40@gmail.com>" . "\r\n";
  $headers .= "cc:   <heyanil40@gmail.com>" . "\r\n" ;
  $to       =  'heyanil40@gmail.com';
  $subject  = "Hempz contact Enquiry";
  $result   = mail($to, $subject, $mail_body, $headers);
  
  $subject2 = 'hempz contact Enquiry';
  
  $mail_body2 = 'Thank You for contacting us. We will revert to you soon.';
  
  $mail2   = mail($email, $subject2, $mail_body2, $headers);
  
}
?>


</main>

	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity
="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="./js/custom.js"></script>
</body>
</html>