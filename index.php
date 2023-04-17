<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Water Bill Project</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container">
        <h1>Water Billing</h1>

        <?php
        include "bill.php";
        if (isset($_GET['error'])) {
            echo "<p class='error'>Invalid Input</p>";
        }
        ?>

        <form action="bill.php" method="post">
            <input type="number" name="units" placeholder="Enter the number of units" />
            <input name="submit" type="submit" value="GET BILL" />
        </form>

        <?php
        if (isset($_GET['bill']) && isset($_GET['units'])) {
            echo "<p class='success'>Your water bill for {$_GET['units']} units is Ksh {$_GET['bill']}</p>";
        }
        ?>

    </div>
</body>

</html>