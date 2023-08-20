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
    <title>Petoji | Pedigree</title>
    <link rel="stylesheet" href="../css/product2.css">
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
                            <li class="dropdown_items"><a href="./profile.php">Profile</a></li>
                            <li class="dropdown_items"><a href="#">Orders</a></li>
                            <li class="dropdown_items"><a href="./logout.php">Sign Out</a></li>
                        </ul>
                    </div>
                </li>
                <li><a class="right_link" href="./cart.php" target="_blank"><i class="fa fa-shopping-cart"
                            aria-hidden="true"></i></a>
                </li>
            </ul>
        </nav>
    </header>
    <br><br><br><br>
    <div class="main">
        <div class="left-container">
            <div class="img_container" style="display: flex; gap: 50px;">
                <ul>
                    <li><img src="../Res/image-product-1-thumbnail.jpg" alt="image-product-1-thumbnail"
                            class="smallImg">
                    </li>
                    <li><img src="../Res/image-product-2-thumbnail.jpg" alt="image-product-2-thumbnail"
                            class="smallImg">
                    </li>
                    <li><img src="../Res/image-product-3-thumbnail.jpg" alt="image-product-3-thumbnail"
                            class="smallImg">
                    </li>
                    <li><img src="../Res/image-product-4-thumbnail.jpg" alt="image-product-4-thumbnail"
                            class="smallImg">
                    </li>
                </ul>
                <div class="img_holder"><img src="../Res/image-product-1-thumbnail.jpg" alt="image-product"
                        id="mainImage"></div>
            </div>
            <div id="bottom_button" class="bottom_button" style="display: flex; gap: 10px;margin-left: 150px;">
                <button id="add_to_cart" class="add_cart"
                    style="border-radius: 5px; background-color: #ef0000;width: 170px; height: 50px; font-size: 20px;"
                    onclick="addToCart(); changeCarttext()">Add
                    To Cart</button>
                <button id="buy_now" class="buy_now"
                    style="border-radius: 5px; background-color: #ef0000;width: 170px; height: 50px; font-size: 20px;">Buy
                    Now</button>
            </div>
        </div>
        <div class="right-container">
            <div class="right_list hidden p_id" style="display: none; position: absolute;">2</div>
            <div class="right_list hidden p_url" style="display: none; position: absolute;">pedigree.php</div>
            <div class="right_list hidden p_img_url" style="display: none; position: absolute;">
                ../Res/image-product-1-thumbnail.jpg</div>
            <div class="right_list pro_name">
                <h2 class="p_name">Pedigree Puppy Dry Dog Food Food, Chicken & Milk, 5.5 Kg Pack</h2>
            </div>
            <div class="rating" style="color: black; font-size: 15px;">Ratings : <span class="space"></span>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
            </div>
            <div class="right_list pro_price">
                <h2><span class="rupee_symbol"></span><span class="p_price">2699</span></h2>
                <div class="pro_lprice" style="display: flex;">
                    <h4><span class="rupee_symbol"
                            style="color: hsl(219, 9%, 45%); text-decoration: line-through;"></span><span
                            class="p_l_price"
                            style="color: hsl(219, 9%, 45%); text-decoration: line-through;">3499</span></h4>
                    <h4>
                        <span class="d_space"
                            style="color: hsl(26, 100%, 55%); font-size: 16px; text-align: center;border-radius: 5px;">23%
                            off</span>
                    </h4>
                </div>
            </div>
            <div class="right_list xptd_delivery">Delivery Expected in <span class="p_xptd_delivery">1</span> Day <br>
                Seller : Petoji</div>
            <div class="right_list pro_qty">
                Quantity (N) : <span class="p_qty">1</span> Unit
            </div>
            <div class="right_list pro_desc" style="color:hsl(219, 9%, 45%); font-size: 18px;">
                <span style="color: black; font-size: 20px;">Product Description : </span>
                <br><br>
                <!-- <span class="specs" style="color: black;">Material :</span> Plastic Polymers
                <br> -->
                <span class="specs" style="color: black;">Type :</span> Dog Food
                <br>
                <span class="specs" style="color: black;">Pet Type : </span>Dog
                <br>
                <!-- <span class="specs" style="color: black;">Activity Type : </span>Training
                <br> -->
                <span class="specs" style="color: black;">Suitable For : </span>All Ages
                <br>
                <span class="specs" style="color: black;">Chewable : </span>Yes
                <br>
                <!-- <span class="specs" style="color: black;">Color : </span>Multicolor
                <br> -->
                <span class="specs" style="color: black;">Country of Origin : </span>India
            </div>
            <div class="right_list pro_desc_long" style="color:hsl(219, 9%, 45%)">
                Complete and balanced dog food for puppy
                Provides strong muscles, bones & teeth and healthy skin & coat
                Ensures optimal digestion of nutrients and supports Natural Defences
                Puppies need 4x Protein, 9.5x Calcium & 53x Iron than human babies
                Developed by experts at the Waltham Centre for Pet Nutrition
            </div>
        </div>

    </div>


    <script>
        var MainImg = document.getElementById("mainImage");
        var SmallImg = document.getElementsByClassName("smallImg");

        SmallImg[0].onclick = function () {
            MainImg.src = "../Res/image-product-1-thumbnail.jpg";
        }
        SmallImg[1].onclick = function () {
            MainImg.src = "../Res/image-product-2-thumbnail.jpg";
        }
        SmallImg[2].onclick = function () {
            MainImg.src = "../Res/image-product-3-thumbnail.jpg";
        }
        SmallImg[3].onclick = function () {
            MainImg.src = "../Res/image-product-4-thumbnail.jpg";
        }
    </script>
    <!-- <script src="../css/pro_cart.js"></script> -->
    <!-- <script src="../css/cart.js"></script> -->
    <script src="../css/cart.js"></script>
    <script src="../css/cart_btn.js"></script>
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