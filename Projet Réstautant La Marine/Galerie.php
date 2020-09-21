<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La Marine</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/x-icone.jpg" type="image/x-icon">
    <!--Font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <!--Scroll reveal CDN-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <nav class="nav">
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </div>
                <a href="index.php" class="logo"><img src="images/logolamarine.png" alt=""></a>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="Menu.php" class="nav-link">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="Reservation.php" class="nav-link">Réservation</a>
                    </li>
                    <li class="nav-item">
                        <a href="Galerie.php" class="nav-link active">Galerie</a>
                    </li>
                    <li class="nav-item">
                        <a href="Contact.php" class="nav-link">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Header ends -->
    <section class="hero" id="hero">
        <div class="container">
            <h2 class="sub-headline">
                <span class="first-letter">G</span>alerie
            </h2>
            <h1 class="headline">La Marine</h1>
            <div class="headline-description">
                <div class="separator">
                    <div class="line line-left"></div>
                    <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                    <div class="line line-right"></div>
                </div>
                <div class="single-animation">
                    <h5>Snack Restaurant</h5>
                    <!-- <a href="" class="btn cta-btn">Réservez maintenant</a> -->
                </div>
            </div>
        </div>
    </section>
    <!-- Images Gallery -->
    <section class="Gallery">
        <div class="container">
            <div class="box A">
                <a>
                    <img src="images/PRestaurant.jpg">
                    <i class="fas fa-expand"></i>
                </a>
            </div>
            <div class="box B">
                <div class="txt">
                    <h1>La Marine</h1>
                </div>
            </div>
            <div class="box C">
                <a>
                    <img src="images/resto.jpg">
                    <i class="fas fa-expand"></i>
                </a>
            </div>
            <div class="box D">
                <div class="txt">
                    <h1>Safi</h1>
                </div>
            </div>
            <div class="box E">
                <a>
                    <img src="images/lamarine.jpg">
                    <i class="fas fa-expand"></i>
                </a>
            </div>
            <div class="box F">
                <a>
                    <img src="images/Restaurant.jpg">
                    <i class="fas fa-expand"></i>
                </a>
            </div>
            <div class="box G">
                <a>
                    <img src="images/imgchef.jpg">
                    <i class="fas fa-expand"></i>
                </a>
            </div>
            <div class="box H">
                <div class="txt">
                    <h1>Restaurant</h1>
                </div>
            </div>
            <div class="box I">
                <div class="txt">
                    <h1>Snack</h1>
                </div>
            </div>
            <div class="box J">
                <a>
                    <img src="images/DPlat.jpg">
                    <i class="fas fa-expand"></i>
                </a>
            </div>
            
            
        </div>  
    </section>



    <!-- Start lightbox -->
    <div class="lightbox">
    	<div class="lightbox-content">
    		<div class="lightbox-close">&times;</div>
    		<img src="" class="lightbox-img" alt="img">
    	</div>
    </div>









    <!-- Culinary delight ends -->
    <footer>
        <div class="container">
            <div class="back-to-top">
                <a href="#"><i class="fas fa-chevron-up"></i></a>
            </div>
            <div class="footer-content">
                <div class="footer-content-about animate-top">
                    <h4>Restaurant La Marine</h4>
                    <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                    <p>
                        05 24 62 08 45 <br>
                        n° 34 Av Chakib arsalane qu jnane Chekkouri
                    </p>
                </div>
                <div class="footer-content-divider animate-bottom">
                    <div class="social-media">
                        <h4>Follow along</h4>
                        <ul class="social-icons">
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="newsletter-container">
                        <h4>Newsletter</h4>
                        <form action="" class="newsletter-form">
                            <input type="text" class="newsletter-input" placeholder="Your email address...">
                            <button class="newsletter-btn" type="submit">
                                <i class="fas fa-envelope"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>

<script src="main.js"></script>
</body>
</html>