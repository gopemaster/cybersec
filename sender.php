<?php
    
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $email = $_POST["e-mail"];
        $sub =$_POST["subject"];
        $message = $_POST["message"];

        $to = "gujarat.ottoman@yahoo.com";
        
        $subject = $sub;
        $msg = "Name: " . $name . "\n" . "E-mail: " . $email . "\n" . "Message: " . "\n" . $message;

        mail($to, $subject, $msg);
    }

?>