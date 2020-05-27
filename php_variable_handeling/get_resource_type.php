<!DOCTYPE html>
<html>
<body>
<h1>PHP get_resource_type() Function</h1>
<strong>Return the resource type:</strong><hr>
<h1>Definition and Usage</h1>
<strong>The get_resource_type() function returns the type of a resource.</strong><hr>
<?php
$file = fopen("test.txt","r");
echo get_resource_type($file);
?>
<hr><h1>Next Example</h1><hr>
<?php
// prints: mysql link
$c = mysql_connect();
echo get_resource_type($c) . "\n";

// prints: stream
$fp = fopen("foo", "w");
echo get_resource_type($fp) . "\n";

// prints: domxml document
$doc = new_xmldoc("1.0");
echo get_resource_type($doc->doc) . "\n";
?>
</body>
</html>