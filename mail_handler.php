<?php
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['msg'];

$to='demiandejager21@gmail.com'; // Receiver Email ID, Replace with your email ID
$subject='Form Submission';
$message="Name :".$name."\n"."Wrote the following :"."\n\n".$msg;
$headers="From: ".$email;

if(mail($to, $subject, $message, $headers)){


    $msg = "<h1>Bedankt voor uw bericht!"." ".$name.", Wij nemen zo snel mogelijk contact met u op.</h1>";
}
else{
    $msg = "Something went wrong!";
}

header("Location: your_life_circle_contact.php?$msg");

} ?>