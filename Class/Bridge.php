<?php
require "config.php";
class Bridge {
	public function conn() {

		$host = "localhost";
		$username = "root";

		$password = "";

		$dbname = "athlete";

		$dsn = "mysql:host=$host;dbname=$dbname";
		$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

		try{


		} catch(Exception $e){
			$e->getMessage();
		}

	}
}