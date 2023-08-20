<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petogi | Signup</title>
    <link rel="stylesheet" href="../css/Login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
</head>

<body>
    <!-- <div class="container">
        <div class="left">
            <img src="E:\Mini Project\Res\kids-4967808-modified-fotor-bg-remover-2023042811134.png" alt="kids-4967808">
        </div>
        <div class="right">
            <div class="top">
                <button class="btn1"><span style="color : white">Welcome to Petoji</span></button>
            </div>
            <div class="bottom">
                <form action="backend.php" method="post">
                    <input type="text" name="firstName" id="firstName" placeholder="First Name" required>
                    <br>
                    <input type="text" name="secondName" id="secondName" placeholder="Second Name" required>
                    <br>
                    <input type="email" name="email" id="email" placeholder="Email Address" required>
                    <br>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <br><br>
                    <button class="btn2">REGISTER NOW!</button>
                </form>
                <p id="p1">by clicking the button you agreeing to our<a href="Terms & Conditions"> Term and Services</a>
                </p>
            </div>
        </div>
    </div> -->
    <div class="popup_container">
        <div id="signup" class="signup">
            <img src="../Res/bear.png" alt="Sign Up Image" class="img_signup">
            <div class="form_container">
                <form action="register.php" class="signup_form" method="post">
                    <label for="title" class="title"><center>Welcome to Petoji !!!</center></label><br>
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
                                    echo "<span style='color:red'>Error !!! Entered Password do not MATCH !!!</span>";
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
                        <option data-countryCode="IN" value="91">+91</option>
                    </select>
                    <input type="tel" class="form_input" name="reg_phn_no" required><br><br>
                    <label for="email">E-Mail : <span class="req"></span></label>
                    <input type="email" class="form_input" name="reg_email" required><br><br>
                    <label for="password">Password : <span class="req"></span></label>
                    <input type="password" class="form_input" name="reg_l_password" required><br><br>
                    <label for="confirm_password">Confirm Password : <span class="req"></span></label>
                    <input type="password" class="form_input" name="reg_cl_password" required><br><br>
                    <center><button class="btn_signup" type="submit">Sign Up</button></center><br><br>
                    <center>
                        <label for="login">Already a User! <a href="Login.php" class="user" onclick="toggle_login()">Click Here</a> to Login.</label>
                    <p id="p1">By Signing Up, you agree to our<a href="Terms & Conditions"> Term and Services</a>
                    </p>
                </center>
                </form>
            </div>
            <!-- <div class="close" onclick="toggle_signup()">X</div> -->
        </div>
    </div>
</body>

</html>