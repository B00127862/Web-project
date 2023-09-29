<?php
require('../lib/connection.php');
session_start();
if(!isset($_SESSION['user'])) {
    header("Location: login.php");
}
$sql = "SELECT * FROM user WHERE username = '".$_SESSION['user']."'";

 $statement = $pdo->prepare($sql);
 $statement->execute();
 $result = $statement->fetchAll();


?>
<link rel="stylesheet" type="text/css" href="../css/styles.css">

<h1>Account Details</h1>
<br>
</br>
 
 
 <?php foreach ($result as $row) : ?>
 
 <?php echo "Username: " ;
        echo ($row["username"]); ?>
 <?php echo "Email : " ;
        echo ($row["email"]); ?>
 <?php echo "Password : " ;
        echo ($row["password"]); ?>
 <a href="update.php" button class="btn btn-outline-dark" type="submit">
                            
                            Edit
                            <span class="badge bg-dark text-white ms-1 rounded-pill"></span>
                        </button></a>
                    </form>
                    <a href="delForm.php" button class="btn btn-outline-dark" type="submit">
                            
                            Delete Account
                            <span class="badge bg-dark text-white ms-1 rounded-pill"></span>
                        </button></a>
                    </form>
 
 <?php endforeach; ?>
 