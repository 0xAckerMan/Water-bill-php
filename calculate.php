<?php
    if(isset($_POST['submit'])) {
        $units = $_POST['units'];
        $rates = array(
            0 => 35,
            20 => 40,
            49 => 45,
            100 => 50
        );
        $rate = 0;
        $bill = 0;
        foreach($rates as $range => $value) {
            if($units <= $range) {
                $rate = $value;
                break;
            }
        }
        $bill = $units * $rate;
    }
?>
