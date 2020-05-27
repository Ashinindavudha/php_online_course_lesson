<!DOCTYPE html>
<html>
<body>
<h1 style="color: red; text-align: center;">PHP doubleval() Function</h1>

<p style="color: blue; font-size: 20px;">Return the float value of different variables:</p><hr>
<strong style="font-size: 20px;">doubleval() Function output</strong><br> <hr>

<?php
$a = "1234.56789";
echo doubleval($a) . "<br>";

$b = "1234.56789Hello";
echo doubleval($b) . "<br>";

$c = "Hello1234.56789";
echo doubleval($c) . "<br>";
?>

</body>
</html>