<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['subject'];
$to = "hr@kreyajobs.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: hr@kreyajobs.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:../thankyou.php");
?>