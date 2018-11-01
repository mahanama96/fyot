<html>
<body>

<?php
$str = $_POST["inputPassword2"];
$p = "";
$z=0;
$m;
for($x=0; $x<30;$x++){
    $p = $p.sha1($str[$x]);
    //echo ($p."<br>");
    if($x%5 == 4){
        $m[$z] = $p;
        $z++;
        $p = "";
    }



}

if ($m[0]=="fe5dbbcea5ce7e2988b8c69bcfdfde8904aabc1f1b6453892473a467d07372d45eb05abc2031647aac3478d69a3c81fa62e60f5c3696165a4e5e6ac4356a192b7913b04c54574d18c28d46e6395428abda4b9237bacccdf19c0760cab7aec4a8359010b0")
{
      echo("1/6");
}
if ($m[1]=="77de68daecd823babbb58edb1c8e14d7106e83bbc1dfd96eea8cc2b62785275bca38ac261256e2780ade7c2cf97f75d009975f4d720d1fa6c19f4897fe5dbbcea5ce7e2988b8c69bcfdfde8904aabc1fac3478d69a3c81fa62e60f5c3696165a4e5e6ac4")
{
    echo("2/6");
}
if ($m[2]=="356a192b7913b04c54574d18c28d46e6395428abb6589fc6ab0dc82cf12099d1c2d40ab994e8410c356a192b7913b04c54574d18c28d46e6395428ab0ade7c2cf97f75d009975f4d720d1fa6c19f48970ade7c2cf97f75d009975f4d720d1fa6c19f4897")
{
    echo("3/6");
}
if ($m[3]=="c1dfd96eea8cc2b62785275bca38ac261256e278ac3478d69a3c81fa62e60f5c3696165a4e5e6ac41b6453892473a467d07372d45eb05abc2031647afe5dbbcea5ce7e2988b8c69bcfdfde8904aabc1fac3478d69a3c81fa62e60f5c3696165a4e5e6ac4")
{
    echo("4/6");
}
if ($m[4]=="da4b9237bacccdf19c0760cab7aec4a8359010b0356a192b7913b04c54574d18c28d46e6395428ab77de68daecd823babbb58edb1c8e14d7106e83bbc1dfd96eea8cc2b62785275bca38ac261256e2780ade7c2cf97f75d009975f4d720d1fa6c19f4897")
{
    echo("5/6");
}
if ($m[5]=="ac3478d69a3c81fa62e60f5c3696165a4e5e6ac41b6453892473a467d07372d45eb05abc2031647a356a192b7913b04c54574d18c28d46e6395428abac3478d69a3c81fa62e60f5c3696165a4e5e6ac4fe5dbbcea5ce7e2988b8c69bcfdfde8904aabc1f")
{
    echo("6/6");
}
if (sha1($str)=="c617898b1f6f50f9e39566019869c569f2ae4b89")
{
    header('Location: http://localhost/ctf/level9verify.html');
    exit;
}

else
{
    header('Location: http://localhost/ctf/level9.html');
    exit;
}
echo(sha1($str));
?>

</body>
</html
<?php
/**
 * Created by PhpStorm.
 * User: Pavithra
 * Date: 8/28/2018
 * Time: 10:15 PM
 */