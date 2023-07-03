<?php
     if (isset($_POST['submit'])) {
        $name = $_REQUEST['gname'];
        $number = $_REQUEST['gmail'];
        $message = $_REQUEST['message'];
        $cname = $_REQUEST['cname'];
        $cage = $_REQUEST['age'];

      // Set your email address where you want to receive emails. 
       $to = 'burhanj888@gmail.com';
       $subject = 'Contact Request From Website';
       $headers = "From: ".$name." <".$email."> \r\n";
       $send_email = mail($to,$subject,$message,$headers);

       echo ($send_email) ? 'success' : 'error';

  }?>