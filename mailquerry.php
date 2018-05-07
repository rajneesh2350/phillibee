<?php

   // Recipients
   $mailTo = "phillibee.infrastructure@gmail.com"; // note the comma
    // Copies
  // $mailCc = "phillibee.infrastructure@gmail.com";
 //  $mailBcc = "four@example.com";
    // From
   $mailFrom = "phillibeeinfrastructure.com";
   $mailFromName = "Phillibee Web Domain";
    // Reply address
   $mailReplyTo = "phillibee.infrastructure@gmail.com";
    // Message subject and contents
   $mailSubject = "Contact Us";
   $mailMessage = "Your message.\n\nYour Signature";
    // Text message charset
   $mailCharset = "windows-1252"; // must be accurate (e.g. "Windows - 1252" is invalid)
    // Create headres for mail() function
   $headers  = "Content-type: text/html; charset=$mailCharset\r\n";
   $headers .= "From: $mailFromName <$mailFrom>\r\n";
   $headers .= "Reply-To: $mailReplyTo\r\n";
 //  $headers .= "Cc: $mailCc\r\n";
 //  $headers .= "Bcc: $mailBcc\r\n";
    // Send mail
   mail($mailTo, $mailSubject, $mailMessage, $headers);
 ?>