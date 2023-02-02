<?php
$array1 = array('black','white','red','blue','green','yellow');
$array2 = array('white','yellow');

if (array_intersect($array2, $array1) === $array2) {
  echo "It is a subset";
} else {
   echo "Not a subset";
}
?>