<?php
	if (mkdir("dir", 0700)) {
		echo "디렉토리가 생성되었습니다.";
	} else {
		echo "디렉토리를 만드는데 실패하였습니다.";
	}
?>