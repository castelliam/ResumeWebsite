<?php

require_once('Pilot.php');
require_once('ISafetyOfficer.php');

class F16Pilot extends Pilot implements ISafetyOfficer{

	var $suitColor;

	function __construct($suitColor, $lastName, $rank){
		$this->suitColor = $suitColor;
		parent::__construct($lastName, $rank);
	}

	public function takeOff(){
		echo "Danger Zone </br>";
	}

	public function dance(){
		echo "Friends have been left behind </br>";
	}
	public function clean(){
		echo "You could slide a plane on this</br>";
	}
}

$john = new F16Pilot("red", "smith", "HotShot");
$john->takeOff();
$john->dance();
$john->clean();
