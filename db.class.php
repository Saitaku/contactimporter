<?php
	
class Database {
	private $dbinfo = array();
	
	// Call this method to get a singleton Database Manager Object
	public static function initialize(){
		static $init = null;
		if ($init === null){
			$init = new Database();
		}
		return $init;
	}
	
	// Private Initializer for Database Connection Singleton Object
	private function __construct(){

	}
	
	public function submit_query($sql, $params){
		
	}
	
	public function set_config($dbinfo){
		if(!is_array($dbinfo)){
			echo 'Database set_config recieved improper value. Should have been an array';
			return;
		}
		$this->dbinfo = $dbinfo;
	}
}