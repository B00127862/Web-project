<?php
 include('../lib/connection.php');
session_start();
if(!isset($_SESSION['user'])) {
    header("Location: login.php");
    
}
?>
<?php
 
 
 $username = $_POST['Username'];
 
 $password = $_POST['Password'];
 $sql = 'DELETE FROM user '
                . 'WHERE username = :username';

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':username', $username);

        $stmt->execute();
        

 ?>