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
                <li><a class="active"  href="shope.php">Shop</a></li>
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
    <section id="thank-you">
        <h2>Thank You!</h2>
        <p>Your order has been placed successfully.</p>
        <p>We will contact you shortly with the details.</p>
        <a href="index.php" class="btn-primary">Back to Home</a>
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
<!-- ----------------------------footer------------- -->
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
    
</footer>>
</body>
</html>
