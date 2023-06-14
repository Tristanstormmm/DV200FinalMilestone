<!DOCTYPE html>
<html>

<head>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="left-block">
        <img id="login-img" src="../Milestone/Img/login-img.png">
    </div>
    <div class="right-block">
        <div class="login-form">
            <h2>Account Login</h2>
            <p>Login to your reception account to gain access to the appointments dashboard.</p>
            <form method="post" action="dashboard.php">
                <label for="username">Username</label>
                <input type="text" id="username" name="username">
                <br>
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
                <br>
                <div class="remember-me">
                    <input type="checkbox" id="remember-me" name="remember-me">
                    <label for="remember-me">Remember me</label>
                </div>
                <button type="submit" class="login-btn">Login</button>
            </form>
            <p>Small text below the button</p>
        </div>
    </div>
    <div class="clearfix"></div>
</body>

</html>
