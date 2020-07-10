<?php

	/*
		author : luuuth
	*/

$pecahan = array(100000, 50000, 20000, 10000, 5000, 2000, 1000,);
$nominal = 1586000;
echo "<h4>Nominal Uang : " . $nominal . "</h4>";
for ($i = 0; $i < count($pecahan); $i++) {
 if ($nominal % $pecahan[$i] < $nominal) {
 echo floor($nominal / $pecahan[$i]) . " pecahan RP." . $pecahan[$i] . "<br/>";
 $nominal = $nominal % $pecahan[$i];
 }
}

