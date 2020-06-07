<?php

    $emailTo = "";

    $subject = "I hope this works!";

    $body = "I think you're great!";

    //include the whole server url
    $headers = "From: ";

    if (mail($emailTo, $subject, $body, $headers)) {
        
        echo "This email was sent successfully";
        
    } else {
        
        echo "Error: could not be sent.";
        
    }


?>


