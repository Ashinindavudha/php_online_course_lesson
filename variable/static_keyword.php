<!DOCTYPE html>
<html>
<head>
	<title>
PHP The static Keyword</title>
<style>
	h1 {text-align: center; color: red;}
	p {font-size: 20px; color: blue;}
</style>
</head>
<body>
<h1>PHP The static Keyword</h1>
<hr>
<p>Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.To do this, use the static keyword when you first declare the variable:</p>
<hr>
<?php 
function myTest() {
	static $x = 0;
	echo $x;
	$x++;

}
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
echo "<br>";
?>
</body>
</html>