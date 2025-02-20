<?php 
// JSON JavaScript Object Notation

/* json_encode();
   json_decode();
*/
$age = array("Piter"=>35, "Ben"=>37,"Joe"=>43);

$json = '{"Piter":35,"Ben":37,"Joe":43}';

$obyekt = json_decode($json);

$array = json_decode($json, true);

var_dump($array);
echo '<br>' . $array['Ben'];
 ?>