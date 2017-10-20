<?php
function factorial($x) {
if ($x === 0) return 1;
else return $x*factorial($x-1);
}
echo factorial(5); // output = 120
?>