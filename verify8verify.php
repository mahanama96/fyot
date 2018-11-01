<html>
<body>

<?php
$str = $_POST["inputPassword2"];

if (sha1($str) == "3f7f6761445f6bb2ccd25cd9fa3253c43e4efe72")
{
    header('Location: level9.html');
    exit;
}
else
{
    header('Location: level8verify.html');
    exit;
}
?>

</body>
</html>