<?php
session_start();
$host = "localhost"; 
$users = "root"; /* User */
$password = ""; /* Password */
$dbname = "test"; /* Database name */

$con = mysqli_connect($host, $users, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])){
require_once('home.php');
$user = mysqli_real_escape_string($con,$_POST['user']);
$code = mysqli_real_escape_string($con,$_POST['code']);

    if ($user != "" && $code != ""){

        $sql = "select count(*) as users from users where user='".$user."' and code='".$code."'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);

        $count = $row['users'];

        if($count > 0){
            $_SESSION['logn'] = $user;
            header('Location: home.php');
        }
        else{

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: home.php');
        }
       

    }
}    
?>