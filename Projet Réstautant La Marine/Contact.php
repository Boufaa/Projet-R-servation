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
                        <a href="Galerie.php" class="nav-link">Galerie</a>
                    </li>
                    <li class="nav-item">
                        <a href="Contact.php" class="nav-link active">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Header ends -->
    <section class="hero" id="hero">
        <div class="container">
            <h2 class="sub-headline">
                <span class="first-letter">C</span>ontact
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

    <section class="paragraphe">
        <div class="cont">
            <P>
                Notre équipe vous accueille pour passer un moment de détente convivale au 34 Av Chakib arsalane <br> qu jnane Chekkouri, 46 000 SAFI
            </p>
        </div>        
    </section>

    <!-- Images Gallery -->
    <section class="AllContact">
        <div class="contact">
            <div class="contactA A">
                <form action="" method="post">
                     <div class="boxx">
                           <div class="form-head">
                              <h2>CONTACTEZ NOUS</h2>
                           </div>
                           <div class="form-inpt">
                              <input name="Nom" type="text" placeholder="Nom"/>
                              <input name="Email" type="email" placeholder="E-mail"/>
                              <textarea name="Message" placeholder="Message"></textarea>
                           </div>
                           <div class="form-Envoyer">
                              <button type="submit" name="Commander">ENVOYER</button>
                           </div>
                     </div>
                 </form>
            </div>



            <?php

// isset button Commander 

if(isset($_POST['Commander'])){

    if(!empty($_POST["Nom"] && $_POST['Email'] && $_POST['Message'])){


        $message="";
        $to = "lamarinerestaurant@gmail.com"; // this is your Email address
        $from = "lamarinerestaurant@gmail.com"; // this is the sender's Email address
        $Nom = $_POST['Nom'];
        $Email= $_POST['Email'];
        $Message= $_POST['Message'];
        $subject = "Contact";
        $message = "Client: " .$Nom . "\n\n Son Email : " . $Email . "\n\n a Dit: " . $Message.  "\n\n" ;
        $headers = "From:" . $from;
        mail($to,$subject,$message,$headers);

       
    }
}

?>































            <div class="contactA B">
                <iframe src="https://www.google.com/maps/embed?pb=!1m24!1m12!1m3!1d3372.345850519329!2d-9.244996084829959!3d32.30256098111791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m9!3e6!4m3!3m2!1d32.2997285!2d-9.2453027!4m3!3m2!1d32.3053677!2d-9.2403011!5e0!3m2!1sfr!2sma!4v1594679320133!5m2!1sfr!2sma" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="contactA C">
                <img src="images/Restaurant.jpg">
                <div class="center">Restaurant<br><span>La Marine</span>
                </div>
                <a href="#">
                    <div class="centerB"><i class="fab fa-facebook-f"></i>ACEBOOK<br><span>/MAMMAMIA MARRAKECH</span></div>
                </a>
            </div>
            
            <div class="contactA D">
                <div class="TextContactA"><span>RESTAURANT LA MARINE</span><br> 34 Av Chakib arsalane qu jnane Chekkouri<br>46 000 Safi,Maroc<br>Réservation:+212 (0) 524 620 845
                </div>
                <div class="TextContactB"><span>TEMPS DE TRAVAIL</span><br> Lundi – Vendredi 10h – 22h<br>Dimanche 10h – 22.30h | Samedi 10h – 22h
                </div>
            </div>

            
            
        </div>  
    </section>


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