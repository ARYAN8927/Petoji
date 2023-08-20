<?php   
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
echo "<center><h3><span style='color:Green'>You have Successfully been LOGGED OUT !!!<br>Please wait while you are Redirected to Login Page.....</span>         </h3><br><img src='../pic/loader.gif' height=5% width=2.5%></center>";
header("refresh:2;url=LogIn.php"); //to redirect back to "http://localhost/Shop" after logging out
exit();
?>