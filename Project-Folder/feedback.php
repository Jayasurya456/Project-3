<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Here, you can process the form data, for example, save it to a database
    // Replace this part with your actual backend processing code

    // For demo purposes, just echoing the received data
    echo "Thank you, $name! Your message has been received. We'll get back to you at $email soon.";
}
?>
