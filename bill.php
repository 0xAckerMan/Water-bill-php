
	<?php
	if (isset($_POST['submit'])) {
		$units = $_POST['units'];
		if (empty($units) || $units < 0) {
			echo "<p class='error'>Invalid input</p>";
			header('location:index.php?error=invalid_input');
		} else {

			$bill = 0;

			$rates = array(
				20 => 35,
				49 => 40,
				100 => 45,
				PHP_INT_MAX => 50
			);

			foreach ($rates as $threshold => $rate) {
				if ($units <= $threshold) {
					$bill = $units * $rate;
					break;
				}
			}

			// echo "<h3>Your monthly water bill is Ksh. " . $bill . "</h3>";
			header('location:index.php?units=' . $units . '&bill=' . $bill);
		}
	}
	?>



