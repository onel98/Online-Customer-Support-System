<!---DOJ Silva--->
<?php 

session_start();

session_destroy();

header("Location: Login-page.php");

exit();
?>