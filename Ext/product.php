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
    <title>Petoji | Product</title>
    <link rel="stylesheet" href="../css/product4.css">
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
                            <li class="dropdown_items"><a href="./grooming.html">Profile</a></li>
                            <li class="dropdown_items"><a href="./petwalk.html">Orders</a></li>
                            <li class="dropdown_items"><a href="./consultancy.html">Sign Out</a></li>
                        </ul>
                    </div>
                </li>
                <li><a class="right_link" href="./cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                </li>
            </ul>
        </nav>
    </header>
    <br><br><br>
    <!-- <div class="main_container">
        <div class="product_img">
            <img src="../Res/image.png" class="prod_img">
            <div class="buttons">
                <div class="addtocart">Add To Cart</div>
                <div class="buy_now">Buy Now</div>
            </div>
        </div>
        <div class="product_details">
            <div class="title">Product Name</div>
            <div class="price">₹ XXX <span class="space"></span><span class="strike-through">₹ XXX</span></div>
            <div class="rating">Ratings : <span class="space"></span>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
            </div><br><br><br><br>
            <div class="delivery">Expected Delivery in Days</div>
            <div class="seller">Seller : Seller Name</div><br><br>
            <div class="details">Product Details : </div><br><br><br><br>
            <div class="review">Customer Reviews : </div><br><br><br><br>
        </div>
    </div> -->

    <div class="main">
        <div class="left-container">
            <img src="../Res/product-page4-product1.jpg" alt="image-product" id="mainImage">
            <ul>
                <li><img src="../Res/product-page4-product1.jpg" alt="image-product-1-thumbnail" class="smallImg">
                </li>
                <li><img src="../Res/product-page4-product2.jpg" alt="image-product-2-thumbnail" class="smallImg">
                </li>
                <li><img src="../Res/product-page4-product3.jpg" alt="image-product-3-thumbnail" class="smallImg">
                </li>
                <li><img src="../Res/product-page4-product4.jpg" alt="image-product-4-thumbnail" class="smallImg">
                </li>
            </ul>
        </div>
        <div class="right-container">
            <!-- <p style="color:hsl(26, 100%, 55%)">SNEAKERS COMPANY</p> -->
            <!-- <img src="../Res/download-removebg-preview.png" alt="download-removebg-preview"> -->
            <h2>Lulala Dog Printed T-Shirts Clothes Vest Puppy Costumes Cool Puppy T-Shirts Breathable Dog Outfit Soft Clothes for Dog and Cat(Yellow, 26 Inch)</h2>
            <p style="color:hsl(219, 9%, 45%)">Soft, Smooth & Breathable:- Made from combed cotton material, It has better breathability and durability. it has a soft texture, breathable and smooth, not easy to pilling, easy to wash, and quick-dry.
                Lightweight:- Easy to put on and take off. Suitable for daily wear and as a sports vest. Pets also move freely. It is fashionable and cute.
                Funny Pattern:- These dog t-shirts are designed in different patterns like teddy pattern colors to make your pet adorable and stylish.
                Wide Occasions:- This soft Dog and Puppy shirts can be worn for daily wear, walking, sports, travel, and other outdoor activities, suitable for taking photos and vacations, charming apparel for every pet wardrobe, suitable for everyday dog Puppy wear.
                Note:-Please Refer to Size Chart before Shopping</p>
            <h2>₹349.00 <span
                    style="background-color: hsl(25, 100%, 94%); color: hsl(26, 100%, 55%); font-size: 16px; text-align: center;border-radius: 5px;">50%</span>
            </h2>
            <h5 style="color: hsl(219, 9%, 45%); text-decoration: line-through;">₹699.00</h5>

            <div data-tooltip="Price:-₹349" class="button">
                <div class="button-wrapper">
                    <div class="text">Buy Now</div>
                    <span class="icon">
                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                            </path>
                        </svg>
                    </span>
                </div>
            </div>


        </div>
    </div>


    <script>
        var MainImg = document.getElementById("mainImage");
        var SmallImg = document.getElementsByClassName("smallImg");

        SmallImg[0].onclick = function () {
            MainImg.src = "../Res/product-page4-product1.jpg";
        }
        SmallImg[1].onclick = function () {
            MainImg.src = "../Res/product-page4-product2.jpg";
        }
        SmallImg[2].onclick = function () {
            MainImg.src = "../Res/product-page4-product3.jpg";
        }
        SmallImg[3].onclick = function () {
            MainImg.src = "../Res/product-page4-product4.jpg";
        }
    </script>
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