<!doctype html>
<title>Thankyou</title>
<head>


<!-- Hotjar Tracking Code for https://www.staff.science.uu.nl/~nimwe105/a/ 

HIER KOMT DE TRACKING CODE VAN HOTJAR!!

-->




<style type="text/css">
.txt {
position: absolute;
top: 30%;
padding: 10px;
left: 30%;
right: 30%;
font-size: medium;
font-family: Verdana, Geneva, sans-serif;
text-align: center;
color: black;
background-color: silver;
}
</style>
</head>


<?php
$bestand=$_POST['bestandsnaam'];
$timestamp2=date("d F Y H:i:s");
//$timestamp2=time();
$eindbestand=fopen("$bestand.txt", "a+") or die("Unable to open file!"); 
fwrite($eindbestand, "eindtijd : ".$timestamp2); 
fclose($eindbestand); 
?> 


<body>
<div class="txt">Dankje wel!</div>
</body></html>


