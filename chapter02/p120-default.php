<?php
	function ezphp_net ($url = "http://ezphp.net")
	{
		return "홈페이지 주소 : $url<BR>";
	}

	echo ezphp_net ();
	echo ezphp_net ("http://www.ezphp.net");
?>