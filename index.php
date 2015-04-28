<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	echo $uri;
	file_put_contents("E:/log.txt","打印操作\r\n",FILE_APPEND);
	file_put_contents("E:/log.txt",$uri,FILE_APPEND);
?>

