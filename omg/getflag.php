<?php

//echo $_POST["password"];

if(sha1($_POST["password"])==sha1("It16018938@#1")){
	echo "Flag is CaptureIT";
}else{
	header("Location:challenge.html");
}

?>