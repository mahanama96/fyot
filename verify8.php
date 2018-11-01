<html>
<body>

<?php
$str = $_POST["inputPassword2"];

if (sha1($str) == "bc8171c64445928e46676c0578c7b798cf7d67d1")
{
    header('Location: level8verify.html');
    exit;
}
else
{
    //echo (sha1($str));
    header('Location: level8.html');
    exit;
}
?>

</body>
</html>