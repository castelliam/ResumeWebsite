<?php

abstract class Pilot {

	var $lastName, $rank;

	function __construct($lastName, $rank){
		$this->lastName= $lastName;
		$this->rank = $rank;
	}

	public function flyC141(){
		echo "C stands for cargo";
	}
	public function flyC17(){
		echo "C does not stand for carrier";
	}
}