<?php
	$a = 3;
	$b = 5;
	
	if ( $a > 0 && $b > 0) {
		if ( $a > $b ) echo "$a 은(는) $b 보다 크다.";
		else echo "$a 은(는) $b 보다 작다.";
	}
	else echo "두 변수 중 적어도 하나가 자연수가 아닙니다.";
?>