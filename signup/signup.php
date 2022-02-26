<?php
$db = mysqli_connect('localhost', 'root', '', 'facemash');

$nam = mysqli_real_escape_string($db, $_POST['nam']);
$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$phone = mysqli_real_escape_string($db, $_POST['phone']);
$pasword = mysqli_real_escape_string($db, $_POST['pasword']);
$gender = mysqli_real_escape_string($db, $_POST['gender']);

$query = "INSERT INTO people (nam, username, email, phone, pasword, gender)
VALUES('$nam', '$username', '$email', '$phone', '$pasword', '$gender')";

mysqli_query($db, $query);
header("Location:../profile/profile.php");
?>

