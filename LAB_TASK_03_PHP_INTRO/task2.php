<?php
$price = 73.5;
$vat = 15;

echo round($price * (($vat / 100) + 1), 2);
?>
