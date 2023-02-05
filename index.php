<?php

$tuition_fee = 50000;    // User Input

// Calculating Profit
$totalFee = ($tuition_fee > 7000) ?
    (($tuition_fee >= 20000) ? (25 / 100) * $tuition_fee : (($tuition_fee >= 10000) ? (20 / 100) * $tuition_fee : (15 / 100) * $tuition_fee)) :
    "Invalid data";

// Output
echo "Total Profit Is: " . $totalFee;
