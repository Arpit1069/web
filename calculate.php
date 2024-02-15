<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $response = array();

    if (empty($_POST["units"])) {
        $response["error"] = "Please enter units consumed";
    } else {
        $units = $_POST['units'];
        $totalBill = 0;

        if ($units <= 50) {
            $totalBill = $units * 3.50;
            $details = "First 50 units: Rs. " . number_format((float)$totalBill, 2, '.', '');
        } elseif ($units <= 150) {
            $totalBill = (50 * 3.50) + (($units - 50) * 4);
            $details = "First 50 units: Rs. 175.00 (50 * 3.50)<br>";
            $details .= "Next " . ($units - 50) . " units: Rs. " . number_format((float)(($units - 50) * 4), 2, '.', '');
        } elseif ($units <= 250) {
            $totalBill = (50 * 3.50) + (100 * 4) + (($units - 150) * 5.20);
            $details = "First 50 units: Rs. 175.00 (50 * 3.50)<br>";
            $details .= "Next 100 units: Rs. 400.00 (100 * 4)<br>";
            $details .= "Next " . ($units - 150) . " units: Rs. " . number_format((float)(($units - 150) * 5.20), 2, '.', '');
        } else {
            $totalBill = (50 * 3.50) + (100 * 4) + (100 * 5.20) + (($units - 250) * 6.50);
            $details = "First 50 units: Rs. 175.00 (50 * 3.50)<br>";
            $details .= "Next 100 units: Rs. 400.00 (100 * 4)<br>";
            $details .= "Next 100 units: Rs. 520.00 (100 * 5.20)<br>";
            $details .= "Next " . ($units - 250) . " units: Rs. " . number_format((float)(($units - 250) * 6.50), 2, '.', '');
        }

        $response["bill"] = number_format((float)$totalBill, 2, '.', '');
        $response["details"] = $details;
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
