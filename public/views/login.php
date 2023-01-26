<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/login.css">
    <title>LOGIN PAGE</title>
</head>
<body>
    <div class="container">
        <div class="logo">
            AirJet
            <img src="public/img/logo.svg">
            <div class="logo-subtitle">
                Your low cost airline
            </div>
        </div>
        <div class="login-container">
            <form class="login" action="login" method="POST">
                <div class="message">
                    <?php if(isset($messages)) {
                        foreach ($messages as $message) {
                            echo $message;
                        }
                    }
                    ?>
                </div>
                Login
                <input name="email" type="text" placeholder="jan.kowalski@gmail.com">
                Password
                <input name="password" type="password" placeholder="**********">
                <button type="submit" class="btnLogIn">LOGIN</button>
            </form>
            <div>
                <a href="http://localhost:8080/register">
                    <button class="btnSignIn" style="margin-left: 50px">REGISTER</button>
                </a>
            </div>
        </div>
    </div>
</body>