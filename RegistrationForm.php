<?php
$_email = htmlspecialchars($_POST['email']);
$_tel = htmlspecialchars($_POST['tel']);
$_password = htmlspecialchars($_POST['password']);
$_firstName = htmlspecialchars($_POST['firstName']);
$_lastName = htmlspecialchars($_POST['lastName']);
$_secondaryName = htmlspecialchars($_POST['secondaryName']);
$_dateBirth = htmlspecialchars($_POST['dateBirth']);
$_gender = htmlspecialchars($_POST['gender']);
$_city = htmlspecialchars($_POST['city']);

echo $_email, " ", $_tel, " ", $_password, " ", $_firstName, " ", $_lastName, " ", $_secondaryName, " ", $_dateBirth, " ", $_gender, " ", $_city;
?>