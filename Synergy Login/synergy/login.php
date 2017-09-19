<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Synergy Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<div class="header">
    <img src="imgs/Synergy_SwirlLogo.png" alt="Synergy Logo" height="100" width="200">
    <h2>Login</h2>
</div>

<form method="post" action="login.php">

    <?php include('errors.php'); ?>

    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" >
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password">
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="login_user">Login</button>
    </div>
    <p>
        Not yet a member? <a href="register.php">Sign up</a>
    </p>
</form>

</body>
</html>