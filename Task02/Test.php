<?php

function runTest()
{
	// String representation test
	$m1 = new Fraction(2, 6);
	echo "Ожидается: 1/3" . PHP_EOL;
	echo "Получено: " . $m1 . PHP_EOL;

	// Adding test
	$m2 = new Fraction(1, 4);
	$m3 = $m1->add($m2);
	echo "Ожидается: 7/12" . PHP_EOL;
	echo "Получено: " . $m3 . PHP_EOL;

	// Subtraction test
	$m4 = new Fraction(-6, 3);
	$m5 = $m4->sub($m2);
	echo "Ожидается: -2'1/4" . PHP_EOL;
	echo "Получено: " . $m5 . PHP_EOL;

	$m6 = new Fraction(30, 8);
	$m7 = $m6->add($m4);
	echo "Ожидается: 1'1/2" . PHP_EOL;
	echo "Получено: " . $m7 . PHP_EOL;

	$m8 = new Fraction(-5, 9);
	$m9 = $m6->sub($m8);
	echo "Ожидается: 2'1/18" . PHP_EOL;
	echo "Получено: " . $m9 . PHP_EOL;
}
?>