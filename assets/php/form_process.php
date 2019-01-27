<?php 

if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = $_POST['email'];
  $message = $_POST['message'];

  $mailTo = "camdyn.rasque@ucsdbeta.com";
  $subject = "New PNM contact: ".$name;
  $txt = "Name: ".$name."\n"."Email: ".$mailFrom."\n\n".$message;

  if(!(1 === preg_match('~[0-9]~', $name))) {
    mail($mailTo, $subject, $txt);
    header("Location: http://www.ucsdbeta.com/");
  }
}

?>