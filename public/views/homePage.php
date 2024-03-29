<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/homePage.css">
    <script src="https://kit.fontawesome.com/0b120cc3fd.js" crossorigin="anonymous"></script>
    <title>HOME PAGE</title>
</head>
<body>
    <div class="base-container">
        <form action="availableFlights" method="POST">
            <div class="form">
                <div>
                    <i class="fa-solid fa-plane-departure fa-2x"></i>
                    <input name="departure" type="text" placeholder="from" required>
                </div>
                <div>
                    <i class="fa-solid fa-plane-arrival fa-2x"></i>
                    <input name="arrival" type="text" placeholder="to" required>
                </div>
                <div>
                    <input type="checkbox" id="returnTrip" name="returnTrip" value="true">
                    <label for="vehicle1"> Return trip</label>
                </div>
                <div>
                    <input type="checkbox" id="oneWay" name="oneWay" value="true">
                    <label for="oneWay"> One way</label>
                </div>
                <div>
                    <i class="fa-regular fa-calendar-days fa-2x"></i>
                    <input name="departure" type="text" placeholder="depart" onfocus="(this.type='date')" id="date" required>
                </div>
                <div>
                    <i class="fa-regular fa-calendar-days fa-2x"></i>
                    <input name="return" type="text" placeholder="return" onfocus="(this.type='date')" id="date">
                </div>
                <div class="button">
                    <button>Search</button>
                </div>
            </div>
        </form>
        <airplane>
            <div class="airplane">
                <img src="public/img/airplane.svg">
            </div>
        </airplane>
        <main>
            <header>
                <ul>
                    <li>
                        <a href="http://localhost:8080/cartFlights" class="link">Cart</a>
                    </li>
                    <li>
                        <a href="http://localhost:8080/help" class="link">Help</a>
                    </li>
                    <li>
                        <a href="http://localhost:8080" class="link">Logout</a>
                    </li>
                </ul>
            </header>
            <div class="logo">
                <img src="public/img/airplaneLogo.svg">
            </div>
            <div class="logoText">
                AirJet
            </div>
        </main>
    </div>
</body>