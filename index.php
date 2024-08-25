<?php
session_start();
$isLoggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script>
    <script src="https://kit.fontawesome.com/e6878467af.js" crossorigin="anonymous"></script>
</head>
<body>
    <section id="header">
        <a href="#"><img src="Ecmerse photos/smalllogo.png" alt="Logo" class="logo"></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shope.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fa-solid fa-cart-plus"></i></a></li>

                <?php if ($isLoggedIn): ?>
                    <li class="user-info">
                        <a href="akas.php"><img src="<?php echo htmlspecialchars($_SESSION['profile_photo']); ?>" alt="Profile Photo" class="profile-photo"></a>
                        <a href="akas.php?logout=true" class="logout">Logout</a>
                    </li>
                <?php else: ?>
                    <li id="login"><a href="akas.php"><i class="fa-solid fa-user-circle"></i> Login</a></li>
                <?php endif; ?>

                <a href="#" id="close"><i class="fa-solid fa-circle-xmark" style="color: #19191a;"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fa-solid fa-cart-plus"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>


    <!-- Main Content -->
    <main>
        <section id="hero">
            <h4 id="offer-text">Tread-in-offer</h4>
            <h2 id="deal-text">Super value deals</h2>
            <h1 id="product-text">on all products</h1>
            <p id="promo-text">Save more with coupons & up to 70% off!</p>
            <button id="shop-button">Shop Now</button>
        </section>
    </main>


<section id="feature" class="section-p1">
    <div class="fe-box">
        <img src="Ecmerse photos/f1.png">
        <h6>free shoping</h6>
    </div>
    <div class="fe-box">
        <img src="Ecmerse photos/f2.png">
        <h6>online order</h6>
    </div>
    <div class="fe-box">
        <img src="Ecmerse photos/f3.png">
        <h6>Saving</h6>
    </div>
    <div class="fe-box">
        <img src="Ecmerse photos/f4.png">
        <h6>promoction</h6>
    </div>
    <div class="fe-box">
        <img src="Ecmerse photos/f5.png">
        <h6>Happy sall</h6>
    </div>
    <div class="fe-box">
        
        <img src="Ecmerse photos/f6.png">
        <h6>F24/7 Support</h6>
    </div>
    

</section>
<!-- --------------------------products-------------------------------- -->
<section id="product1" class="section-p1">
    <div class="pro-container">
        <div class="pro" onclick="window.location.href='product.html?product=t1'">
            <img src="Ecmerse photos/ss1.png" alt="Embellished Bandhani Saree">
            <div class="des">
                <span style="color:red;">Ashis</span>

                <h5>Embellished  Saree</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>

        <div class="pro" onclick="window.location.href='product.html?product=t2'">
            <img src="Ecmerse photos/s1111.png" alt="KOTTY Silk Saree Set">
            <div class="des">
                <span>Ashis</span>
                <h5>Embellished  Saree</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>

        <div class="pro" onclick="window.location.href='product.html?product=t3'">
            <img src="Ecmerse photos/s111.jpg" alt="Casual Cotton Saree">
            <div class="des">
                <span>Ashis</span>
                <h5>Casual Cotton Saree</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>

        <div class="pro" onclick="window.location.href='product.html?product=t4'">
            <img src="Ecmerse photos/s11.jpg" alt="Corten Silk Saree">
            <div class="des">
                <span>Ashis</span>
                <h5>Corten Silk Sareet</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>

        <div class="pro" onclick="window.location.href='product.html?product=t5'">
            <img src="Ecmerse photos/c1.png" alt="Casual Linen Saree">
            <div class="des">
                <span>adidas</span>
                <h5>Casual Linen Saree</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>

        <div class="pro" onclick="window.location.href='product.html?product=t6'">
            <img src="Ecmerse photos/sa.png" alt="Graphic Print Saree">
            <div class="des">
                <span>adidas</span>
                <h5>Graphic Print Saree</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>

        <div class="pro" onclick="window.location.href='product.html?product=t7'">
            <img src="Ecmerse photos/c1.png" alt="Slim Fit Saree">
            <div class="des">
                <span>adidas</span>
                <h5>Slim Fit Saree</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>

        <div class="pro" onclick="window.location.href='product.html?product=t8'">
            <img src="Ecmerse photos/d1.png" alt="Casual printed women top">
            <div class="des">
                <span>adidas</span>
                <h5>Casual printed women top</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>

        <div class="pro" onclick="window.location.href='product.html?product=t9'">
            <img src="Ecmerse photos/n1.jpg" alt="Corten Astrunt T-shirt">
            <div class="des">
                <span>adidas</span>
                <h5>Corten Astrunt T-shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>

        <div class="pro" onclick="window.location.href='product.html?product=t10'">
            <img src="Ecmerse photos/n2.jpg" alt="Corten Astrunt T-shirt">
            <div class="des">
                <span>adidas</span>
                <h5>Corten Astrunt T-shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>

        <div class="pro" onclick="window.location.href='product.html?product=t11'">
            <img src="Ecmerse photos/n3.jpg" alt="Corten Astrunt T-shirt">
            <div class="des">
                <span>adidas</span>
                <h5>Corten Astrunt T-shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>

        <div class="pro" onclick="window.location.href='product.html?product=t12'">
            <img src="Ecmerse photos/n4.jpg" alt="Jeans casual T-shirt">
            <div class="des">
                <span>adidas</span>
                <h5>Jeans casual T-shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro" onclick="window.location.href='product.html?product=t13'">
            <img src="Ecmerse photos/n4.jpg" alt="Jeans casual T-shirt">
            <div class="des">
                <span>adidas</span>
                <h5>Jeans casual T-shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        
        <div class="pro" onclick="window.location.href='product.html?product=t14'">
            <img src="Ecmerse photos/n5.jpg" alt="Jeans casual T-shirt">
            <div class="des">
                <span>adidas</span>
                <h5>Jeans casual T-shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        
        <div class="pro" onclick="window.location.href='product.html?product=t15'">
            <img src="Ecmerse photos/n6.jpg" alt="Casual shorts mens">
            <div class="des">
                <span>adidas</span>
                <h5>Casual shorts mens</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        
        <div class="pro" onclick="window.location.href='product.html?product=t16'">
            <img src="Ecmerse photos/n7.jpg" alt="Corten Astrunt T-shirt">
            <div class="des">
                <span>adidas</span>
                <h5>Corten Astrunt T-shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        
        
    </div>
</section>
<!-- ---------------------------------banner--------------------------------------------- -->
<section id="banner" class="section-m1">
    <h4>Rrpair service</h4>
    <h2>UO to <span>70% off</span>  - All t-shirt % Accessories</h2>
    <button class="normal">exploer more </button>
</section>
<!-- --------------------------------------new arival------------------- -->


<section id="product1" class="section-p1">
    <h2>New Arrivals</h2>
    <p>Summer collection new morden design</p>
    <div class="pro-container">
<div class="pro">
    <img src="Ecmerse photos/n1.jpg" alt="">
    <div class="des">
<span>adidas</span>
<h5>Corten Astrunt T-shirt</h5>
<div class="star">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>

</div>
<h4>$78</h4>
</div>
<a href="#"><i class="fa-solid fa-cart-shopping cart" ></i></a>


   
</div>
<div class="pro">
    <img src="Ecmerse photos/n2.jpg" alt="">
    <div class="des">
<span>adidas</span>
<h5>Corten Astrunt T-shirt</h5>
<div class="star">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>

</div>
<h4>$78</h4>
</div>
<a href="#"><i class="fa-solid fa-cart-shopping cart" ></i></a>


   
</div>
<div class="pro">
    <img src="Ecmerse photos/n3.jpg" alt="">
    <div class="des">
<span>adidas</span>
<h5>Corten Astrunt T-shirt</h5>
<div class="star">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>

</div>
<h4>$78</h4>
</div>
<a href="#"><i class="fa-solid fa-cart-shopping cart" ></i></a>


   
</div>
<div class="pro">
    <img src="Ecmerse photos/n4.jpg" alt="">
    <div class="des">
<span>adidas</span>
<h5>Corten Astrunt T-shirt</h5>
<div class="star">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>

</div>
<h4>$78</h4>
</div>
<a href="#"><i class="fa-solid fa-cart-shopping cart" ></i></a>


   
</div>
<div class="pro">
    <img src="Ecmerse photos/n5.jpg" alt="">
    <div class="des">
<span>adidas</span>
<h5>Corten Astrunt T-shirt</h5>
<div class="star">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>

</div>
<h4>$78</h4>
</div>
<a href="#"><i class="fa-solid fa-cart-shopping cart" ></i></a>


   
</div>
<div class="pro">
    <img src="Ecmerse photos/n6.jpg" alt="">
    <div class="des">
<span>adidas</span>
<h5>Corten Astrunt T-shirt</h5>
<div class="star">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>

</div>
<h4>$78</h4>
</div>
<a href="#"><i class="fa-solid fa-cart-shopping cart" ></i></a>


   
</div>
<div class="pro">
    <img src="Ecmerse photos/n7.jpg" alt="">
    <div class="des">
<span>adidas</span>
<h5>Corten Astrunt T-shirt</h5>
<div class="star">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>

</div>
<h4>$78</h4>
</div>
<a href="#"><i class="fa-solid fa-cart-shopping cart" ></i></a>


   
</div>
<div class="pro">
    <img src="Ecmerse photos/n8.jpg" alt="">
    <div class="des">
<span>adidas</span>
<h5>Corten Astrunt T-shirt</h5>
<div class="star">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>

</div>
<h4>$78</h4>
</div>
<a href="#"><i class="fa-solid fa-cart-shopping cart" ></i></a>

  
</div>
        
    </div>
</section>

<!-- ----------------------------small banner-------------------------------- -->
<section id="sm-banner" class="section-p1 section-m1">
<div class="banner-box">
    <h4>carzy deals</h4>
    <h2>buy 1 get 1 free</h2>
    <span> The bigest classis derss is in sale at ashis</span>
    <button class="white">learn more</button>
</div>
<div class="banner-box banner-box2">
    <h4>Spring/summer</h4>
    <h2>buy 1 get 1 free</h2>
    <span> The bigest classis derss is in sale at ashis</span>
    <button class="white">Collection</button>
</div>


</section>

<!-- ==========================banner2small==================================== -->
<!-- timw-1.23 -->

<section id="banner3">
    <div class="banner-box">
   
        <h2>Seanal sall</h2>
        <h3> winter collection -50% of</h3>
    </div>
    <div class="banner-box banner-box2">
   
        <h2> Footwer collection</h2>
        <h3> winter collection -50% of</h3>
    </div>
    <div class="banner-box banner-box3">
   
        <h2>T-shirt</h2>
        <h3> winter collection -50% of</h3>
    </div>


</section>

<!-- -------------------------------------------------navaslider-------------------- -->


    
<section id="newsletter"  class="section-p1">
    <div class="newstext">
        <h4>Sign up for newsletter</h4>
        <p>Get E-mail updets your leters shop and <span> sepecial offer</span></p>
    </div>
<div class="form">
    <input type="text" placeholder="your E-mail addres">
    <button class="normal">sign up</button>
</div>

</section>
<!-- ----------------------------------------footer-------------------------- -->
<footer class="section-p1">
    <div class="col">
        <img class="logo1" src="Ecmerse photos/smalllogo.png" alt="Company Logo">
        <h4>Contact</h4>
        <p><strong>Address:</strong> Cuttack, Odisha, near Chandi Temple</p>
        <p><strong>Hours:</strong> 10:00-18:00, Mon-Sat</p>
        <div class="follow">
            <h4>Follow Us</h4>
            <div class="icon">
                <a href="https://facebook.com/" target="_blank" title="Facebook"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://wa.me/77960287299" target="_blank" title="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="https://instagram.com/pritam_borate_1812" target="_blank" title="Instagram"><i class="fa-brands fa-square-instagram"></i></a>
                <a href="https://github.com/" target="_blank" title="GitHub"><i class="fa-brands fa-github"></i></a>
            </div>
        </div>
    </div>

    <div class="col">
        <h4>About</h4>
        <a href="#">About</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Contact Us</a>
    </div>

    <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>
    </div>

    <div class="col install">
        <h4>Install App</h4>
        <p>From App Store or Google Play</p>
        <div class="row">
            <img src="Ecmerse photos/app.jpg" alt="App Store">
            <img src="Ecmerse photos/play.jpg" alt="Google Play">
        </div>
        <p>Secure Payment Options</p>
        <img src="Ecmerse photos/pay.png" alt="Payment Methods">
    </div>
    
    <div class="copyright">
        <hr>
       <p>&copy; 2024 Made by Pritam Borate. Thank you for visiting!</p>
    </div>
    
</footer>






    <script src="mobile.js"></script>
</body>
</html>