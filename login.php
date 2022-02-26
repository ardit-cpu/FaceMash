<?php
session_start();
$host = "localhost"; 
$users = "root"; /* User */
$password = ""; /* Password */
$dbname = "facemash"; /* Database name */

$con = mysqli_connect($host, $users, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($con,$_POST['username']);
    $pasword = mysqli_real_escape_string($con,$_POST['pasword']);

    if ($username != "" && $pasword != ""){

        $sql = "select count(*) as people from people where username='".$username."' and pasword='".$pasword."'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);

        $count = $row['people'];

        if($count > 0){
            $_SESSION['logn'] = $username;
            header('location: profile/profile.php');

        }
        else{

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: profile/profile.php');
        }
       

    }
}
?>