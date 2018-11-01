<html>
<body>
<?php

$str = $_POST["inputPassword2"];

if (sha1($str) == "test")
{
    header('Location: http://localhost/ctf/level11');
    exit;
}
else
{
    header('Location: http://localhost/ctf/level10.html');
    exit;
}

?>

</body>
</html>
