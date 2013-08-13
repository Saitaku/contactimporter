<?php

class Sheet {
	
	private $contacts = array();

	public function add_contact($contact){
		$this->contacts[] = $contact;
	}
	
	public function get_contacts(){
		return $this->contacts;
	}
}