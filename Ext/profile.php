<?php
session_start();
if(isset($_SESSION['log']))

{
?>



<?php
}
else
{
echo "Invalid Request<br><br>Redirecting To Login Page .....";
header("refresh:2;url=login.php");
}
?>