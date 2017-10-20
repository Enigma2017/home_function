<?php
//дана строка со словами. Получить массив слов (explode)
$str = "Dum spiro spero";
$arr = str_split($str, 9);
function strArr($arr)
{
	print_r($arr). '<br>';
}
strArr($arr);