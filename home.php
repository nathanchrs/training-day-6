<?php
	echo("<h1>Hello world!</h1>");

	echo("1+1 = ");
	echo(1+1);
	echo("<br>");

	$a = 5;
	$b = 10;
	$c = $a + $b;
	echo("a+b = ");
	echo($c);
	echo("<br>");

	echo("this " . " is " . " concatenation");
	echo("<br>");

	if (isset($_GET['test'])) {
		echo("test = " . $_GET['test']);
	} else {
		echo("test is not set");
	}
	echo("<br>");

	for ($i = 1; $i <= 10; $i++) {
		echo($i . "<br>");
	}
?>