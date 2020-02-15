<?php
	$n = 18;
	if($n%10==0 && $n%5==0 && $n%2==0){
		echo("$n é divisível por 10, 5 e 2!");
		
	}else if($n%10==0){
		echo("$n é divisível por 10!");
	}
	else if($n%5==0){
		echo("$n é divisível por 5!");
	}
	else if($n%2==0){
		echo("$n é divisível por 2!");
	}
?>