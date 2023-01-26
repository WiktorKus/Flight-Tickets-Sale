<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/help.css">
    <link rel="stylesheet" type="text/css" href="public/css/availableFlights.css">
    <script src="https://kit.fontawesome.com/0b120cc3fd.js" crossorigin="anonymous"></script>
    <title>FLIGHTS</title>
</head>
<body>
<div class="help-container">
    <a href="http://localhost:8080/homePage" class="link"><i class="fa-solid fa-xmark"></i></a>
    <header>
        Flights <i class="fa-solid fa-plane"></i>
    </header>
    <section class="textBox">
        <?php foreach($availableFlights as $availableFlight): ?>
            <form action="addFlight", method="POST">
                <i class="fa-solid fa-plane-departure fa-2x"></i>
                <h2>Departure date: <?= $availableFlight->getDepDatetime(); ?> </h2>
                <input name="dep_datetime" value="<?= $availableFlight->getDepDatetime(); ?>" readonly hidden="true">
                <i class="fa-solid fa-plane-arrival fa-2x"></i>
                <h2>Return date: <?= $availableFlight->getArrDatetime(); ?></h2>
                <input name="arr_datetime" value="<?= $availableFlight->getArrDatetime(); ?>" readonly hidden="true">
                <i class="fa-regular fa-calendar-days fa-2x"></i>
                <h2>Departure airport: <?= $availableFlight->getDepAirport(); ?></h2>
                <input name="dep_airport" value="<?= $availableFlight->getDepAirport(); ?>" readonly hidden="true">
                <i class="fa-regular fa-calendar-days fa-2x"></i>
                <h2>Arrival airport: <?= $availableFlight->getArrAirport(); ?></h2>
                <input name="arr_airport" value="<?= $availableFlight->getArrAirport(); ?>" readonly hidden="true">
                <button type="submit" class="btnBook">Book</button>
            </form>
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