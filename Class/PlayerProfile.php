<?php

class PlayerProfile {
	private $athleteId;
	private $firstname;
	private $lastname;
	private $height;
	private $weight;
	private $highschool;
	private $college;
	private $wingspan;
	private $sport;


	public function __construct($newAthleteId, $newFirstname, $newLastname, $newHeight, $newWeight, $newWingspan,
										 $newHighschool,$newCollege,$newSport ) {
try{
$this->athleteId=$newAthleteId;
$this->firstname = $newFirstname;

} catch(PDOException $exception){
	$exception->getMessage();

}
}

}