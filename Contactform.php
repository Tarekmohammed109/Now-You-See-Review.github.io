<?php
    if (isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $mailFrom = $_POST['mail'];
        $message = $_POST['message'];
        
        $mailTo = "tarekmohammed109@yahoo.com";
        $headers = "From: ".$mailFrom;
        $txt = "You have recieved an email from ".$name.".\n\n".$message;
        
        mail($mailTo, $subject, $txt, $headers);
        header("Location: Contact.html");
    }
?>