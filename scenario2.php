<?php
$rate = 15;                          // hourly rate
$days = [8, 9, 10, 8, 9, 6, 0];      // hours worked Mon–Sun
$limit = 40;                         // regular hours limit
$otMultiplier = 1.5;

// for loop: add up the week's hours
$totalHours = 0;
for ($i = 0; $i < count($days); $i++) {
    $totalHours += $days[$i];
}

// if: split regular and overtime hours
if ($totalHours > $limit) {
    $regularHours  = $limit;
    $overtimeHours = $totalHours - $limit;
} else {
    $regularHours  = $totalHours;
    $overtimeHours = 0;
}

$regularPay  = $regularHours * $rate;
$overtimePay = $overtimeHours * $rate * $otMultiplier;
$grossPay    = $regularPay + $overtimePay;

echo "Total hours: $totalHours<br>";
echo "Regular pay: $" . number_format($regularPay, 1) . "<br>";
echo "Overtime pay: $" . number_format($overtimePay, 1) . "<br>";
echo "Total gross pay: $" . number_format($grossPay, 1) . "<br>";
?>
