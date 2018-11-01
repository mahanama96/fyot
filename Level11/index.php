<?php
    session_start();
    $_SESSION['mariBiscuit']=true;
    setcookie("biscuit", "no_biscuit", time() + (86400 * 30), "/");


?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Biscuit Game</title>
<meta name="description" content="slick Login">
<meta name="author" content="Webdesigntuts+">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="http://www.modernizr.com/downloads/modernizr-latest.js"></script>
<script type="text/javascript" src="css/placeholder.js"></script>


</head>
<body>
<form id="slick-login" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<label for="username">Code</label><input type="text" name="code" class="placeholder" placeholder="Need a code">
<input type="submit" value="Log In" name="sbmt">
</form>
<img src="de/you_can_get_code_from_me.png" width="100%" height="100%" >


<?php
    if(isset($_POST['sbmt']))
    {
        if($_POST['code']=='aervmacymjecoptmb')
        {
            echo "code correct";
            setcookie("c03_clue1","Challenge 3 : aervmacymjecoptmb",time() + (10 * 365 * 24 * 60 * 60),"/hack","localhost",false,true);
          echo "<script type='text/javascript'> alert('Congrats!! Code is correct!!'); window.location = 'http://localhost/hack'; </script>";
        }
        else{
            echo '<script type="text/javascript"> alert("Invalid code") </script>';

        }
    }


?>
