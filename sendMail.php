<?php
$subject = 'MY TEST EMAIL';
echo '============' . "\n";
echo $subject . "\n";
echo '============' . "\n";

$firstName = 'Oleksandr';
$text1 = "First name: {$firstName}" . "\n";
$lastName = 'Shvorin';
$text2 = "Last name: {$lastName}" . "\n";
$dateOfBirth = '01.03.2001';
$text3 = "Date of birth: {$dateOfBirth}" . "\n";
$placeOfBirth = 'Kharkov';
$text4 = "City: {$placeOfBirth}" . "\n";

$message = $text1 . $text2 . $text3 . $text4;
$text5 = 'Tell about yourself' . "\n";

$message .= $text5;
echo $message;

$headers = 'From: o.r.shvorin@student.khai.edu';
mail('avatar45665@gmail.com', $subject, $message, $headers);
?>