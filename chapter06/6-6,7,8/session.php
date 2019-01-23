<?php
	session_start();
	echo SID . '<P>';
?>
<a href="nexpage.php?<?php=strip_tags(SID)?>">다음 페이지</a>