<?php
 
    include 'secret.php';
	
    if($_GET["str1"] && $_GET["str2"]){
        if ($_GET["str1"] and $_GET["str2"] and
            hash("md5" , $salt . $_GET["str1"]) === hash("md5" , $salt . $_GET["str2"])) {
            echo $flag;
        } else{
            echo "Sorry, you are doing wrong";
        }
        exit();
}

?>
     