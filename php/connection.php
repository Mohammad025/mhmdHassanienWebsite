<?php
session_start();

$host='localhost';
$user='root';
$password='';
$db='data';
$connection= mysqli_connect($host,$user,$password,$db);
// $username= $_POST['username'];
// $email= $_POST['email'];
// $password1= $_POST['password'];
// $cpassword= $_POST['confirm-password'];
// $DOB= $_POST['DOB'];


// if($connection){echo "connected";}
// else{echo "not connected";}

if(isset($_POST['reg'])){
    $stmt = $connection->prepare("INSERT INTO user (username, email, password, DOB) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss",$username,$email,$password1,$DOB);
    $stmt->execute();
    echo "register successfully...";
}
?>
