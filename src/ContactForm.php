<?php
$email = '';
if(isset($_POST['send'])) {
    // In this chunk we are sanatizing the inputs
    $name = htmlspecialchars($_POST['fullname']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContactForm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
</head>

<body>

<div style="padding-top: 50px;">
    <div class="container containerr w-25">
        <div class="heading text-center fs-1 font-monospace text-white">Email Contact Form</div>
        <form class="form" method="post">
            <div class="input-field">
                <input required="" autocomplete="off" type="text" name="fullname" id="username" />
                <label for="username">Full Name</label>
            </div>
            <div class="input-field">
                <input required="" autocomplete="off" type="email" name="email" id="email" />
                <label for="email">Email</label>
            </div>
            <div class="input-field">
                <input required="" autocomplete="off" type="text" name="subject" id="password" />
                <label for="username">Subject</label>
            </div>

            <div class="input-field">
                <textarea class="container containerr pd"  rows="10" id="textarea" name="message" placeholder="Kindly Write your Message here"></textarea>
            </div>

            <div class="btn-container">
                <button class="btn" name="send">send</button>
            </div>

        </form>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>

<?php
   // In this chunk we are validiating the form of contact-Us
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        exit;
    }

    // In this chunk we are we are giving the format to the msg and and also proving the receiver email of bussiness
    $to = "ahsman99@gmail.com";
    $headers = "From: " . $email;
    $fullMessage = "Name: $name\nEmail: $email\nMessage: $message";

    // In this chunk If message is sent it shows the dialogue box otherwise try again dialogue box will be shown
    if(mail($to, $subject, $fullMessage, $headers)) {
        echo  '<form class="container w-25">';
        echo '<div  class="btn btn-success container fs-3 mt-3 rounded-4 font-monospace fw-bold" >Message has been sent</div>';
        echo '</form>';
    } else {
      echo  '<form class="container w-25">';
      echo '<div  class="btn btn-success container fs-1 mt-3 rounded-4 font-monospace fw-bold">Try again</div>';
      echo '</form>';
    }
?>