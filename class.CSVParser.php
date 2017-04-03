<?php 
ini_set('display_errors','On');
ini_set('max_execution_time', 300);
/**
 * Simple Parser for basic CSV processing
 */
class CSVParser{
	
	private $_filename,$_delimiter=',';
	
	public function __construct($filename=null,$delimiter=','){
		if($filename){
			$this->_filename = $filename;
			$this->_delimiter = $delimiter;
		}
	}
	
	public function readCSV(){
	
		$file_handle = fopen($this->_filename, 'r');
		while (!feof($file_handle) ) {
	
			$temp = fgetcsv($file_handle, 1024,$this->_delimiter);
			if(!empty($temp))
				$line_of_text[] = $temp;
					
		}
		fclose($file_handle);
		return $line_of_text;
	}
}

?>