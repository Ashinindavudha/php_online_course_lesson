<!DOCTYPE html>
<html>
<body>
<h1 style="color: red; text-align: center;">PHP boolval() Function</h1><hr>
<p style="font-size: 20px; color: blue;">Return the boolean value of different variables:</p>
<p style="font-size: 20px; color: blue;">boolval function = Get the boolean value of a variable</p><hr>

<strong style="font-size: 20px;">bookvar function output</strong><br> <hr>
<?php
echo "0: " .(boolval(0) ? 'true' : 'false') . "<br>";
echo "4: " .(boolval(42) ? 'true' : 'false') . "<br>";
echo '"": ' .(boolval("") ? 'true' : 'false') . "<br>";
echo '"Hello": ' .(boolval("Hello") ? 'true' : 'false') . "<br>";
echo '"0": ' .(boolval("0") ? 'true' : 'false') . "<br>";
echo "[3, 5]: " .(boolval([3, 5]) ? 'true' : 'false') . "<br>";
echo "[]: " .(boolval([]) ? 'true' : 'false') . "<br>";
?>

</body>
</html>