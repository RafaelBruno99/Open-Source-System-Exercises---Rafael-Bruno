<?php
session_start();
$size = $_SESSION["size"];
$qty = $_SESSION["qty"];
$_SESSION["selcolour"] = $_POST["selcolour"];

echo "<h2> Your order quantity is ". $qty . "</h2></br>";
echo "<h2> and the select colour is $_POST[selcolour]. </h2></br>";

switch ($size) {
  case '1':
    $totalprice = $qty * 15.75;
    break;
  case '2':
    $totalprice = $qty * 16.75;
    break;
  case '3':
    $totalprice = $qty * 17.75;
    break;
    case '4':
      $totalprice = $qty * 18.75;
      break;
    default:
      echo "Error";
}

echo "<h2>The total price is " . $totalprice . " pounds.</h2>";
?>
