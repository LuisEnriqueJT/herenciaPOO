<?php
	require_once 'herencia.php';

	$jc = new Portero("Jorge","Campos",1);
	$go = new Portero("Guillermo","Ochoa",1);
	$db = new Delantero("Diego","De buen",5);
	var_dump($jc);
	echo "<br>";
	var_dump($go);

	echo $db->celebrar();
?>