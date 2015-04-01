<?php
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: SoturiyARTS';
    $to = 'soturiyarts@gmail.com';
    
    $body = "From: $email\n Message:\n $message";
    
    if ($_POST['submit']){
        if (mail($to, $subject, $body, $from)){
            echo '<p>Thanks for that Mail!!</p>';
        } else {
            echo '<p>Well, something went wrong. Please try it again.</p>';
        }
    }
?>
<script>location.replace('http://dynamix-esports.com/test/sarts/index.html#contact') </script>