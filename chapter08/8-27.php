<?php
	session_start();
	if (empty($_SESSION[userid]))
	{
		die("이 페이지는 사용자 인증이 필요합니다.");
	}
?>
성공적으로 로그인 하였습니다.<BR>
접속된 아이디는 <?php=$_SESSION[userid]?>입니다.