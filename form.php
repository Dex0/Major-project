<?php


if(isset($_POST['submit1']))
{
$name = $_POST['Name'];
$email = $_POST['Email'];
$subject = $_POST['Subject'];
$message = $_POST['Message'];

if (empty($name) || empty($email) || empty($subject) ||
 empty($message)) {

    header("location:MP2\Aseertime\contact.php?error");}
 
    else{

        $to = "crimzonblue38@hotmail.com";

        if(mail($to, $name, $subject, $message, $email)){

            header("location:MP2\Aseertime\contact.php?success");
        }

    }
 }
else {

    header("location:MP2\Aseertime\contact.php");
}

?>