<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La Marine</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/x-icone.jpg" type="image/x-icon">
    <!--Font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <!--Scroll reveal CDN-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="styles.css">

    <script src="http://code.jquery.com/jquery-3.5.1.js"></script>
    <script>
        $(document).ready(function(){
            $(".button").click(function(){
                var name = $(this).attr("data-filter");
                if (name == "all") {
                    $(".imgM").show("2000");
                }
                else{
                    $(".imgM").not("."+name).hide("2000");
                    $(".imgM").filter("."+name).show("2000");
                }
            });
            $(".BTNMenu button").click(function(){
                $(this).addClass("action").siblings().removeClass("action");
            })
        });
    </script>
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
                        <a href="Menu.php" class="nav-link  active">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="Reservation.php" class="nav-link">Réservation</a>
                    </li>
                    <li class="nav-item">
                        <a href="Galerie.php" class="nav-link">Galerie</a>
                    </li>
                    <li class="nav-item">
                        <a href="Contact.php" class="nav-link">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>boxtitle
    </header>
    <!-- Header ends -->
    <section class="hero" id="hero">
        <div class="container">
            <h2 class="sub-headline">
                <span class="first-letter">M</span>enu
            </h2>
            <h1 class="headline">La Marine</h1>
            <div class="headline-description">
                <div class="separator">
                    <div class="line line-left"></div>
                    <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                    <div class="line line-right"></div>
                </div>
                <div class="single-animation">
                    <h5 style="font-size: 11px;">DÉCOUVREZ NOS SUCCULENTS PLATS</h5>
                    <!-- <a href="" class="btn cta-btn">Réservez maintenant</a> -->
                </div>
            </div>
        </div>
    </section>

    <section class="paragraphe">
        <div class="cont">
            <P>
                Le restaurant La Marine à Safi vous propose de déguster de nombreuses spécialités de plats issus du cœur de Safi. Salades, spaghettis ou pizzas, découvrez une multitude d’arômes et ingrédients dans une atmosphère unique qui vous fera plonger à la ville de safi.
            </p>
            <div class="Button">
                <a href="La_Marine_Menu.pdf">TÉLÉCHARGER</a>
            </div>
        </div>        
    </section>


     <!-- Plats Menu -->
    <section class="Menu">
        <div class="MenuAll">
            <div class="BTNMenu">
                &nbsp &nbsp &nbsp
                <button data-filter="entrées" class="button action">Entrées</button>&nbsp &nbsp &nbsp
                <button data-filter="pâtes" class="button">Pâtes</button>&nbsp &nbsp &nbsp
                <button data-filter="pizzas" class="button">Pizzas</button>&nbsp &nbsp &nbsp
                <button data-filter="tajines" class="button">Tajine</button>&nbsp &nbsp &nbsp
                <button data-filter="poissons" class="button">Poissons</button>&nbsp &nbsp &nbsp
                <button data-filter="desserts" class="button">Desserts</button>&nbsp &nbsp &nbsp
            </div>
            <div class="containerA">
                <div class="imgM entrées">
                    <div class="NamePlat">
                        <div class="borderNP"></div>
                        <h4>SALADE ITALIENNE</h4>
                    </div>
                    <img src="images/Entrées.jpg">
                    <a href="images/Entrées.jpg">
                    <i class="fas fa-search-plus"></i>
                    </a>
                </div>
                <div class="imgM entrées">
                    <div class="NamePlat">
                        <div class="borderNP"></div>
                        <h4>CALAMARS ET CREVETTES FRITS</h4>
                    </div>
                    <img src="images/resto.jpg">
                    <a href="images/resto.jpg">
                    <i class="fas fa-search-plus"></i>
                    </a>
                </div>
                <div class="imgM entrées">
                    <div class="NamePlat">
                        <div class="borderNP"></div>
                        <h4>CALAMARS ET CREVETTES FRITS</h4>
                    </div>
                    <img src="images/resto.jpg">
                    <a href="images/resto.jpg">
                    <i class="fas fa-search-plus"></i>
                    </a>
                </div>
                <div class="imgM entrées">
                    <div class="txt">
                        <h1>RESTAURANT</h1>
                    </div>
                </div>
                <div class="imgM entrées">
                    <div class="NamePlat">
                        <div class="borderNP"></div>
                        <h4>CALAMARS ET CREVETTES FRITS</h4>
                    </div>
                    <img src="images/resto.jpg">
                    <a href="images/resto.jpg">
                    <i class="fas fa-search-plus"></i>
                    </a>
                </div>
                <div class="imgM entrées">
                    <div class="txt">
                        <h1>Snack</h1>
                    </div>
                </div>
                <div class="imgM entrées">
                    <div class="NamePlat">
                        <div class="borderNP"></div>
                        <h4>CALAMARS ET CREVETTES FRITS</h4>
                    </div>
                    <img src="images/PRestaurant.jpg">
                    <a href="images/resto.jpg">
                    <i class="fas fa-search-plus"></i>
                    </a>
                </div>
                <div class="imgM entrées">
                    <div class="NamePlat">
                        <div class="borderNP"></div>
                        <h4>CALAMARS ET CREVETTES FRITS</h4>
                    </div>
                    <img src="images/resto.jpg">
                    <a href="images/resto.jpg">
                    <i class="fas fa-search-plus"></i>
                    </a>
                </div>
                <div class="imgM entrées">
                    <div class="NamePlat">
                        <div class="borderNP"></div>
                        <h4>CALAMARS ET CREVETTES FRITS</h4>
                    </div>
                    <img src="images/resto.jpg">
                    <a href="images/resto.jpg">
                    <i class="fas fa-search-plus"></i>
                    </a>
                </div>
                <div class="imgM entrées">
                    <div class="txt">
                        <h1>Safi</h1>
                    </div>
                </div>
                <div class="imgM entrées">
                    <div class="NamePlat">
                        <div class="borderNP"></div>
                        <h4>CALAMARS ET CREVETTES FRITS</h4>
                    </div>
                        <img src="images/resto.jpg">
                        <a href="images/resto.jpg">
                        <i class="fas fa-search-plus"></i>
                        </a>
                </div>
                <div class="imgM entrées">
                    <div class="txt">
                        <h1>La Marine</h1>
                    </div>
                </div>




                <div class="imgM pâtes">
                    <div class="NamePlat">
                        <div class="borderNP"></div>
                        <h4>SALADE ITALIENNE</h4>
                    </div>
                    <img src="images/Pâte.jpg">
                    <a href="images/Pâte.jpg">
                    <i class="fas fa-search-plus"></i>
                    </a>
                </div>
                <div class="imgM pâtes">
                    <div class="NamePlat">
                        <div class="borderNP"></div>
                        <h4>CALAMARS ET CREVETTES FRITS</h4>
                    </div>
                    <img src="images/resto.jpg">
                    <a href="images/resto.jpg">
                    <i class="fas fa-search-plus"></i>
                    </a>
                </div>
                <div class="imgM pâtes">
                    <div class="NamePlat">
                        <div class="borderNP"></div>
                        <h4>CALAMARS ET CREVETTES FRITS</h4>
                    </div>
                    <img src="images/resto.jpg">
                    <a href="images/resto.jpg">
                    <i class="fas fa-search-plus"></i>
                    </a>
                </div>
                <div class="imgM pâtes">
                    <div class="txt">
                        <h1>RESTAURANT</h1>
                    </div>
                </div>
                <div class="imgM pâtes">
                    <div class="NamePlat">
                        <div class="borderNP"></div>
                        <h4>CALAMARS ET CREVETTES FRITS</h4>
                    </div>
                    <img src="images/resto.jpg">
                    <a href="images/resto.jpg">
                    <i class="fas fa-search-plus"></i>
                    </a>
                </div>
                <div class="imgM pâtes">
                    <div class="txt">
                        <h1>Snack</h1>
                    </div>
                </div>






                <div class="imgM pizzas">
                    <div class="NamePlat">
                        <div class="borderNP"></div>
                        <h4>SALADE ITALIENNE</h4>
                    </div>
                    <img src="images/Pizza.jpg">
                    <a href="images/Pizza.jpg">
                    <i class="fas fa-search-plus"></i>
                    </a>
                </div>
                <div class="imgM pizzas">
                    <div class="NamePlat">
                        <div class="borderNP"></div>
                        <h4>CALAMARS ET CREVETTES FRITS</h4>
                    </div>
                    <img src="images/resto.jpg">
                    <a href="images/resto.jpg">
                    <i class="fas fa-search-plus"></i>
                    </a>
                </div>
                <div class="imgM pizzas">
                    <div class="NamePlat">
                        <div class="borderNP"></div>
                        <h4>CALAMARS ET CREVETTES FRITS</h4>
                    </div>
                    <img src="images/resto.jpg">
                    <a href="images/resto.jpg">
                    <i class="fas fa-search-plus"></i>
                    </a>
                </div>





                <div class="imgM tajines">
                    <div class="NamePlat">
                        <div class="borderNP"></div>
                        <h4>SALADE ITALIENNE</h4>
                    </div>
                    <img src="images/Tajine.jpg">
                    <a href="images/Tajine.jpg">
                    <i class="fas fa-search-plus"></i>
                    </a>
                </div>
                <div class="imgM tajines">
                    <div class="NamePlat">
                        <div class="borderNP"></div>
                        <h4>CALAMARS ET CREVETTES FRITS</h4>
                    </div>
                    <img src="images/resto.jpg">
                    <a href="images/resto.jpg">
                    <i class="fas fa-search-plus"></i>
                    </a>
                </div>
                <div class="imgM tajines">
                    <div class="NamePlat">
                        <div class="borderNP"></div>
                        <h4>CALAMARS ET CREVETTES FRITS</h4>
                    </div>
                    <img src="images/resto.jpg">
                    <a href="images/resto.jpg">
                    <i class="fas fa-search-plus"></i>
                    </a>
                </div>




                <div class="imgM poissons">
                    <div class="NamePlat">
                        <div class="borderNP"></div>
                        <h4>SALADE ITALIENNE</h4>
                    </div>
                    <img src="images/Poisson.jpg">
                    <a href="images/Poisson.jpg">
                    <i class="fas fa-search-plus"></i>
                    </a>
                </div>
                <div class="imgM poissons">
                    <div class="NamePlat">
                        <div class="borderNP"></div>
                        <h4>CALAMARS ET CREVETTES FRITS</h4>
                    </div>
                    <img src="images/resto.jpg">
                    <a href="images/resto.jpg">
                    <i class="fas fa-search-plus"></i>
                    </a>
                </div>
                <div class="imgM poissons">
                    <div class="NamePlat">
                        <div class="borderNP"></div>
                        <h4>CALAMARS ET CREVETTES FRITS</h4>
                    </div>
                    <img src="images/resto.jpg">
                    <a href="images/resto.jpg">
                    <i class="fas fa-search-plus"></i>
                    </a>
                </div>



                <div class="imgM desserts">
                    <div class="NamePlat">
                        <div class="borderNP"></div>
                        <h4>SALADE ITALIENNE</h4>
                    </div>
                    <img src="images/Desserts.jpg">
                    <a href="images/Desserts.jpg">
                    <i class="fas fa-search-plus"></i>
                    </a>
                </div>
                <div class="imgM desserts">
                    <div class="NamePlat">
                        <div class="borderNP"></div>
                        <h4>CALAMARS ET CREVETTES FRITS</h4>
                    </div>
                    <img src="images/resto.jpg">
                    <a href="images/resto.jpg">
                    <i class="fas fa-search-plus"></i>
                    </a>
                </div>
                <div class="imgM desserts">
                    <div class="NamePlat">
                        <div class="borderNP"></div>
                        <h4>CALAMARS ET CREVETTES FRITS</h4>
                    </div>
                    <img src="images/resto.jpg">
                    <a href="images/resto.jpg">
                    <i class="fas fa-search-plus"></i>
                    </a>
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