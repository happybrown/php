<?php
$arr = array( '이태희' =>
				array( '국어' => 100,
				'영어' => 100,
				'수학' => 80
			),
			'박희선' =>
				array( '국어' => 90,
				'영어' => 100,
				'수학' => 90
			),
			'김동건' =>
				array( '국어' => 80,
				'영어' => 80,
				'수학' => 100
			)
);
echo $arr['이태희']['국어'] .','.$arr['이태희']['영어'] .','.$arr['이태희']['수학'];
echo '<BR>';
echo $arr['박희선']['국어'] .','.$arr['박희선']['영어'] .','.$arr['박희선']['수학'];
echo '<BR>';
echo $arr['김동건']['국어'] .','.$arr['김동건']['영어'] .','.$arr['김동건']['수학'];
?>