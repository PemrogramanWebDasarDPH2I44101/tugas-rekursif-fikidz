<?php 
error_reporting(0);
$angka = 5;
function pertama($x, $y){
	if ($x > 0) {
		if ($y > 0) {
			echo "* ";
			$y--;
			pertama($x, $y);
		}
		else{
			echo "<br>";
			$x--;
			pertama($x, $x);
		}
	}
}
pertama ($angka, $angka);

echo "========================<br>";

function kedua($x, $y, $angka){
	if ($x <= $angka) {
		if ($y <= $x) {
			echo "$y ";
			$y++;
			kedua($x, $y, $angka);
		}
		else{
			echo "<br>";
			$x++;
			kedua($x, 1, $angka);
		}
	}
}
kedua (1, 1, $angka);

 ?>
