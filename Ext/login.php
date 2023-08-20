<?php
session_start();
if(!isset($_SESSION['log']))

{
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petogi | Login</title>
    <link rel="stylesheet" href="../css/Login.css">
</head>

<body>
    <!-- <center>
        <h2>Welcome to Petoji <br>
            for your lovable ones
        </h2>
    </center> -->
    <div class="popup_container">
        <div id="login" class="login">
            <img src="../Res/bear.png" alt="Login Image" class="img_login">
            <div class="form_container">
                <form action="check_login.php" class="login_form" method="post">
                    <label for="title" class="title"><center>Welcome Back !!!</center></label><br>
                    <center>
                        <?php
                            if(isset($_GET["msg"]))
                            {
                                $message = $_GET["msg"];
                                if($message == 1)
                                {
                                    echo "<span style='color:green'>You have Successfully been REGISTERED.....</span>";
                                }
                                else if($message == 2)
                                {
                                    echo "<span style='color:red'>Error !!! An ACCOUNT with Your Mobile Number already EXISTS !!! Try with a New One !!!</span>";
                                }
                                else if($message == 3)
                                {
                                    echo "<span style='color:red'>Error !!! Invalid UserName/Password !!!</span>";
                                }
                                else if($message == 0)
                                {
                                    echo "<span style='color:red'>Error !!! Failed to Register !!!</span>";
                                }
                            
                            }
                        ?>
                    </center>
                    <br><br>
                    <label for="mobile_no">Mobile Number : <span class="req"></span></label>
                    <select name="country_code" id="country_code" class="form_input" required>
                        <!-- <option data-countryCode="IN" value="">Select Country Code</option> -->
                        <option data-countryCode="IN" value="91">+91</option>
                    </select>
                    <input type="tel" class="form_input" name="l_phn_no" required><br><br>
                    <label for="password">Password : <span class="req"></span></label>
                    <input type="password" class="form_input" name="l_password" required><br><br>
                    <center><button class="btn_login" type="submit">Login</button></center><br><br>
                    <center>
                        <label for="signup">Not a User! <a href="Signup.php" class="not_user" onclick="toggle_signup()">Click Here</a> to Signup.</label>
                    </center>
                </form>
            </div>
            <!-- <div class="close" onclick="toggle_login()">X</div> -->
        </div>
    </div>
</body>

</html>

<?php
}
else
{
echo $_SESSION['log'];
echo " already logged in....<br><br>Redirecting To Home Page .....";
header("refresh:2;url=../profile.html");
}
?>