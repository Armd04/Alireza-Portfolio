<?php

#Receive user input
$email = $_POST['email'];
$name = $_POST['name'];
$subject = $_POST['subject'];
$message = $_POST['message'];

#Send email
$headers = "From: $email";
$sent = mail('a3mohagh@uwaterloo.ca', 'Contact Form Submission', $name, $message);

#Thank user or notify them of a problem
if ($sent) {

?><html>
<head>
<title>Thank You</title>
</head>
<body>
<h1>Thank You</h1>
<p>Thank you for your feedback.</p>
</body>
</html>
<?php

} else {

?><html>
<head>
<title>Something went wrong</title>
</head>
<body>
<h1>Something went wrong</h1>
<p>We could not send your feedback. Please try again.</p>
</body>
</html>
<?php
}
?>