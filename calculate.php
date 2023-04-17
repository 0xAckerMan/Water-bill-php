<?php
    if(isset($_POST['submit'])) {
        $units = $_POST['units'];
        function get_bill($u){
            $rates = array(
                20 => 35,
                49 => 40,
                100 => 45,
            );
            $rate = 0;

            $matched = false;

            foreach($rates as $range => $value) {
                if($u <= $range) {
                    $rate = $value;
                    $matched = true;
                    break;
                }
            }
            if (!$matched){
                return $u * 50;
            }
            return $u * $rate;
        }

        $bill = get_bill($units);
    }
?>
