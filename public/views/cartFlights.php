<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/help.css">
    <link rel="stylesheet" type="text/css" href="public/css/availableFlights.css">
    <link rel="stylesheet" type="text/css" href="public/css/cart.css">
    <script src="https://kit.fontawesome.com/0b120cc3fd.js" crossorigin="anonymous"></script>
    <title>CART</title>
</head>
<body>
<div class="help-container">
    <a href="http://localhost:8080/homePage" class="link"><i class="fa-solid fa-xmark"></i></a>
    <header>
        Your cart <i class="fa-solid fa-cart-shopping"></i>
    </header>
    <section class="textBox">
        <?php foreach($cartFlights as $cartFlight): ?>
        <div>
            <div>
            <i class="fa-solid fa-plane-departure fa-2x"></i>
            <h2>Departure date: <?= $cartFlight->getDepDatetime(); ?> </h2>
            </div>
            <div>
            <i class="fa-solid fa-plane-arrival fa-2x"></i>
            <h2>Return date: <?= $cartFlight->getArrDatetime(); ?></h2>
            </div>
            <div>
            <i class="fa-regular fa-calendar-days fa-2x"></i>
            <h2>Departure airport: <?= $cartFlight->getDepAirport(); ?></h2>
            </div>
            <div>
            <i class="fa-regular fa-calendar-days fa-2x"></i>
            <h2>Arrival airport: <?= $cartFlight->getArrAirport(); ?></h2>
            </div>
    </div>
        <?php endforeach; ?>
    </section>
    <div class="logo">
        <img src="public/img/airplaneLogo.svg">
    </div>
    <div class="logoText">
        AirJet
    </div>

</div>
</body>
</body>