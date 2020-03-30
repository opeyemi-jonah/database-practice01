<?php

require ("config.php");

try {

	$connection = new PDO("mysql:host=$host", $username, $password, $options);

//query template
	$sql = file_get_contents("data/player.sql");


//bind,prepare and execute


}