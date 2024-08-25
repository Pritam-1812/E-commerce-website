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

    <section id="prodetails" class="section-p1">
        <div class="single-pro-img">
            <img src="Ecmerse photos/f1.jpg" width="100%" id="mainimg" alt="Product Image">
            <div class="small-img-groups">
                <div class="small-img-col">
                    <img src="Ecmerse photos/f1.jpg" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="Ecmerse photos/f2.jpg" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="Ecmerse photos/f3.jpg" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="Ecmerse photos/f4.jpg" width="100%" class="small-img">
                </div>
            </div>
        </div>
        <div class="single-pro-details">
            <h6 id="product-category">Home/T-shirt</h6>
            <h4 id="product-name">Men's Fashion T-shirt</h4>
            <h2 id="product-price">$140.00</h2>
            <select>
                <option value="">Select Size</option>
                <option value="M">Medium</option>
                <option value="XL">XL</option>
                <option value="XXL">XXL</option>
                <option value="S">Small</option>
                <option value="L">Large</option>
            </select>
            <input type="number" value="1" min="1" id="product-quantity">
            <button id="add-to-cart-btn" class="normal">Add to Cart</button>
            <h4>Product Details</h4>
            <span id="product-description">
                This men's fashion T-shirt is crafted from premium, high-quality cotton fabric, ensuring ultimate comfort and durability...
            </span>
        </div>
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
    
</footer>











<script>
    const products = {
        
    "t1": {
        "name": "Embellished Saree",
        "image": "Ecmerse photos/ss1.png",
        "price": 139.00,
        "description": "This men's fashion T-shirt is crafted from premium, high-quality cotton fabric...",
        "category": "Home/T-shirt",
        "images": ["Ecmerse photos/ss1.png", "Ecmerse photos/ss2.png", "Ecmerse photos/ss3.png", "Ecmerse photos/ss4.png"]
    },
    "t2": {
        "name": "KOTTY Silk Saree Set",
        "image": "Ecmerse photos/s1111.png",
        "price": 139.00,
        "description": "The KOTTY Top Pant Western Set is crafted from premium, high-quality fabric...",
        "category": "Home/Western Set",
        "images": ["Ecmerse photos/s1111.png", "Ecmerse photos/s2222.png", "Ecmerse photos/s3333.png", "Ecmerse photos/s4444.png"]
    },
    "t3": {
        "name": "Casual Cotton Saree",
        "image": "Ecmerse photos/s111.jpg",
        "price": 78.00,
        "description": "Comfortable casual shorts for everyday wear.",
        "category": "Home/Shorts",
        "images": ["Ecmerse photos/s111.jpg", "Ecmerse photos/s222.jpg", "Ecmerse photos/s333.jpg", "Ecmerse photos/s444.png"]
    },
    "t4": {
        "name": "Corten Silk Saree",
        "image": "Ecmerse photos/s11.jpg",
        "price": 78.00,
        "description": "Stylish Corten Astrunt T-shirt with a unique design.",
        "category": "Home/T-shirt",
        "images": ["Ecmerse photos/s11.jpg", "Ecmerse photos/s22.jpg", "Ecmerse photos/s33.jpg", "Ecmerse photos/s44.jpg"]
    },
    "t5": {
        "name": "Casual Linen Saree",
        "image": "Ecmerse photos/c1.png",
        "price": 85.00,
        "description": "Trendy casual jeans suitable for various occasions.",
        "category": "Home/Jeans",
        "images": ["Ecmerse photos/c1.png", "Ecmerse photos/c2.png", "Ecmerse photos/c3.png", "Ecmerse photos/c4.png"]
    },
    "t6": {
        "name": "Graphic Print Saree",
        "image": "Ecmerse photos/sa.png",
        "price": 70.00,
        "description": "Eye-catching graphic T-shirt with vibrant colors.",
        "category": "Home/T-shirt",
        "images": ["Ecmerse photos/sa.png", "Ecmerse photos/sa2.png", "Ecmerse photos/sa1.png", "Ecmerse photos/sa1.png"]
    },
    "t7": {
        "name": "Slim Fit Saree",
        "image": "Ecmerse photos/n8.jpg",
        "price": 90.00,
        "description": "Fashionable slim-fit jeans for a modern look.",
        "category": "Home/Jeans",
        "images": ["Ecmerse photos/n8.jpg", "Ecmerse photos/n8_1.jpg", "Ecmerse photos/n8_2.jpg", "Ecmerse photos/n8_3.jpg"]
    },
    "t8": {
        "name": "Sports Georgette Saree",
        "image": "Ecmerse photos/d1.png",
        "price": 65.00,
        "description": "Breathable sports T-shirt ideal for workouts.",
        "category": "Home/T-shirt",
        "images": ["Ecmerse photos/d1.png", "Ecmerse photos/d2.png", "Ecmerse photos/d3.png", "Ecmerse photos/d4.png"]
    },
        "t9": {
            "name": "Winter Jacket",
            "image": "Ecmerse photos/n10.jpg",
            "price": 120.00,
            "description": "Warm winter jacket perfect for cold weather.",
            "category": "Home/Jacket",
            "images": ["Ecmerse photos/n10.jpg", "Ecmerse photos/n10_1.jpg", "Ecmerse photos/n10_2.jpg", "Ecmerse photos/n10_3.jpg"]
        },
        "t10": {
            "name": "Summer Dress",
            "image": "Ecmerse photos/n11.jpg",
            "price": 95.00,
            "description": "Light and airy summer dress for a stylish look.",
            "category": "Home/Dress",
            "images": ["Ecmerse photos/n11.jpg", "Ecmerse photos/n11_1.jpg", "Ecmerse photos/n11_2.jpg", "Ecmerse photos/n11_3.jpg"]
        },
        "t11": {
            "name": "Corten Astrunt T-shirt",
            "image": "Ecmerse photos/n3.jpg",
            "price": 78.00,
            "description": "High-quality Corten Astrunt T-shirt with premium fabric.",
            "category": "Home/T-shirt",
            "images": ["Ecmerse photos/n3.jpg", "Ecmerse photos/n3_1.jpg", "Ecmerse photos/n3_2.jpg", "Ecmerse photos/n3_3.jpg"]
        },
        "t12": {
            "name": "Classic Polo Shirt",
            "image": "Ecmerse photos/n12.jpg",
            "price": 75.00,
            "description": "Elegant classic polo shirt suitable for casual and formal events.",
            "category": "Home/Shirt",
            "images": ["Ecmerse photos/n12.jpg", "Ecmerse photos/n12_1.jpg", "Ecmerse photos/n12_2.jpg", "Ecmerse photos/n12_3.jpg"]
        },
        "t13": {
            "name": "Hooded Sweatshirt",
            "image": "Ecmerse photos/n13.jpg",
            "price": 85.00,
            "description": "Comfortable hooded sweatshirt perfect for chilly days.",
            "category": "Home/Sweatshirt",
            "images": ["Ecmerse photos/n13.jpg", "Ecmerse photos/n13_1.jpg", "Ecmerse photos/n13_2.jpg", "Ecmerse photos/n13_3.jpg"]
        },
        "t14": {
            "name": "Formal Shirt",
            "image": "Ecmerse photos/n14.jpg",
            "price": 90.00,
            "description": "Stylish formal shirt suitable for business meetings.",
            "category": "Home/Shirt",
            "images": ["Ecmerse photos/n14.jpg", "Ecmerse photos/n14_1.jpg", "Ecmerse photos/n14_2.jpg", "Ecmerse photos/n14_3.jpg"]
        },
        "t15": {
            "name": "Denim Jacket",
            "image": "Ecmerse photos/n15.jpg",
            "price": 110.00,
            "description": "Trendy denim jacket for a casual yet chic look.",
            "category": "Home/Jacket",
            "images": ["Ecmerse photos/n15.jpg", "Ecmerse photos/n15_1.jpg", "Ecmerse photos/n15_2.jpg", "Ecmerse photos/n15_3.jpg"]
        },
        "t16": {
            "name": "Graphic Hoodie",
            "image": "Ecmerse photos/n16.jpg",
            "price": 95.00,
            "description": "Stylish graphic hoodie for a modern look.",
            "category": "Home/Hoodie",
            "images": ["Ecmerse photos/n16.jpg", "Ecmerse photos/n16_1.jpg", "Ecmerse photos/n16_2.jpg", "Ecmerse photos/n16_3.jpg"]
        }
    };

    const urlParams = new URLSearchParams(window.location.search);
    const productId = urlParams.get('product') || 't1'; // Default to t1 if no product param

    const product = products[productId];
    if (product) {
        document.getElementById("product-name").textContent = product.name;
        document.getElementById("mainimg").src = product.image;
        document.getElementById("product-price").textContent = `$${product.price.toFixed(2)}`;
        document.getElementById("product-description").textContent = product.description;
        document.getElementById("product-category").textContent = product.category;

        // Populate small images
        const smallImgGroups = document.getElementsByClassName("small-img");
        product.images.forEach((imgSrc, index) => {
            if (smallImgGroups[index]) {
                smallImgGroups[index].src = imgSrc;
            }
        });

        document.getElementById("add-to-cart-btn").onclick = function() {
            let cart = JSON.parse(localStorage.getItem("cart")) || [];
            const quantity = parseInt(document.getElementById("product-quantity").value);

            if (isNaN(quantity) || quantity <= 0) {
                alert("Please enter a valid quantity.");
                return;
            }

            const existingProduct = cart.find(item => item.name === product.name);
            if (existingProduct) {
                existingProduct.quantity += quantity;
            } else {
                cart.push({ ...product, quantity });
            }

            localStorage.setItem("cart", JSON.stringify(cart));
            alert("Product added to cart!");
            window.location.href = "cart.php";
        };

        // Image switching functionality
        const MainImg = document.getElementById("mainimg");
        const smallimg = document.getElementsByClassName("small-img");

        for (let i = 0; i < smallimg.length; i++) {
            smallimg[i].onclick = function() {
                MainImg.src = smallimg[i].src;
            };
        }
    } else {
        console.error("Product not found.");
    }
</script>

</body>
</html>
