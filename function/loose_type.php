<?php declare(strict_types=1); // strict requirement


function setHeight(int $minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);

function test(int $first_int = 1){
echo "$first_int <br>";

}

test();
test(120);
?>

