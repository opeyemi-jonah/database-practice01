<?php
$pdo = $sql->getPdoObject();
require_once ("../Class/PlayerProfile.php");

use OpeyemiJonah\DatabasePractice01\PlayerProfile;

$athlete = new PlayerProfile("Opeyemi", "Jonah","3","177","6.9",
"Lower Merion","Syracuse","Basketball");

 $athlete->insert($athlete);