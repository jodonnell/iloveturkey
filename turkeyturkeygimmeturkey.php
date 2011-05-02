<HTML>
  <TITLE>YOU LOVE TURKEY BUT HATE ME</TITLE>
  <BODY bgcolor="#FF8C67" text="#ffffff">
    <MAP name="mymap">
      <AREA SHAPE="RECT" COORDS="588,412,704,480" HREF="contact.html">
      <AREA SHAPE="RECT" COORDS="300,340,350,400" HREF="vagina.html">
      <AREA SHAPE="RECT" COORDS="290,212,344,264" HREF="date.html">
      <AREA SHAPE="RECT" COORDS="346,176,390,212" HREF="turkeymusic.html">
      <AREA SHAPE="RECT" COORDS="288,98,346,156"  HREF="readmeastoryturkeyman.html">
      <AREA SHAPE="RECT" COORDS="534,362,630,408" HREF="vagina.html">
      <AREA SHAPE="RECT" COORDS="520,232,621,257" HREF="date.html">
      <AREA SHAPE="RECT" COORDS="522,189,594,210" HREF="turkeymusic.html">
      <AREA SHAPE="RECT" COORDS="532,123,622,146" HREF="readmeastoryturkeyman.html">
    </MAP>
    <IMG SRC="turkeyfront.jpg" width="962" height="623" border="0" alt="imagemap" USEMAP="#mymap"> 
    <br>
OMG AFTER A LONG BREAK WE ARE BACK AND WE ARE READY 4 BUSINZES.<br>
<a href='stories/heath.html'>HEATH TIME</a>
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
  </BODY>
</HTML>
