<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">
   
   <head>
      <title>Login</title>

      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>welcome to CTF</title>

    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../new.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script type="text/javascript" src="../style.js"></script>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      
      <style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #ADABAB;
         }
         
         .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #017572;
         }
         
         .form-signin .form-signin-heading,
         .form-signin .checkbox {
            margin-bottom: 10px;
         }
         
         .form-signin .checkbox {
            font-weight: normal;
         }
         
         .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
         }
         
         .form-signin .form-control:focus {
            z-index: 2;
         }
         
         .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:#017572;
         }
         
         .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#017572;
         }
         
         h2{
            text-align: center;
            color: #017572;
         }
      </style>
      
   </head>
	
   <body>
      
     
      <div class = "container form-signin">
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'admin' && 
                  $_POST['password'] == 'admin') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'admin';
                  
                  echo 'You have entered valid use name and password';

                  $url="../crackme/crack.html";

                  header('Location: '.$url);
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div> <!-- /container -->
      
      <div class="container" style="text-align:center">
         <div class="row">
        <div class="console">

         <h1 style="text-align: center;"><strong><font size="20"> Department of Defence </br>Galactic Republic </br> President's Login</font></strong></h1></strong>

         <img src="galactic-logo.png" style="width:200px;height:200px;text-align:center">       
         <h3 style="padding:10px 10px 10px 10px; background-color:#FFF;text-align: center;"> <a href="brutal.txt">Click here </a> for Galactic Republic Most Wanted List<br><br>
      
         <form class = "form-signin" role = "form" 
            action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">

            <!--<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>-->

            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username = tutorialspoint" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password = 1234" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
			
         Click here to clean <a href = "logout.php" tite = "Logout">Session.
        </div></div> 
      </div> 
      
   </body>
</html>