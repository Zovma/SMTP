<?php
include "smtp.php";

$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$city = $_POST["city"];
$services  = $_POST["services"];
$comment = $_POST["comment"];
$ip = $_SERVER['REMOTE_ADDR'];
$utm_sourse = $_POST['utm_source'];
$utm_medium = $_POST['utm_medium']; 
$utm_campaign = $_POST['utm_campaign'];
$utm_content = $_POST['utm_content'];
$utm_term = $_POST['utm_term'];
$length = count($_POST);


// echo "Имя: $name <br>
//  Телефон: $phone <br>
//  Email: $email <br>
//   City: $city <br>
//    services: $services <br>
//     comment: $comment <br>
//     ip: $ip <br>
//     utm_sourse: $utm_sourse;<br>
//     utm_medium: $utm_medium<br>
//     utm_campaign: $utm_campaign<br>
//     utm_content: $utm_content<br>
//     utm_term: $utm_term<br>";



smtpmail('Имя получателя', $email, 'Тема письма', 'Имя:' . $name .'<br>
Телефон: '. $phone . '<br>
Email: ' . $email . '<br>
 Город: ' . $city . '<br>
  Услуга: ' . $services . '<br>
   comment: ' . $comment . '<br>
   ip: ' . $ip .'<br>
utmSourse: ' . $utm_sourse . '<br>
utm_medium: ' .  $utm_medium . '<br>
utm_campaign: ' . $utm_campaign . '<br>
utm_content: ' . $utm_content . '<br>
utm_term: '. $utm_term . '<br>');

header("Location: index.php");
exit;


?>

