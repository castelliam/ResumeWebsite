<?php
require_once('Car.php');
//FordMustang.php

class FordMustang extends Car{

	var $engine, $make, $model, $fuelType;

	function __construct($engine, $make, $model, 
		$fuelType, $numWheels, $trunk, $numDoors){

		$this->engine = $engine;
		$this->make = $make;
		$this->model = $model;
		$this->fuelType = $fuelType;
		parent::__construct($numWheels, $trunk, $numDoors);
	}
	public function start(){
		echo "Vroom </br>";
	}
	public function brake(){
		echo "Screeeeeeeech </br>";
	}
	public function openDoors(){
		echo "Doors open sideways";
	}
}
$baCar = new FordMustang('V8', 'Ford', 'Mustang', 'Petrol', 4, true, '2');
$baCar->start();
$baCar->brake();
$baCar->openTrunk();