<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  
  $to = "nanakmaulik@gmail.com"; // Replace with your email address
  $subject = "New form submission";
  $message = "Name: " . $name . "\n"
             . "Email: " . $email . "\n"
             . "Date: " . $date . "\n"
             . "Time: " . $time;
             
  $headers = "From: " . $email;
  
  // Send the email
  if (mail($to, $subject, $message, $headers)) {
    echo "Thank you for your submission!";
  } else {
    echo "Oops! Something went wrong.";
  }
}
?>







