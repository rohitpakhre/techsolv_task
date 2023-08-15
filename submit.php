<?php
// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Validate the form data
  $name = trim($_POST['name']);
  if (empty($name)) {
    echo $error['name'] = 'Please enter your name.';
    die();      
  }

  $phone = trim($_POST['phone']);
  if (empty($phone)) {
   echo  $error['phone'] = 'Please enter your phone number.';
   die();  
  }

  $email = trim($_POST['email']);
  if (empty($email)) {
   echo $error['email'] = 'Please enter your email address.';
   die();  
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   echo $error['email'] = 'Please enter a valid email address.';
   die();  
  }

  $subject = trim($_POST['subject']);
  if (empty($subject)) {
   echo $error['subject'] = 'Please enter a subject.';
   die();  
  }

  $message = trim($_POST['message']);
  if (empty($message)) {
   echo $error['message'] = 'Please enter a message.';
   die();  
  }

  // If there are no errors, save the form data to the database
  if (empty($error)) {

    // Connect to the database
    $db = new PDO('mysql:host=localhost;dbname=techsolve_task', 'root', '');

    // Insert the form data into the database
    $sql = 'INSERT INTO contact_form (name, phone, email, subject, message, ip_address, timestamp) VALUES (?, ?, ?, ?, ?, ?, ?)';
    $stmt = $db->prepare($sql);
    $stmt->execute(array($name, $phone, $email, $subject, $message, $_SERVER['REMOTE_ADDR'], time()));

    // Send an email notification to the site owner
    $to = 'test@techsolvitservice.com';
    $subject = 'Form Submission Task Rohit Chak';
    $message = 'Hello Techsolv it services from:

    Name: ' . $name . '
    Phone: ' . $phone . '
    Email: ' . $email . '
    Subject: ' . $subject . '
    Message: ' . $message;

    mail($to, $subject, $message);

    header('Location: success.php');
  }
}
?>
