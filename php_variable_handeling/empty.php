<!DOCTYPE html><html><body><h1 style="color: red; text-align: center;">PHP empty() Function</h1><hr>
<h1 style="color: blue; text-align: center;">Definition and Usage</h1>
<ul><li>Check whether a variable is empty. Also check whether the variable is set/declared:</li>
	<li>The empty() function checks whether a variable is empty or not.</li>
<li>This function returns false if the variable exists and is not empty, otherwise it returns true.</li></ul><hr>
<strong style="font-size: 20px;">PHP empty() Function output</strong><br> <hr>
<?php $a = 0;
// True because $a is empty
if (empty($a)) {
  echo "Variable 'a' is empty.<br>";
}
// True because $a is set
if (isset($a)) {
  echo "Variable 'a' is set.";
} ?><hr>
<p>next example</p><hr>
<?php $var = 0;
// Evaluates to true because $var is empty
if (empty($var)) {
    echo '$var is either 0, empty, or not set at all';
}
// Evaluates as true because $var is set
if (isset($var)) {
    echo '$var is set even though it is empty';
} ?><hr> <p> <strong>Note:</strong> PHP 5.4 changes how empty() behaves when passed string offsets.</p>
<?php $expected_array_got_string = 'somestring';
var_dump(empty($expected_array_got_string['some_key']));
var_dump(empty($expected_array_got_string[0]));
var_dump(empty($expected_array_got_string['0']));
var_dump(empty($expected_array_got_string[0.5]));
var_dump(empty($expected_array_got_string['0.5']));
var_dump(empty($expected_array_got_string['0 Mostel']));
?>
</body>
</html>