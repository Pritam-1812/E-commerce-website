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
                <li><a href="index.php">Home</a></li>
                <li><a  href="shope.php">Shop</a></li>
                <li><a class="active"  href="blog.php">Blog</a></li>
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
<!-- ---------------------------------------------------page hader------------------------- -->
 </section>
<section id="page-header" class="bloag-header">

<h2>#read more</h2>

<p>Read alll case studio about our products!</p>



</section>
<!-- ---------------------------------------small photose------------------ -->
<section id="blog">
    <div class="blog-box">
        <div class="blog-img">
            <img src="Ecmerse photos/b1.jpg" alt="">
        </div>
        <div class="blog-details">
            <h4>Casual Cotton-Jersey Hoodie</h4>
            <p>This casual hoodie is perfect for laid-back days. It's made from soft cotton-jersey fabric and comes with a convenient zip-up front.</p>
            <a href="#">Continue reading</a>
        </div>
        <h1>13/01</h1>
    </div>

    <div class="blog-box">
        <div class="blog-img">
            <img src="Ecmerse photos/b2 (1).jpg" alt="">
        </div>
        <div class="blog-details">
            <h4>Stylish and Comfortable Hoodie</h4>
            <p>Experience ultimate comfort with our stylish hoodies, designed to keep you warm and looking great all day long.</p>
            <a href="#">Continue reading</a>
        </div>
        <h1>13/01</h1>
    </div>

    <div class="blog-box">
        <div class="blog-img">
            <img src="Ecmerse photos/b3.jpg" alt="">
        </div>
        <div class="blog-details">
            <h4>Classic Zip-Up Hoodie</h4>
            <p>Our classic zip-up hoodie is a wardrobe essential, offering a timeless look with practical features like a front pocket and adjustable hood.</p>
            <a href="#">Continue reading</a>
        </div>
        <h1>13/01</h1>
    </div>

    <div class="blog-box">
        <div class="blog-img">
            <img src="Ecmerse photos/b6.jpg" alt="">
        </div>
        <div class="blog-details">
            <h4>Versatile Hoodie for Everyday Wear</h4>
            <p>Stay comfortable and stylish with our versatile hoodies, perfect for any occasion, whether it's a casual day out or a relaxed evening at home.</p>
            <a href="#">Continue reading</a>
        </div>
        <h1>13/01</h1>
    </div>

    <div class="blog-box">
        <div class="blog-img">
            <img src="Ecmerse photos/b4 (1).jpg" alt="">
        </div>
        <div class="blog-details">
            <h4>Eco-Friendly Cotton Hoodie</h4>
            <p>Our eco-friendly hoodies are made from sustainably sourced cotton, offering both comfort and a commitment to environmental responsibility.</p>
            <a href="#">Continue reading</a>
        </div>
        <h1>13/01</h1>
    </div>
</section>

<!-- ----------------------------pagination-------------------------------- -->

<section id="pagination" class="section-p1">
<a href="#">1</a>

<a href="#">2</a>
<a href="#"><i class="fa-solid fa-arrow-right"></i></a>


</section>

    <!-- --------------------------------newslater--------------------------- -->
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
        <p><strong>Address:</strong> Cuttack, Odisha, near Chandhi Temple</p>
        <p><strong>Hours:</strong> 10:00-18:00, Mon-Sat</p>
        <div class="follow">
            <h4>Follow Us</h4>
            <div class="icon">
                <a href="https://facebook.com/" target="_blank" title="Facebook"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://wa.me/77960287299" target="_blank" title="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="https://instagram.com/pritam_borate_1812" target="_blank" title="Instagram"><i class="fa-brands fa-square-instagram"></i></a>
                <a href="https://github.com/t" target="_blank" title="GitHub"><i class="fa-brands fa-github"></i></a>
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









    <script src="e.js"></script>
</body>
</html>