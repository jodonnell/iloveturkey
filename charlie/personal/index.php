<html>
<head>
<title>Velvet City</title></head>
<body bgcolor=000000 black leftmargin=100>
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
<MAP name="mymap">
<AREA SHAPE="poly" COORDS="441,340,448,352,457,367,449,413,441,414,439,376,431,363,440,342" HREF="lady.htm" alt="The Lady">
<AREA SHAPE="poly" COORDS="280,207,292,208,292,195,280,196" HREF="home.htm" alt="Apartment">
</MAP>
<br><br>
<center><IMG SRC="citymap.jpg" width="700" height="517" border="3"
alt="Velva" USEMAP="#mymap"> 
</body></html>