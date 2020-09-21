<?php
 include("Reservation_back.php");
?>
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

    
    <link href="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>


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
                        <a href="Reservation.php" class="nav-link active">Réservation</a>
                    </li>
                    <li class="nav-item">
                        <a href="Galerie.php" class="nav-link">Galerie</a>
                    </li>
                    <li class="nav-item">
                        <a href="Contact.php" class="nav-link">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Header ends -->
    <!-- <section class="banner"> -->
        <div class="banner-img"></div>

        <div class="banner-input">
            <form action="" method="POST">
            <h1>RÉSERVATION</h1>
            <p>VENEZ PROFITER DE NOTRE HOSPITALITÉ</p>
            <div class="AllInput">
                <div class="date">
                    <label>DATE:</label><br>
                    <input type="date" name="date" data-date-format="DD MMMM YYYY">
                </div>
                <div class="input">
                    <label>NOM:</label><br>
                    <input type="text" name="nom">
                </div>
                <div class="input">
                    <label>HEURE:</label><br>
                    <input type="text" name="heure" id="time" placeholder="">
                </div>
                <div class="input">
                    <label>EMAIL:</label><br>
                    <input type="email" name="email">
                </div>
                <div class="input">
                    <label>PERSONNE(S):</label><br>
                    <select name="personne" id="#">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="5+">5+</option>
                    </select>
                </div>
                <div class="input">
                    <label>TÉLÉPHONE:</label><br>
                    <input type="number" name="phone">
                </div>
            </div>

                <div class="input">
                    <label class="mssg">MESSAGE:</label><br>
                    <textarea name="message"></textarea>
                </div>
                
            <!-- <a href="" type="submit" name="reserver">DEMANDE DE RÉSERVATION</a> -->
            <button type="submit" name="submit" class="btnreservation" >DEMANDE DE RÉSERVATION</button>
        </form>
        </div>
    <!-- </section> -->

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
<script src="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
<script type="text/javascript">
    var timepicker = new TimePicker('time', {
        lang: 'en',
        theme: 'dark'
    });
    timepicker.on('change', function(evt) {
  
    var value = (evt.hour || '00') + ':' + (evt.minute || '00');
    evt.element.value = value;

    });
</script>
</body>
</html>