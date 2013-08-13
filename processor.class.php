<?php
	
class Processor{
	
	private $folders = array(
		'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
		'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'
	);
	
	private $lineprefixes = array(
		'Home','Bus Fax', 'Bus', 'Mobile', 'Other', 'E-mail'
	);
	
	public static function initialize(){
		static $init = null;
		if ($init === null){
			$init = new Processor();
		}
		return $init;
	}
	
	private function __construct(){

	}
	
	public function parse_text_files(){
		chdir('files/');
		
		// Loop through each letter folder to parse files in each folder
		foreach($this->folders as $folder){
			chdir($folder);
			
			// Get all files under the current letter folder
			$files = glob('*.txt');
			
			foreach($files as $file){
				$this->parse_file($file);
			}
			
			// Jump back to the 'files/' directory
			chdir('../');
		}
	}
	
	// Parse individual files
	public function parse_file($file){
		// Get lines and strip out blank ones
		$lines = file($file, FILE_IGNORE_NEW_LINES);
		foreach($lines as $line){
			if($line == null){
				continue;
			}
			
			// Find the linetype we are working with
			$linetype = $this->determine_linetype($line);
			//echo $linetype.'<br /><br />';
		}
	}
	
	// Determine the linetype of a specific line
	private function determine_linetype($line){
		//echo $line.'<br />';
		
		// If the first part of the line is a number it must be from the first line of the address
		$l = explode(' ', $line);
		if(preg_match('/[0-9]/', $l[0])){
			return 'address1';
		}
		
		// Check for comma character
		if(strpos($line, ',')){
			// Check if the line contains numbers
			if(strcspn($line, '0123456789') != strlen($line)){
				// If it contains numbers (but not at the beginning of the line) and a comma it must be the second address line
				return 'address2';
			} else {
				// If it contains a comma but no numbers it must be a name
				return 'name';
			}
		}
		
		foreach($this->lineprefixes as $lp){
			if(strpos($line, $lp) === 0){
				return strtolower($lp);
			}
		}
		
		return 'other';
		
	}
}