<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login Form</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="login.css">

</head>

<body>

    <div class="container">
        <div class="login-content">
            <form id="loginForm" method="POST" action="login/login.php">
                <img src='https://avataaars.io/?avatarStyle=Circle&topType=ShortHairShortCurly&accessoriesType=Sunglasses&hairColor=Black&facialHairType=Blank&clotheType=Hoodie&clotheColor=Heather&eyeType=Hearts&eyebrowType=DefaultNatural&mouthType=Smile&skinColor=Light'
/>
                <br><br>
                <h3 style="color: black;">Hello</h3>
                <p style="color: #00000087;">best place to have an acount</p>
                <br><br>
                <input type="submit" class="btn" value="Sign Up">
                <a href="./register.php" class="btnLogin">Login</a>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../js/login.js"></script>
</body>

</html>