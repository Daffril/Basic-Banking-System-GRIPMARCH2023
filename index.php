<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/createuser.css">
    <title>GRIP March 2023</title>
    <style>
    .carousel-item {
        height: 100vh;
        min-height: 350px;
        background: no-repeat center center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    .imagetext {
        background-color: rgba(0, 0, 0, 0.655);
        width: 50%;
        height: 100%;
    }

    .text p {
        margin-left: 10%;
        margin-top: 30%;
        color: aliceblue;
        font-size: 40px;

    }

    .imagetext .button1 {
        background-color: white;
        /* Green */
        border: none;
        color: black;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin-left: 35%;
        margin-top: 45;
        cursor: pointer;
        -webkit-transition-duration: 0.4s;
        /* Safari */
        transition-duration: 0.4s;
    }

    .button1 {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.9);
    }

    .button1:hover {
        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.9);
    }
    </style>

</head>

<body>
    <?php
  include 'navbar.php';
  ?>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false"
        data-bs-interval="4000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active opacity-60" style="background-image: url('images/1.jpg')">
                <div class="imagetext">
                    <div class="text">
                        <h1>Customers</h1>
                        <p>Customers part of GRIP MARCH 2023</p>
                        <a href="moneytransfer.php"><button class="button button1">Customer</button></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item opacity-60" style="background-image: url('images/2.jpg')">
                <div class="imagetext">
                    <div class="text">
                        <h1>Transactions</h1>
                        <p>View the Transactions done till now</p>
                        <a href="transactions.php"><button class="button button1">All Transactions</button></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item opacity-60" style="background-image: url('images/3.jpg')">

                <div class="imagetext">
                    <div class="text">
                        <h1>About Us</h1>
                        <p>All about GRIP MARCH 2023</p>
                        <a href="aboutus.php"><button class="button button1">Know More</button></a>
                    </div>
                </div>
            </div>
        </div>
        </header>
</body>

</html>