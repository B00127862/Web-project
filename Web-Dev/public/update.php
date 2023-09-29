<?php
require('../lib/connection.php');
session_start();
if(!isset($_SESSION['user'])) {
    header("Location: login.php");
}
?>
<link rel="stylesheet" type="text/css" href="../css/styles.css">
    <title>Update details</title>
</head>


<body>

<div class="container">
    <form action="updatechange.php" onsubmit = "return valid()" method="POST" name="sign_Form" class="form-signin">
        <h2 class="form-signin-heading">Please enter new details</h2>
        
        <label for="inputEmail">Email</label>
        <input name="Email" type="email" id="inputEmail" class="form-control" placeholder="Email" >
        <label for="inputPassword">Password</label>
        <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Password" >
        
        <button name="Submit" value="reg" class="button" type="submit">Submit</button>

    </form>
</div>
</body>
</html>
