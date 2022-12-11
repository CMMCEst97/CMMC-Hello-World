<?php
  if (isset($_POST[submit])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

// This simple $mailTo form won't work for Gmail
    $mailTo = "CherlyMMCEst.97@gmail.com";
    $headers = "From: ".$mailFrom;
// Punctuation '.'; Jump two lines '\n'
    $txt = "You have recieved an email from ".$firstname.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
  }

 ?>
