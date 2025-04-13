<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "ishita_goswami@outlook.com";
    $subject = "New Message from Portfolio";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $headers = "From: $name <$email>\r\nReply-To: $email\r\n";

    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Failed to send message.";
    }
} else {
    http_response_code(405); // Method not allowed
    echo "Method Not Allowed";
}
?>