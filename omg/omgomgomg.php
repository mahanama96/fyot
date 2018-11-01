 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_f00l";



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$str = $_POST["anger1"] = "what";

$sql = "SELECT * FROM oh_crap WHERE what= " . $str ." ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Fool's Name : " . $row["how"]. " - Anger : " . $row["what"]."<br>";
    }
} else {
    echo "0 results";
}

//mysqli_close($conn);
?> 
<!DOCTYPE html>
<html>
<head>
	<link href="../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../new.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../style.css" />
    <script type="text/javascript" src="style.js"></script>
	<title> OMG </title>
</head>
<body>

</body>
</html>

<div class="container">
<div class="d-flex justify-content-center align-items-center" id="main">
    <h1 class="mr-3 pr-3 align-top border-right inline-block align-content-center">404</h1>
    
    	<h2 class="font-weight-normal lead" id="desc">I told you soo..... <br> Theres nothing here!</h2>

		<form class="form-inline"  action="omgomgomg.php" method="post">
                    <div class="form-group">
                        <label class="sr-only">Nothing</label>
                        <p class="form-control-static">Release your anger here! </p>
                    </div>
                    <div class="form-group mx-sm-3">
                        <label for="anger1" class="sr-only">anger</label>
                        <input type="text" class="form-control" id="anger1" name="anger1" placeholder="Your anger :P " required>
                    </div>
                    <button type="submit" class="btn btn-primary" onclick=<?php /*

                    										$str = $_POST["anger1"] = "Nothing";
                    										$sql1="INSERT INTO oh_crap (what,how)
															VALUES ('Random_user', '$str')";

															if ($conn->query($sql) === TRUE) {
															    echo "Your anger spreaded evenly";
															} else {
															    echo "Error: " . $sql . "<br>" . $conn->error;
															}
															*/?> >

															Spread Anger  </button>


        </form>
    
</div>
</div>     