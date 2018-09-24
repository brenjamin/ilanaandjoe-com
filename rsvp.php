<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);



$guest1_error = $guest2_error = $guest3_error = $number_error = $attending_error = "";
$guest1 = $number = $attending = $message = $url = $success = "";

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  if (empty($_POST["guest1"])) {
    $guest1_error = "Name is required";

  } else {
    $guest1 = test_input($_POST["guest1"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z\n\r ]+$/",$guest1)) {
      $guest1_error = "Only letters and white space allowed"; 
    }

    $guest2 = test_input($_POST["guest2"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z\n\r ]*$/",$guest2)) {
      $guest2_error = "Only letters and white space allowed"; 
    }

    $guest3 = test_input($_POST["guest3"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z\n\r ]*$/",$guest3)) {
      $guest3_error = "Only letters and white space allowed"; 
    }

  } 

  if (empty($_POST["number"])) {
    $number_error = "Please enter the number of guests";
  } else {
    $number = test_input($_POST["number"]);
    // check if number only contains numbers
    if (!preg_match("/[1-9][0-9]?/", $number)) {
      $number_error = "Please enter a valid number";
    }
  }

  if (empty($_POST["attending"])) {
    $attending_error = "Please indicate if you are attending";
  }


  if ($name_error == '' and $number_error == '' and $attending_error == ''){
      unset($_POST['submit']);
      $message_body = '<html><body>';
      $message_body .= '<p style="font-size:24px">RSVP</p>';
      $message_body .= '<table rules="all" style="border: 1px solid #666;" cellpadding="10">';
      $message_body .= "<tr style=''><td><strong>Guest 1:</strong> </td><td>" . strip_tags($_POST['guest1']) . "</td></tr>";
      $message_body .= "<tr style=''><td><strong>Guest 2:</strong> </td><td>" . strip_tags($_POST['guest2']) . "</td></tr>";
      $message_body .= "<tr style=''><td><strong>Guest 3:</strong> </td><td>" . strip_tags($_POST['guest3']) . "</td></tr>";
      $message_body .= "<tr><td><strong>Number of Guests:</strong> </td><td>" . strip_tags($_POST['number']) . "</td></tr>";
      $message_body .= "<tr><td><strong>Attending:</strong> </td><td>" . strip_tags($_POST['attending']) . "</td></tr>";
      $message_body .= "</table>";
      $message_body .= "</body></html>";

      try {
      //Server settings
      $mail->SMTPDebug = 0;                                 // Enable verbose debug output
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = '';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = '';                 // SMTP username
      $mail->Password = '';                           // SMTP password
      $mail->SMTPSecure = '';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = '';                                    // TCP port to connect to

      //Recipients
      $mail->setFrom('');
      $mail->addAddress('');
      $mail->AddAddress('');     // Add a recipient
      $mail->addReplyTo('');
      
      

      

      //Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'Ilana & Joe Wedding RSVP';
      $mail->Body    = $message_body;
      $mail->AltBody = $message_body;

      $mail->send();
      echo '';
          $success = "RSVP sent, thank you!";
          $name = $number = $attending = '';
          unset($_POST);

  } catch (Exception $e) {
      echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
  }
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

