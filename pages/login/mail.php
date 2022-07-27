<?php
  $name = $_POST['name'];
  $age = $_POST['age'];
  $number = $_POST['phnumber'];
  $gender = $_POST['gender'];
    $to = 'anasramadanking@gmail.com'
    $headers = array(
        'From' => 'webmaster@example.com',
        'Reply-To' => 'webmaster@example.com',
        'X-Mailer' => 'PHP/' . phpversion()
    );
?>
<?php


    $email_subject = "New Form submission";

	$email_body = "You have received a new message Kid Name : $name.\n".
                            "Here is the age:\n $age".
                            "Here Is Phone Number :\n $phnumber"
                            "Gender Is :\n $gender"
?>
mail($to,$email_subject,$email_body,$headers)