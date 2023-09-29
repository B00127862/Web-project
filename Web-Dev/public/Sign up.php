<link rel="stylesheet" type="text/css" href="../css/styles.css">
    <title>Sign in</title>
</head>


<body>

<div class="container">
    <form action="regi.php" onsubmit = "return valid()" method="POST" name="sign_Form" class="form-signin">
        <h2 class="form-signin-heading">Please enter details</h2>
        <label for="inputUsername" >Username</label>
        <input name="Username" type="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
        <label for="inputEmail">Email</label>
        <input name="Email" type="email" id="inputEmail" class="form-control" placeholder="Email" required>
        <label for="inputPassword">Password</label>
        <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        
        <button name="Submit" value="reg" class="button" type="submit">Sign up</button>

    </form>
</div>
</body>
</html>