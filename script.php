<?php

if (isset($_GET['status']))
{
	$file =fopen("file.txt","w");
	if($_GET['status'] == "on")
	{
		fwrite($file,'1');
		header("Location:ledOn.html");
	}
	else if ($_GET['status'] == "off")
	{
		fwrite($file,'0');
		header("Location:ledOff.html");
	}
	fclose($file);
}













?>