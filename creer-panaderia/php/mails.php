<?php
$element1 = $_POST['chipa'];
$element8 = $_POST['cuerno'];
$element6 = $_POST['factura'];

$formcontent="From: asd@asd.com \n Message: Chipa: $element1, cuerno: $element8, factura: $element6";
$recipient = "leandrodavidcosta@gmail.com";
$subject = "Contact Form";
$mailheader = "From: asd@asd.com \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "<script type='text/javascript'>alert('La consulta fue enviada!')</script>";
?>
