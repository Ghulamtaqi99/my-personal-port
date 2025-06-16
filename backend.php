
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "ghulamtaqi777@gmail.com";
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["message"]);
  $message = htmlspecialchars($_POST["message"]);

  $subject = "New Message from contect Form";
  $body = "Name: $name\nEmail: $email\nMessage: \n$message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "Message sent successfully!";
  }
}
?>