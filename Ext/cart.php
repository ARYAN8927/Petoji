﻿<?php
session_start();
if(isset($_SESSION['log']))

{
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Petogi | Cart</title>
  <link rel="stylesheet" href="../css/cart.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <header class="header">
    <div class="mobile_navbar_btn">
      <i class="fa fa-bars" aria-hidden="true"></i>
      <i class="fa fa-times" aria-hidden="true"></i>
    </div>
    <!-- <img src="Res/White_and_Blue_Pet_House_Logo_Design-removebg-preview.png" alt="logo" class="logo"> -->
    <div class="mid">
      <a href="../Home.html" class="img_link"><img
          src="../Res/White_and_Blue_Pet_House_Logo_Design-removebg-preview.png" alt="logo" class="logo"></a>
      <div class="p">
        <a href="../Home.html" class="img_link">
          <p class="p1">Petoji</p>
          <p class="p2">for your lovable ones</p>
        </a>
      </div>
      <div class="navbar">
        <ul class="navbar_list" id="navbar">
          <li><a id="services" class="navbar_link" href="#"><i class="fa fa-user-circle" aria-hidden="true"></i>
              User<i class="fa nav_icon fa-angle-down" aria-hidden="true"></i></a>
            <div class="dropdown_list">
              <ul>
                <li class="dropdown_items"><a href="./grooming.html">Profile</a></li>
                <li class="dropdown_items"><a href="./petwalk.html">Orders</a></li>
                <li class="dropdown_items"><a href="./logout.php">Sign Out</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
    
  </header>
  <br><br><br>
  <div class="main_container">
    <div class="product_container">
      <div class="products_head">
        <div class="prod_head prodh_details">Product</div>
        <div class="prod_head prodh_qty">Quantity</div>
        <div class="prod_head prodh_price">Price</div>
        <div class="prod_head prodh_total">Total</div>
      </div>
      <div id="dynamic_product_list" class="dynamic_product_list">

      </div>
    </div>
    <div class="final_cart_total">
      <div class="menus final_cart_title">Amount Payable</div>
      <div class="menus gross_amount_menu">
        <div class="gross_amount_menu_list gross_amount_title">Gross Amount</div>
        <div class="gross_amount_menu_list gross_amount_value">
          <span class="rupee_symbol"></span>
          <span id="cart-total">0</span>
          <span class="new_line"></span>
          <span class="rupee_symbol"></span>
          <span id="cart_l_total" class="strike-through">0</span>
        </div>
      </div>
      <div class="menus savings">
        <div class="saving_menu_list saving_title">Savings</div>
        <div class="saving_menu_list saving_value">
          <span class="rupee_symbol"></span>
          <span id="cart_savings">0</span>
        </div>
      </div>
      <div class="menus shipping_menu">
        <div class="shipping_menu_list shipping_title">Shipping Charges</div>
        <div class="shipping_menu_list shipping_charge">Free</div>
      </div>
      <div class="menus net_amount_menu">
        <div class="net_amount_list net_amount_title">Net Amount</div>
        <div class="net_amount_list net_amount_charge">
          <span class="rupee_symbol"></span>
          <span id="net_cart-total">0</span>
        </div>
      </div>
      <div class="menus Checkout">
        <button id="checkout-btn" class="checkout-btn">Checkout</button>
      </div>
    </div>
  </div>
  <footer class="home_footer">
    <div class="left_foot">
      <p>Petoji Pet Pare, Grooming & Consultancy Service LTD. © 2019-2023, All Rights Reserved</p>
      <p><i class="fa fa-map-marker" aria-hidden="true"></i>
        1, Vidyasagar Street, kol-700 009</p>
    </div>
    <div class="mid_foot">
      <!-- <p>Company</p> -->
      <a href="#">Blog</a>
      <a href="#">Careers</a>
      <a href="#">About us</a>
      <a href="#">Help-Center</a>
      <a href="#">Terms & Conditions</a>
      <a href="#">Privacy Policy</a>
    </div>
    <div class="right_foot">
      <h5>Contact Us</h5>
      <div class="right_foot1">
        <a href="https://mail.google.com/" target="_blank"><img src="../Res/gmail.png" alt="gmail">Talk to Us</a>
      </div>
      <h5>Connect to us</h5>
      <div class="right_foot2">
        <a href="https://www.facebook.com/" target="_blank" id="a1"><img src="../Res/facebook.png" alt="facebook"></a>
        <a href="https://instagram.com/" target="_blank"><img src="../Res/instagram.png" alt="instagram"></i></a>
        <a href="https://www.linkedin.com/" target="_blank"><img src="../Res/linkedin.png" alt="linkedin"></a>
      </div>
    </div>
  </footer>
</body>
<!-- <script src="../css/pro_cart.js"></script> -->
<script src="../css/cart.js"></script>

</html>

<?php
}
else
{
echo "Invalid Request<br><br>Redirecting To Login Page .....";
header("refresh:2;url=login.php");
}
?>