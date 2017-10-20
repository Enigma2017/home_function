<?php
//Вычислить рекурсивно x^n, где n - любое целое (в т.ч. отрицательное)
function myDegree($x, $n)
{
  if($n == 0)
  {
    return 1;
  }
  if($n < 0)
  {
    return myDegree( 1/$x, -$n);
  }
  return $x * myDegree($x, $n-1); 
}
//для проверки самого первого вызова функции
$y = myDegree(5, 3); 
print $y;
?>