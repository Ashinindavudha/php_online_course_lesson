<?php 
function inputElement($icon, $placeholder, $name, $value){
	$ele = "
	<div class=\"input-group mb-2\">
	<div class=\"input-group-prepend\">
	<div class=\"input-group-text bg-warning\">$icon</div>
	<input type=\"text\" name='$name' value='$value' autocomplete=\"off\" class=\"form-control\" id=\"inlineFormInputGroup\" placeholder='$placeholder'>
	</div>
	</div>
	";
	echo $ele;
}

?>