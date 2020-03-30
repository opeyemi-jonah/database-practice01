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
$this->setAthleteId($newAthleteId);
$this->setFirstname($newFirstname);
$this->setLastname($newLastname);
$this->setHeight($newHeight);
$this->setWeight($newWeight);
$this->setWingspan($newWingspan);
$this->setHighschool($newHighschool);
$this->setCollege($newCollege);
$this->setSport($newSport);

} catch(PDOException $exception){
	$exception->getMessage();

}

}

//Accessor for athlete firstname
public function getFirstname(): string{
		return $this->firstname;
}



}
