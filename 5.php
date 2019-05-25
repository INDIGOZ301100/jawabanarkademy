<?php
$kotaasal = array("P","U","R","W","A","K","A","R","T","A");
$replace = array(4 => "O",6 => "E", 9 => "O");

$kotabaru = array_replace($kotaasal, $replace);
echo "$kotabaru[0]";
echo "$kotabaru[1]";
echo "$kotabaru[2]";
echo "$kotabaru[3]";
echo "$kotabaru[4]";
echo "$kotabaru[5]";
echo "$kotabaru[6]";
echo "$kotabaru[7]";
echo "$kotabaru[8]";
echo "$kotabaru[9]";
#katanya gak boleh pake str_replace kalo ini bisa kah ?
?>