<!DOCTYPE html><html><body>
<h1>PHP get_defined_vars() Function</h1>
<strong>Return all defined variables, as an array:</strong><hr>
<h1>Definition and Usage</h1><strong>The get_defined_vars() function returns all defined variables, as an array.</strong><hr>
<strong>This function returns a multidimensional array containing a list of all defined variables, be them environment, server or user-defined variables, within the scope that get_defined_vars() is called.</strong><hr>
<?php
$a = array("red", "green", "blue");

$arr = get_defined_vars();

print_r($arr["a"]);
?>
<hr>
<h1>Next Example </h1>
<?php
$b = array(1, 1, 2, 3, 5, 8);
$arr = get_defined_vars();
// print $b
print_r($arr["b"]);
/* print path to the PHP interpreter (if used as a CGI)
 * e.g. /usr/local/bin/php */
echo $arr["_"];

// print the command-line parameters if any
print_r($arr["argv"]);

// print all the server vars
print_r($arr["_SERVER"]);

// print all the available keys for the arrays of variables
print_r(array_keys(get_defined_vars()));
?>
</body>
</html>