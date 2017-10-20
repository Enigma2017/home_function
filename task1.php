<?php
//дано целое N. Найти такие q, для которых N делится на q^2 и не делится на q^3
$n = 9;
$arr = [1, 2, 3, 4, 5];
foreach ($arr as $elem) {
	echo "formula = $n/$elem**2 = " . $n/$elem**2 .' <br>' ;
		echo "formula = $n/$elem**3 = " . $n/$elem**3 .' <br>';
}
