<?php
include('../lib/connection.php');
$username = $_POST['Username'];  
$email = $_POST['Email'];
$password = $_POST['Password']; 

$sql = "SELECT COUNT(username) FROM user WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':username', $username);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if($row > 0){
        die('Username is already taken');
    }



$sql = "INSERT INTO user (username, email, password) Values (:username, :email, :password)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':password', $password);
    $result = $stmt->execute();

    if($result){
        
    header("Location: login.php");
    }
    else
    {
    header("Location: Sign up.php"); 
    }
?>