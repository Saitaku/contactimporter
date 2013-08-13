<?php

class LineParser{
	
	public static function initialize(){
		static $init = null;
		if ($init === null){
			$init = new LineParser();
		}
		return $init;
	}
	
	private function __construct(){

	}
	
	public function process_name($line){
		
	}
	
	public function process_address1($line){
		
	}
	
	public function process_address2($line){
		
	}
	
	public function process_home($line){
		
	}
	
	public function process_bus($line){
		
	}
	
	public function process_mobile($line){
		
	}
	
	public function process_other($line){
		
	}
	
	public function process_bus_fax($line){
		
	}
	
	public function process_anom_other($line){
		
	}
}