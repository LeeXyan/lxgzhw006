<?php

for ($i=1; $i <=9 ; $i++) { 
	for ($j=$i; $j >=1 ; $j--) { 
		echo  $j , "*" , $i , "=" , $j*$i , " "; 
	}
	echo  "<br>";
}