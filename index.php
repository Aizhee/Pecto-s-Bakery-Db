<?php

session_start();
include 'connect.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400..700&family=Great+Vibes&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="main.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <link rel="stylesheet" href="index.css">
        <link rel="icon" href="img/logo.png" type="image/x-icon">
        <title>Pecto's Bakery</title>
    </head>

    <body>

        <div id="pop-up-container">
            <div id="pop-up">
                    <div class="close-button">
                    <iframe id="Iframe" src="gallery.html" title="gallery-popup"></iframe>
                        <i class="fa fa-times"></i>
                    </div>
            </div>
            
        </div>

        <div id="nav-bar">
            <nav class="main-nav hamburger-menu">
				<div id="main_menu">
					<input id="menu-toggle" type="checkbox" />
					<label class='menu-button-container' for="menu-toggle">
						<div class='menu-button'>

                        </div>
						<span></span>
					</label>

                    <div class="logo">
                        <img src="img/logo.png" alt="logo">
                    </div>

                    <div class="nav-links">
                        <ul class="icons">
                            <li><a id="Home">Home</a></li>
                            <li><a id="About-us">About Us</a></li>
                            <li><a id="Product">Products</a></li>
                            <li><a id="Gallery">Gallery</a></li>
                            <li><a id="Contact-us">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="buttons">
                <button class="cart">
                    <i class="fa-solid fa-cart-shopping"></i>
                </button>
                <button class="fav">
                    <i class="fa fa-heart"></i>
                </button>
            </div>
        </div>

        <div class="background">
            <img src="img/Bg.jpg" alt="front-image">
        </div>

        <div id="welcome">
            <div class="content">
                <h1>Welcome to the home of freshly baked pastries!</h1>
                <h4>At our bakery, it's more than just about the delectable treats; 
                    it's a haven where memories are baked, and flavors come to life. 
                    Whether you're savoring a cheesy ensaymada on a quiet morning, 
                    sharing laughter over a slice of freshly baked pie with friends, 
                    or finding inspiration in the aroma of our artisan bread, our 
                    doors are always open to welcome you into our bakery-loving 
                    community. Join us as we knead, shape, and bake delightful moments 
                    that linger long after the last crumb is gone.
                </h4>
            </div>
        </div>

        <div id="AboutUs">
            <div id="container-about">
                <div class="image">
                    <video autoplay muted loop>
                        <source src="video/1.mp4" type="video/mp4">
                    </video>
                </div>

                <div class="message">
                    <h2>The Heart and Heritage Behind Pecto's Bakery</h1>
                    <p>Driven by a commitment to quality, community, and 
                        family values, we take pride in crafting delicious 
                        pastries and breads using time-honored recipes 
                        passed down through generations. With a dedicated 
                        team of artisans and a spirit of continuous 
                        improvement, we strive to delight our customers 
                        with every slice, pastry, and confection that 
                        leaves our ovens.<p>

                    <button id="ReadMore">Read More</button>
                </div>
            </div>
        </div>

        <div id="products">
            <div class="product-header">
                <center><h2><i>OUR SPECIALTIES</i></h2>
                <h4>Fresh Bakery Items with the Finest Ingredients</h4></center>
            </div>

            <div id="items">
                <ul class="Specialties">
                    <!-- Products will be loaded here dynamically using AJAX-->
                </ul>
            </div>
        </div>

        <div id="gallery">
            <div class="gallery-header">
                <h2>Our Delicious Creations</h2>
                <p>Take a visual journey through our mouth-watering assortment of pastries and breads.</p>
            </div>

            <div class="categories">
                <ul class="gallery-pictures">
                    <li id="crackers">
                        <img src="img/2image.jpeg">
                        <div class="crackersandbiscuits-overlay">
                            <a>Biscuits and Crackers</a>
                        </div>
                    </li>

                    <li id="bread">
                        <img src="img/bread2.png">
                        <div class="bread-overlay">
                            <a>Breads</a>
                        </div>
                    </li>

                    <li id="desserts">
                        <img src="img/desserts.png">
                        <div class="dessert-overlay">
                            <a>Desserts</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div id="footer">
            
            <div class="Contact Us">
                <h3>Contact Us</h3>
                <p>If you have any questions or inquiries, feel 
                    free to reach out to us at:</p>
                <p id="number"> 
                    (042) 540 4366/8838<br>
                    0949 9931209
                </p>
                <p>We're also available on social media</p>
                    
                    <div class="social">
                        <a href="https://www.facebook.com/pectosbakery" alt="facebook"><i class="fa-brands fa-facebook"></i></a><a href="https://www.facebook.com/pectosbakery">&nbsp;Pecto's Bakery&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><p></p>
                        <a href="https://www.instagram.com/pectosbakerylucban/?hl=en" alt="instagram"><i class="fa-brands fa-square-instagram"></i></a> <a href="https://www.instagram.com/pectosbakerylucban/?hl=en">&nbsp;pectosbakerylucban</a><p></p>
                    </div>
                </div>
                
            <div class="About">
                <h3>Subscribe to Our Newsletter</h3>
                <form action="#" method="post">
                    <label for="email">Enter your email address:</label>
                    <input type="email" id="email" name="email" placeholder="example@example.com" required>
                    <input type="submit" value="Subscribe">
                </form>

                <!-- Show login/signup button if not logged in -->
                <?php if (isset($_SESSION['email'])): ?>
                            <div class="login-signUp">
                                <p>Welcome, <?php echo $_SESSION['email']; ?>!</p>
                                <form method="post" action="logout.php">
                                    <button type="submit" name="logoutBtn">Logout</button>
                                </form>
                            </div>
                            <?php else: ?>
                            <div class="login-signUp">
                                <input type="submit" value="Login" id="loginBtn">
                                <input type="submit" value="Sign-up" id="signUpBtn">
                            </div>
                <?php endif; ?>
            </div>

            <div class="map">
                <h3>Location</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4002.955696627939!2d121.551927338538!3d14.11438869432623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd53f5f956fd83%3A0xaf7ed935b3c90896!2sPecto&#39;s%20Bakery!5e0!3m2!1sen!2sph!4v1712140628207!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
                <audio controls muted loop>
                    <source src="music/1.mp3" type="audio/mpeg">
                </audio>
            </div>
            
        
        </div>

        <div id="copyright">
            <p>Copyright © 2023-2024 Trina Alyssa Mente - CpE06 Online Technologies. All Rights Reserved</p>
        </div>
    </body>
</html>

