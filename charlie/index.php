<html>
<body bgcolor=white>
<center><img src=Img_3903.jpg alt="Hot">

This page has been visited this many times:  
<?php
	if (file_exists('count_file.txt')) 
	{
		$fil = fopen('count_file.txt', r);
		$dat = fread($fil, filesize('count_file.txt')); 
		echo $dat+1;
		fclose($fil);
		$fil = fopen('count_file.txt', w);
		fwrite($fil, $dat+1);
	}
?>