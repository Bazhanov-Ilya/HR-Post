<?php
$Name = $_POST['Name'];
$Surname = $_POST['Surname'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$Message = $_POST['Message'];

$Name = htmlspecialchars($Name);
$Surname = htmlspecialchars($Surname);
$Email = htmlspecialchars($Email);
$Phone = htmlspecialchars($Phone);
$Message = htmlspecialchars($Message);

$Name = urldecode($Name);
$Surname = urldecode($Surname);
$Email = urldecode($Email);
$Phone = urldecode($Phone);
$Message = urldecode($Message);

$Name = trim($Name);
$Surname = trim($Surname);
$Email = trim($Email);
$Phone = trim($Phone);
$Message = trim($Message);

echo $Name;
echo "<br>";
echo $Surname;
echo "<br>";
echo $Email;
echo "<br>";
echo $Phone;
echo "<br>";
echo $Message;

ini_set('display_errors','On');
error_reporting('E_ALL');
?>