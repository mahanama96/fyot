<?php
//echo $_POST["flag_unvalidated"];
//echo $_POST["level_code"];
//echo (int)$_POST["level_id"];

$lvlstatus="flag_captured";
$val_string=$_POST["flag_unvalidated"].$_POST["level_code"].$lvlstatus;
$flagid=(int)$_POST["level_id"];
$flags=array("error","cc6b946e7b6cf972e7337b6c6b45a78234a02e91","90f0ea693a75d0c672d5db020ad2c7515bde3cbb","d172da95e41f3ec8a190737e16ae51be02fde71b","94041a69ed23692263cb66b17dc6a61c6ce39834","f5b326765c9aa4aa7f3ff808827754b6a5ddd9d9",sha1("flag6"),sha1("flag7"),"99e88b7f0f95ab176bdee429757d1a315f881cbd","c257d74726d1c83cbc3084ea1b560d6c89764d06","16b05537dcd7cecbbf37a3773cd1365e01178611","32df8f7e1df3906f3463171d28ead95862d39d60",sha1("flag12"),sha1("flag13"),sha1("flag14"),sha1("flag15"));


//echo sha1($_POST["level_code"])
//echo $flagid;


if($flags[$flagid]==sha1($_POST["flag_unvalidated"])){
	$cookie_name=sha1($_POST["level_code"]);
	$cookie_value = sha1($val_string);
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	header("Location:dashboard.php");
}else{
	header("Location:dashboard.php");
	//echo (sha1("flag_unvalidate"));
}
//echo sha1($val_string);

//echo $val_string;

//$cookie_name = "level_info";


?>