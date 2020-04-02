<?php
namespace OpeyemiJonah\DatabasePractice01;
//require_once ("autoload.php");
//require_once(dirname(__DIR__, 1) . "/vendor/autoload.php");
//require "install.php";
//require ("config.php");
use Ramsey\Uuid\Uuid;
class PlayerProfile {
	//private $athleteId;
	private $firstname;
	private $lastname;
	private $height;
	private $weight;
	private $highSchool;
	private $college;
	private $wingspan;
	private $sport;


	public function __construct( $newFirstname, $newLastname, $newHeight, $newWeight, $newWingspan,
										 $newHighSchool,$newCollege,$newSport ) {
try{
//$this->setAthleteId($newAthleteId);
$this->setFirstname($newFirstname);
$this->setLastname($newLastname);
$this->setHeight($newHeight);
$this->setWeight($newWeight);
$this->setWingspan($newWingspan);
$this->setHighschool($newHighSchool);
$this->setCollege($newCollege);
$this->setSport($newSport);

} catch(PDOException $exception){
	$exception->getMessage();

}

}
//Accessors
//Accessor for athlete firstname
public function getFirstname(): string{
		return $this->firstname;
}

public function getLastname(): string {
		return $this->getLastname();
}

	/**
	 * @return mixed
	 */
	public function getHeight(): string {
		return $this->getHeight();
	}

	/**
	 * @return mixed
	 */
	public function getWeight(): float {
		return $this->getWeight();
	}

	/**
	 * @return mixed
	 */
	public function getWingspan(): float {
		return $this->getWingspan();
	}

	/**
	 * @return mixed
	 */
	public function getHighSchool():string {
		return $this->getHighSchool();
	}

	/**
	 * @return mixed
	 */
	public function getCollege(): string {
		return $this->getCollege();
	}

	/**
	 * @return mixed
	 */
	public function getSport(): string {
		return $this->getSport();
	}

//Mutators

public function setFirstname(string $newFirstname): void{
//First name can not be null
	if($newFirstname===null){
		throw (new \InvalidArgumentException("Must give a firstname please "));
	}

	//Must not be over the range of data character
	if($newFirstname>30){
		throw (new \RangeException("Input is more than required characters "));

	}
	$this->firstname=$newFirstname;

}

	public function setLastname(string $newLastname): void{
//First name can not be null
		if($newLastname===null){
			throw (new \InvalidArgumentException("Must give a firstname please "));
		}

		//Must not be over the range of data character
		if($newLastname>39){
			throw (new \RangeException("Input is more than required characters "));

		}
		$this->lastname=$newLastname;

	}
//height
	public function setHeight(float $newHeight): void{
		//sanitize input
		$newHeight = trim($newHeight);
		$newHeight = filter_var($newHeight, FILTER_SANITIZE_STRING);

		//Must not be over the range of data character
		if($newHeight>4){
			throw (new \RangeException("Invalid height"));

		}
		$this->height=$newHeight;

	}

	//weight
	public function setWeight(float $newWeight): void{
//Making sure it fits the range
		/*
		if ($newWeight>5){
			throw (new \RangeException("Invalid weight"));
		}
*/
		$this->weight = $newWeight;
	}

	//wingspan
	public function setWingspan(float $newWingspan): void{
//Making sure it fits the range
		/*
		if ($newWingspan>5){
			throw (new \RangeException("Invalid weight"));
		}
*/
		$this->wingspan = $newWingspan;
	}
	//high-school
	public function setHighSchool(string $newHighSchool): void{
		//Sanitize the data received
		$newHighSchool = trim($newHighSchool);
		$newHighSchool = filter_var($newHighSchool, FILTER_SANITIZE_STRING);

		//Rnage check
		if($newHighSchool>50){
			throw (new \RangeException("Name is more than what database can accept "));
		}

		$this->highSchool = $newHighSchool;

	}

	//college

	public function setCollege(string $newCollege): void{
		//Sanitize the data received
		$newCollege = trim($newCollege);
		$newCollege = filter_var($newCollege, FILTER_SANITIZE_STRING);

		//Rnage check
		if($newCollege>50){
			throw (new \RangeException("Name is more than what database can accept "));
		}

		$this->college = $newCollege;

	}
	//sport
	public function setSport(string $newSport): void{
		//Sanitize the data received
		$newSport = trim($newSport);
		$newSport = filter_var($newSport, FILTER_SANITIZE_STRING);

		//Rnage check
		if($newSport>50){
			throw (new \RangeException("Name is more than what database can accept "));
		}

		$this->sport = $newSport;

	}


	/*
	 *  @param \PDO $pdo PDO connection object
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError if $pdo is not a PDO connection object
	 */


public function insert(\PDO $pdo): void{

	/* $host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "player";
	$dsn = "mysql:host=$host;dbname=$dbname";
	$options = [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];

	$connection = new PDO($dsn,$username,$password)
	*/

	//"userId" => $this->userId->getBytes()

$query = "INSERT INTO athlete(athleteFirstname, 
	athleteLastname,
	athleteHeight,
	atheleteWeight,
	athleteWingspan,
	athleteHighSchool,
	athleteCollege,
	athleteSport) VALUE (:firstname, 
	:lastname,
	:height,
	:weight
	:wingspan,
	:highScool,
	:college,
	:sport
	)";
$stmt = $pdo->prepare($query);
//bind variables to placeholders
$parameters = ["athleteFirstname"=>$this->firstname, "atheleteLastname"=>$this->lastname,"athleteHieght"=>$this->height,
		"athleteWeight"=>$this->weight,
		"atheleteWingspan"=>$this->wingspan,
		"athleteHisghSchool"=>$this->highSchool,
		"athleteCollege"=>$this->college,
		"athleteSport"=>$this->sport];
$stmt->execute($parameters);

}

}
