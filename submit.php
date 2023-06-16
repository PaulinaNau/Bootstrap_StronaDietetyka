<?php
if(isset($_POST['submit'])){
    $to = 'test@test.com';
    $subject = 'Wiadomość z formularza na stronie';
    
    // Form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Email headers
    $headers = "From: $name <$email>\n";
    $headers .= "Reply-To: $email\n";
    
    // Email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message: $message\n";
    
    // Send email
    if(mail($to, $subject, $body, $headers)){
        echo 'Dziękuję za kontakt, wiadomość została wysłana. Wktórce otrzymasz odpowiedź.';
    }else{
        echo 'Przepraszamy, wystąpił błąd. Spróbuj później.';
    }
}
?>