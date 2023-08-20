<?php
$host='localhost';
$username='root';
$password='';
$databasename='Petoji';
$connect=mysqli_connect($host,$username,$password);
$db=mysqli_select_db($connect,$databasename);

session_start();

// $host='localhost';
// $username='root';
// $password='';
// $databasename='Petoji';
// $connect=mysqli_connect($host,$username,$password);
// $db=mysqli_select_db($connect,$databasename);
$phn_no = $_POST['l_phn_no'];
$l_password = $_POST['l_password'];
$qry="SELECT * FROM cust_acc WHERE BINARY Phn_no='$phn_no' && BINARY L_Password='$l_password'";
$res=mysqli_query($connect,$qry);
$num_row=mysqli_num_rows($res);
$row=mysqli_fetch_assoc($res);
if( $num_row == 1 )
{
	echo "<br><br><br><center><h3><span style='color:Green'>Successful Login!!!<br>Please wait while you are Redirected to your Account.....</span>
            <br><img src='../pic/please-wait.gif' height=15% width=20%></h3></center>";
    $_SESSION['log']=$phn_no;
	header("refresh:3;url=../Petoji.html");
}
else
{
	//echo "<center><h3><span style='color:Red'>Invalid User!!!<br>Please wait while you are Redirected to Login Page..... </span></h3><br><img src='../pic/loader.gif' height=5% width=2.5%></center>";
    header("Location:LogIn.php?msg=3");
}
?>