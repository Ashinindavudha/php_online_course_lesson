<?php 
$array = array("name"=> 'Ashin Indavudha',"BirthDay"=>"14 August,1991");
$data = serialize($array);
print_r($data);
$unserializes = unserialize($data);
print_r($unserializes);
$json = json_decode($array);

 ?>