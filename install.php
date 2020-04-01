<?php

require ("config.php");
$sql = file_get_contents("data/player.sql");
try {

	$connection = new PDO("mysql:host=$host", $username, $password, $options);
echo "Database created";
//query template
	$sql;
	$connection->exec($sql);
}
catch(PDOException $e){
	echo $sql." ".$e->getMessage();
}

