<?php
/*Попробовать опеределить функцию B внутри функции A. Попробовать вызвать отдельно  А, отдельно В, сначала В потом А, сначала А потом В. Проанализировать результат*/
function A()
{
	echo '0';
}
function B()
{
	A();
	{
		echo '1';
	}
}
B();
?>