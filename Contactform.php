<?php

        $name = $_POST['name'];
        $visitor_email = $_POST['mail'];
        $message = $_POST['message'];
        
        $email_from 'tarekmohammed@outlook.com';
        
        $email_subject = "New Form Submission";
        
        $email_body = "User Name: $name.\n".
                        "User Email: $visitor_email.\n".
                            "User Message: $message/\n";
            
        $to = "tarekmohammed109@yahoo.com";

        $headers = "From: $email_from \r\n";

        $headers .="Reply-To: $visitor_mail \r\n";
        
        mail($to,$email_subject,$email_body,$headers);
        header("Location: Contact.html");
?>