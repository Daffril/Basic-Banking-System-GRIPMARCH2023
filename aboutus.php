<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/aboutus.css">
</head>

<body style="background-color:#33ffbb">

    <?php
  include 'navbar.php';
?>
    <BR> <BR> <BR>

    <div class="background">
        <div class="container">
            <div class="screen">
                <div class="screen-body">
                    <div class="screen-body-item">
                        <h1>
                            <center><b>Basic Banking System</b></center>
                        </h1><br>
                        <h3>Requirements</h3>
                        <br>
                        <ul>
                            <li>Create a simple dynamic website which has the following specs</li>
                            <li>Start with creating a dummy data in database for upto 10
                                customers. Database options: Mysql, Mongo, Postgres, etc.
                                Customers table will have basic fields such as name, email,
                                current balance etc. Transfers table will record all transfers
                                happened</li>
                            <li>Flow: Home Page > View all Customers > Select and View one
                                Customer > Transfer Money > Select customer to transfer to >
                                View all Customers</li>
                            <li>No Login Page. No User Creation. Only transfer of money
                                between multiple users</li>
                            <li>Host the website at 000webhost, github.io, heroku app or any
                                other free hosting provider. Check in code in gitlab.</li>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>