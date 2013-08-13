<?php

class Contact {
	
	private $firstname;
	
	private $lastname;
	
	private $address;
	
	private $city;
	
	private $state;
	
	private $numbers = array(
		'home' => null,
		'business' => null,
		'mobile' => null,
		'other' => null
	);
	
	private $faxes = array(
		'business' = null,
		'other' = null
	);
	
	private $email;
	
	// For any data that cannot be categorized
	private $other;
	
	// Anomalies array is for catching oddities to be marked in the database for review
	private $anomalies = array(
		'firstname' => null,
		'lastname'	=> null,
		'address' 	=> null,
		'city'		=> null,
		'state'		=> null,
		'numbers'	=> null,
		'faxes'		=> null,
		'email'		=> null,
		'other'		=> null
	);
	
	// GETTERS AND SETTERS
	
	public function set_firstname($first){
		$this->firstname = $first;
	}
	
	public function set_lastname($last){
		$this->lastname = $last;
	}
	
	public function set_address($address){
		$this->address = $address;
	}
	
	public function set_city($city){
		$this->city = $city;
	}
	
	public function set_state($state){
		$this->state = $state;
	}
	
	public function set_email($email){
		$this->email = $email;
	}
	
	// Accepts keyed array
	public function set_numbers($numbers){
		if(!is_array($numbers)){
			echo 'Contact set_numbers() recieved improper value. Should have been an array';
			return;
		}
		$this->numbers = $numbers;
	}
	
	// Accepts keyed array
	public function set_faxes($faxes){
		if(!is_array($faxes)){
			echo 'Contact set_faxes recieved improper value. Should have been an array';
			return;
		}
		$this->faxes = $faxes;
	}
	
	public function set_other($other){
		$this->other = $other;
	}
	
	// accepts an array of anomalies
	public function set_anomalies($anomalies){
		if(!is_array($anomalies)){
			echo 'set_anomalies recieved improper value. Should have been an array';
			return;
		}
		$this->anomalies = $anomalies;
	}
	
	public function get_firstname(){
		return $this->firstname;
	}
	
	public function get_lastname(){
		return $this->lastname;
	}
	
	public function get_address(){
		return $this->address;
	}
	
	public function get_city(){
		return $this->city;
	}
	
	public function get_state(){
		return $this->state;
	}
	
	public function get_email(){
		return $this->email;
	}
	
	public function get_numbers(){
		return $this->numbers;
	}
	
	public function get_faxes(){
		return $this->faxes;
	}
	
	public function get_other(){
		return $this->other;
	}
	
	// returns the array of anomalies
	public function get_anomalies(){
		return $this->other;
	}
}