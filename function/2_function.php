<?php
function familyName($fname, $lname, $full_name) { //(argument)
  echo "$fname Refsnes.<br>". $lname . "<br>" . $full_name . "<br>";
  //echo '$lname';
}

familyName("Jani", 123, "ba");
familyName("Hege", "last_name", "ma");
familyName("Stale", 123, "phd");
familyName("Kai Jim", "aaa", "abc");
familyName("Borge", "bbb", "test_Three_Parameter");

//familyName();//parameter 

?>