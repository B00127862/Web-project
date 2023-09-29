<?php      
    include('../lib/connection.php');  
    session_start();
	$username = $_POST['Username'];  
    $password = $_POST['Password'];  
      
   
        $stmt = $pdo->prepare("select *from user where username = '$username' and password = '$password'");

        $stmt->bindValue(':username', $username, ':password', $password);
       
        $stmt->execute();
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        
    
        if($row == true){  
            $_SESSION['user'] = $_POST['Username'];
			
            $url= "index.php";
            header("location:$url");
        }  
        else{  
            $url= "login.php";
            header("location:$url");
             
        }     
        


	
	
	
	
	
	
	
	
	
	
	
	?>  