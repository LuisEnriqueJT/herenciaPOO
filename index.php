<?php
	require_once 'herencia.php';

	$antony = new Portero();
	$antony->setNombre("Antony");
	$antony->setApellido("Silva");
	$antony->setDorsal(1);
	$antony->setAtajadas(20);
	var_dump($antony);
	echo "<br>Atajadas en el torneo: ".$antony->getAtajadas();

	$crisTabo = new Delantero();
	$crisTabo->setNombre("Cristhian");
	$crisTabo->setApellido("Tabo");
	$crisTabo->setDorsal(11);
	$crisTabo->setGoles(5);
	var_dump($crisTabo);

?>