<HTML>
<script>
function change_location(){
	window.location="http://www.google.com/";
}

function popup_redirect(){
        //self.setTimeout(window.location="http://www.google.com/", 3000);
	setTimeout("location.href='http://www.yahoo.com'",3000)
	//window.location="http://www.google.com/";
	popupwindow = window.open("popup3.html","popup","height=300, width=250, 				   scrollbars=no, status=no, toolbar=no, location=no");


}
</script>
<BODY>

<a href="http://www.iloveturkeybutihateyou.com/example.html" onClick="window.location='http://www.google.com/'">Click me baby</a>

<?php
$now = time();
echo "$now";
while ((time() - $now) < 3) {}
    
echo 'Three seconds';
?> 

</BODY>
</HTML>