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

        <form action="" method="post">

            <input type="number" name="units" placeholder="Enter the number of units">
            <button name="submit" type="submit">GET BILL</button>
        </form>

        <?php
        if(isset($_POST['submit'])) {
            include 'calculate.php';
            if(isset($bill) && isset($units)){
                echo "<p>Your monthly water bill for $units units is Ksh. $bill</p>";
            }else{
                echo "<p>Please try again </p>";
            }
        }
        ?>

    </div>
</body>

</html>
