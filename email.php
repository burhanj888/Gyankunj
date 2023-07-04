<?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $name = $_POST["name"];
       $email = $_POST["email"];
       $message = $_POST["message"];
     
       $to = "burhanj888@gmail.com"; // Replace with your email address
       $subject = "New Contact Form Submission";
       $headers = "From: $email" . "\r\n" .
                  "Reply-To: $email" . "\r\n" .
                  "X-Mailer: PHP/" . phpversion();
     
       if (mail($to, $subject, $message, $headers)) {
         echo "<p>Thank you for contacting us, $name! Your message has been sent successfully.</p>";
       } else {
         echo "<p>Oops! Something went wrong. Please try again later.</p>";
       }
     

  }?>