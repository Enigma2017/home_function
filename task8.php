<?php
////дана строка. Убрать из нее все повторения символов. Например Hello world -> Helo wrd - сделать через функцию
$x = "Hello, my <br> super \r\n world";
$phrase = implode('', array_unique(str_split($x)));
function delLet($phrase)
{
	print_r($phrase); //. '<br>';
}
delLet($phrase);