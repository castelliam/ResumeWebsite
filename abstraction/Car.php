<?php
require_once('IAutomobile.php');

abstract class Car implements IAutomobile{

	var $numWheels, $trunk, $numDoors;

	function __construct($numWheels, $trunk, $numDoors){
		$this->numWheels = $numWheels;
		$this->trunk = $trunk;
		$this->numDoors = $numDoors;
	}

	public function openTrunk(){
		if ($this->trunk){
			echo "Opening trunk </br>";
		}
		else {
			echo "No trunk to open </br>";
		}
	}

	abstract public function openDoors();
}
