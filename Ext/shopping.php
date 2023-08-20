<?php
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
    <title>Petogi | Shopping</title>
    <link rel="stylesheet" href="../css/shopping.css">
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
                <p class="p1">Petoji</p>
                <p class="p2">for your lovable ones</p>
            </div>
        </div>

        <form action="backend.php" method="post">
            <input type="search" name="searchbar" class="searchbar" placeholder=" search">
            <button type="submit" class="submit"><i class="fa fa-search" aria-hidden="true"></i>
            </button>
        </form>
        <nav class="navbar">
            <ul class="navbar_list" id="navbar">
                <!-- <li><a class="navbar_link" href="../Home.html"><i class="fa nav_icon fa-home" aria-hidden="true"></i>
                        Home</a></li>
                <li><a class="navbar_link" href="./Shopping.html" target="_blank"><i class="fa nav_icon fa-shopping-bag"
                            aria-hidden="true"></i>
                        Shopping</a></li> -->
                <li><a id="services" class="navbar_link" href="#"><i class="fa fa-user-circle" aria-hidden="true"></i>
                        User<i class="fa nav_icon fa-angle-down" aria-hidden="true"></i></a>
                    <div class="dropdown_list">
                        <ul>
                            <li class="dropdown_items"><a href="profile.php">Profile</a></li>
                            <li class="dropdown_items"><a href="#">Orders</a></li>
                            <li class="dropdown_items"><a href="logout.php">Sign Out</a></li>
                        </ul>
                    </div>
                </li>
                <li><a class="right_link" href="./cart.php" target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                </li>
            </ul>
        </nav>
    </header>
    <br><br><br><br>
    <div class="main_container">
        <!-- <div class="filter">
            <label for="filter">Category : </label><span class="tab"></span>
            <ul class="filter_menu">
                <li class="menus all">All</li>
                <li class="menus f_toys">Toys</li>
                <li class="menus f_food">Food</li>
                <li class="menus f_medicine">Medicine</li>
                <li class="menus f_clothes">Clothes</li>
            </ul>
        </div> -->
        <div class="filter">
            <label for="filter">Filters</label><br>
            <ul class="filter_menu">
                <li class="menus">Category<i class="fa nav_icon fa-angle-down" aria-hidden="true"></i></li>
                <li class="menus">P-Assured<i class="fa nav_icon fa-angle-down" aria-hidden="true"></i></li>
                <li class="menus">Price<i class="fa nav_icon fa-angle-down" aria-hidden="true"></i></li>
                <li class="menus">Brand<i class="fa nav_icon fa-angle-down" aria-hidden="true"></i></li>
                <li class="menus">Customer Rating<i class="fa nav_icon fa-angle-down" aria-hidden="true"></i></li>
                <li class="menus">Availability<i class="fa nav_icon fa-angle-down" aria-hidden="true"></i></li>
            </ul>
        </div>
        <div class="product_container">
            <div class="products toys">
                <a class="product_link" href="toy.php" target="_blank">
                    <div class="prod_img_placeholder"><img src="../Res/product-page1-product1.webp" class="prod_img">
                    </div>
                    <div class="prod_title">Pet Dog Ball Teeth
                        Silicon Toy Sound Silicone Squeaky Toy For Dog & Cat Squeak Toys
                        for Pets</div>
                </a>
                <div class="prod_price">₹ 129 <span class="space"></span><span class="strike-through">₹ 199</span></div>
            </div>
            <div class="products foods">
                <a class="product_link" href="pedigree.php" target="_blank">
                    <div class="prod_img_placeholder"><img src="../Res/image-product-1-thumbnail.jpg" class="prod_img">
                    </div>
                    <div class="prod_title">Pedigree Puppy Dry Dog Food Food, Chicken & Milk, 5.5 Kg Pack</div>
                </a>
                <div class="prod_price">₹ 2699 <span class="space"></span><span class="strike-through">₹ 3499</span>
                </div>
            </div>
            <div class="products medicines">
                <a class="product_link" href="medicine.php" target="_blank">
                    <div class="prod_img_placeholder"><img src="../Res/product-page3-product1.jpg" class="prod_img">
                    </div>
                    <div class="prod_title">Pupkart Himalaya Anxocare Vet Tablet (60 Tablets)</div>
                </a>
                <div class="prod_price">₹ 175 <span class="space"></span><span class="strike-through">₹ 199</span></div>
            </div>
            <div class="products clothes">
                <a class="product_link" href="wearables.php" target="_blank">
                    <div class="prod_img_placeholder"><img src="../Res/product-page4-product1.jpg" class="prod_img">
                    </div>
                    <div class="prod_title">Lulala Dog Printed T-Shirts Clothes Vest Puppy Costumes Cool Puppy T-Shirts Breathable Dog Outfit Soft Clothes for Dog and Cat</div>
                </a>
                <div class="prod_price">₹ 349 <span class="space"></span><span class="strike-through">₹ 699</span></div>
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

</html>

<?php
}
else
{
echo "Invalid Request<br><br>Redirecting To Login Page .....";
header("refresh:2;url=login.php");
}
?>