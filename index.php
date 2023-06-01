

<!doctype html>
<html>
<link rel="stylesheet" type="text/css" href="files/bootstrap/3/css/bootstrap.css" />
<script type="text/javascript" src="files/js/jquery.js"></script>
<script type="text/javascript" src="files/bootstrap/3/js/bootstrap.js"></script>
<link rel="stylesheet" href="files/css/login.css">
 
<link rel="shortcut icon" href="img/favicon.ico" />
 
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Felux-Shop Login</title>
 
 
</head>
 
<body>
    <div class="container">
        <div class="row">
 
            <form class="login" method="post" action="loginform.php">
                <h4> <b><span class="glyphicon glyphicon-fire"></span> FELUX SHOP - Login</b> </h4>
                <input type="text" name="user" placeholder="Username">
                <input type="password" name="pass" placeholder="Password">
                <button type="submit" id="divButton">Login</button>
                <button type="button" class="register" onclick="window.location.href = 'signup.html'">Register</button>
            </form>
 
        </div>
    </div>
 
    </div>
 
 
</body>
 
</html>