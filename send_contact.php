<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "sizningemailingiz@gmail.com"; // O'zingizning email manzilingizni yozing
    $subject = "Yangi xabar - Bog'lanish formasi";
    
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
    
    $body = "Ismi: $name\nEmail: $email\n\nXabar:\n$message";
    
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Xabaringiz muvaffaqiyatli yuborildi!";
    } else {
        echo "Xabar yuborishda xatolik yuz berdi.";
    }
}
?>

