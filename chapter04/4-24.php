<?
	$filename = "something.txt";

	$handle = fopen($filename, "r");
	$contents = fread($handle, filesize($filename));

	fclose($handle);
?>