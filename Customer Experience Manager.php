<!---D.O.J.SILVA--->

<?php 

session_start();

if (isset($_SESSION["email"])) {
        include "logged-in-header.php";
    } else {
	include "logged-out-header.php";
    header("Location: Login-page.php");
        exit();
    }

$email = $_SESSION["email"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online4 Customer Support System</title>
    <link rel="stylesheet" type="text/css" href="mycss.css">
    <script src="script.js"></script>
</head>
<body> 
	
<?php include "footer.php" ?>   
    
</body>

</html>	