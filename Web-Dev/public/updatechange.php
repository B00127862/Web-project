<?php
require('../lib/connection.php');
if(!isset($_SESSION['user'])) {
    header("Location: login.php");
    
}
?>
<?php


    
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $sql = "UPDATE user SET email=:email, password=:password WHERE username=$_SESSION";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":email", $email, PDO::PARAM_STR);
    $stmt->bindValue(":password", $password, PDO::PARAM_STR);
    
    if ($stmt->execute()){
        $url= "login.php";
            header("location:$url");
    }

?>