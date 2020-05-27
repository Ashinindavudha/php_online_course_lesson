<?php 
class File {
	public function writeData($data) {
		$file = fopen('myfile.txt', 'a');
		if (fwrite($file, $data)) {
			fclose($file);
			return true;
		}else {
			return false;
		}
	}
	public function readData($fname) {
$file = open($fname, 'r');
$data = fread($file, filesize($file));
return $data;
	}

	public function deleteFile() {

	}
}

 ?>