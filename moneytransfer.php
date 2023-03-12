<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
    body {
        background-color: #33ffbb;
    }

    button {
        transition: 1.5s;
    }

    button:hover {
        background-color: goldenrod;
        color: white;
    }
    </style>
</head>

<body>
    <?php
    include 'config.php';
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn,$sql);
?>

    <?php
  include 'navbar.php';
?>

    <div class="container" style="background-color: rgba(179, 255, 230, 0.9);">
        <BR> <BR> <BR>
        <h2 class="text-center pt-4">Customers</h2>
        <br>
        <div class="row">
            <div class="col">
                <div class="table-responsive-sm">
                    <table class="table table-hover table-lg table-striped table-condensed">
                        <thead>
                            <tr>
                                <th class="text-center py-2">Id</th>
                                <th class="text-center py-2">Name</th>
                                <th class="text-center py-2">E-Mail</th>
                                <th class="text-center py-2">Balance</th>
                                <th class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                            <tr>
                                <td class="py-2"><?php echo $rows['id'] ?></td>
                                <td class="py-2"><?php echo $rows['name']?></td>
                                <td class="py-2"><?php echo $rows['email']?></td>
                                <td class="py-2"><?php echo $rows['balance']?></td>
                                <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button
                                            type="button" class="btn">Transfer</button></a></td>
                            </tr>
                            <?php
                    }
                ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>