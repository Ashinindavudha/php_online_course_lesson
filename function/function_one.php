<!DOCTYPE html>
<html>
<head>
	<title>PHP Function Arguments</title>
</head>
<body>
<p style="color: blue; font-size: 20px;">PHP Function Arguments
Information can be passed to functions through arguments. An argument is just like a variable.

Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.

The following example has a function with one argument ($fname). When the familyName() function is called, we also pass along a name (e.g. Jani), and the name is used inside the function, which outputs several different first names, but an equal last name:</p>

<?php
function sitaguMember($member) {
echo "$member MDY Sitagu Member: <br>";
}
sitaguMember("Dr.Veluriyalinkara");
sitaguMember("Dr.Dhammacara");
sitaguMember("Dr.Sumingala");
sitaguMember("Dr.Ukkamsa");
sitaguMember("Dr.Kutthala");
?>
</body>
</html>