<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/login.css">
    <title>REGISTRATION PAGE</title>
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
        <form class="login" action="register" method="POST" style="height: 90vh">
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
            Confirm password
            <input name="confirmedPassword" type="password" placeholder="**********">
            Name
            <input name="name" type="text" placeholder="Jan">
            Surname
            <input name="surname" type="text" placeholder="Kowalski">
            Phone
            <input name="phone" type="text" placeholder="+48 555 222 111">
            <button type="submit" class="btnLogIn">REGISTER</button>
        </form>
    </div>
</div>
</body>