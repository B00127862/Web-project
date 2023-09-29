<?php
if(isset($_SESSION['user'])) {
    header("Location: index.php");
}?>
<link rel="stylesheet" type="text/css" href="../css/styles.css">
    <title>Log in</title>
</head>
<form action="delete.php" onsubmit = "return valid()" method="POST" name="Login_Form" class="form-signin">

<body>

<div class="container">
    <form action="auth.php" onsubmit = "return valid()" method="POST" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Please enter your details to confirm account termination.</h2>
        <label for="inputUsername" >Username</label>
        <input name="Username" type="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword">Password</label>
        <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        
        <button name="Submit" value="Login" class="button" type="submit">Sign in</button>

    </form>
</div>
</body>
</html>