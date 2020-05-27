<!DOCTYPE html>
<html>
<body>
<h1 style="color: red; text-align: center;">PHP is_countable() Function</h1><hr>
<strong>Check whether the contents of a variable is a countable value or not:</strong>
<br>
<strong>is_countable — Verify that the contents of a variable is a countable value</strong><hr>

<strong style="font-size: 20px;">PHP is_countable() Function output</strong><br> <hr>

<?php
$a = "Hello";
echo "a is " . is_countable($a) . "<br>";

$b = array("red", "green", "blue");
echo "b is " . is_countable($b) . "<br>";

$c = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "c is " . is_countable($c) . "<br>";

$d = [1, 2, 3];
echo "d is " . is_countable($d) . "<br>";
?><hr>
<strong>next example</strong><hr>
<?php
var_dump(is_countable([1, 2, 3])); // bool(true)
var_dump(is_countable(new ArrayIterator(['foo', 'bar', 'baz']))); // bool(true)
var_dump(is_countable(new ArrayIterator())); // bool(true)
var_dump(is_countable(new stdClass())); // bool(false)
?>
</body>
</html>