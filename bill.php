<!DOCTYPE html>
<html>
<head>
	<title>Calculate Monthly Water Bill</title>
</head>
<body>
	<h1>Calculate Monthly Water Bill</h1>
	<form method="POST">
		<label for="units">Enter number of units:</label>
		<input type="text" name="units" required><br><br>
		<input type="submit" name="submit" value="Calculate Bill">
	</form>
	<?php
	if(isset($_POST['submit'])) {
		$units = $_POST['units'];
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
	
		echo "<h3>Your monthly water bill is Ksh. " . $bill . "</h3>";
	}
	?>
</body>
</html>





