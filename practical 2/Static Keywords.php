<?php
function add1() {
  static $number = 0;
  $number++;
  return $number;
}
echo "Trivedi Vishal Hitesh/21SS02IT068/C7/BSc.IT/SOS","<br>";
for ($x = 0; $x <= 15; $x++)
{
	echo add1();
	echo "<br>";
}
?>