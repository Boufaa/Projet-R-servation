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
						<a href="index.php" class="nav-link active">Accueil</a>
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
				<span class="first-letter">W</span>elcome
			</h2>
			<h1 class="headline">La Marine</h1>
			<div class="headline-description">
				<div class="separator">
					<div class="line line-left"></div>
					<div class="asterisk"><i class="fas fa-asterisk"></i></div>
					<div class="line line-right"></div>
				</div>
				<div class="single-animation">
					<h5>Ready to be opened</h5>
					<a href="Reservation.php" class="btn cta-btn">Réservez maintenant</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Button Play Video -->
	<div class="play-btnA">
		<input type="checkbox" id="click">
			<label for="click" class="click-i">
				<i class="fa fa-play"></i>
			</label>
		<div class="modal-vd">
			<video width="100%" controls autoplay>
			    <source src="images/La_Marine.mp4" type="video/mp4">
			</video>
		</div>
	</div>
	

	<div class="play-btn">
		<i class="fa fa-play"></i>
	</div>

	
		      
		   
	

	<!-- hero ends -->
	<section class="discover-our-story">
		<div class="container">
			<div class="restaurant-info">
				<div class="restaurant-description padding-right animate-left">
					<div class="global-headline">
						<h2 class="sub-headline">
							<span class="first-letter">R</span>estaurant
						</h2>
						<h1 class="headline headline-dark">LA MARINE</h1>
						<div class="asterisk"><i class="fas fa-asterisk"></i></div>
					</div>
					<p>
						Vous aurez le privilège de déguster des plats de poisson au goût unique à SAFI <br>
						Une décoration unique au coeur de SAFI <br>
						Un espace dédié aux non fumeurs
					</p>
					<!-- <a href="" class="btn body-btn">About us</a> -->
				</div>
				<div class="restaurant-info-img animate-right">
					<img src="images/resto.jpg">
				</div>
			</div>
		</div>
	</section>
	<!-- Discover our story ends -->
	<section class="tasteful-recipes between">
		<div class="container">
			<div class="global-headline">
				<div class="animate-top">
					<h2 class="sub-headline">
						<span class="first-letter">L</span>a gastronomie
					</h2>
				</div>
				<div class="animate-bottom">
					<h1 class="headline">AUTHENTIQUE</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- Tasteful recipes ends -->
	<section class="discover-our-menu">
		<div class="container">
			<div class="restaurant-info">
				<div class="image-group padding-right animate-left">
					<div class="box">
						<img src="images/Entrées.jpg">
						<div class="box-content">
							<h3 class="title">Entrées</h3>
						</div>
						<ul class="icon">
							<li><a href="#"><i class="fas fa-eye"></i></a></li>
						</ul>
					</div>
					<div class="box">
						<img src="images/Poissons.jpg">
						<div class="box-content">
							<h3 class="title">Poissons</h3>
						</div>
						<ul class="icon">
							<li><a href="#"><i class="fas fa-eye"></i></a></li>
						</ul>
					</div>
					<div class="box">
						<img src="images/Pizza.jpg">
						<div class="box-content">
							<h3 class="title">Pizzas</h3>
						</div>
						<ul class="icon">
							<li><a href="#"><i class="fas fa-eye"></i></a></li>
						</ul>
					</div>
					<div class="box">
						<img src="images/Pâte.jpg">
						<div class="box-content">
							<h3 class="title">Pâtes</h3>
						</div>
						<ul class="icon">
							<li><a href="#"><i class="fas fa-eye"></i></a></li>
						</ul>
					</div>
					<div class="box">
						<img src="images/Tajine.jpg">
						<div class="box-content">
							<h3 class="title">Tajines</h3>
						</div>
						<ul class="icon">
							<li><a href="#"><i class="fas fa-eye"></i></a></li>
						</ul>
					</div>
					<div class="box">
						<img src="images/Dessert.jpg">
						<div class="box-content">
							<h3 class="title">Desserts</h3>
						</div>
						<ul class="icon">
							<li><a href="#"><i class="fas fa-eye"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="restaurant-description animate-right">
					<div class="global-headline">
						<h2 class="sub-headline">
							<span class="first-letter">N</span>os spécialités
						</h2>
						<h1 class="headline headline-dark">Menu</h1>
						<div class="asterisk"><i class="fas fa-asterisk"></i></div>
					</div>
					<p>
						Le restaurant LA MARINE à SAFI vous propose de déguster de nombreuses spécialités de plats issus. Poissons, Salades, spaghettis ou pizzas, découvrez une multitude d’arômes et ingrédients dans une atmosphère unique qui vous fera plonger à la ville de SAFI
					</p>
					<a href="Menu.php" class="btn body-btn">VOIR LE MENU COMPLET</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Discover our menu ends -->
	<section class="perfect-blend between">
		<div class="container">
			<div class="global-headline">
				<div class="animate-top">
					<h2 class="sub-headline">
						<span class="first-letter">P</span>arfaites
					</h2>
				</div>
				<div class="animate-bottom">
					<h1 class="headline">Plats</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- Perfect blend ends -->
	<section class="culiry-delight">
		<div class="container">
			<div class="restaurant-info">
				<div class="restaurant-description padding-right animate-left">
					<div class="global-headline">
						<h2 class="sub-headline">
							<span class="first-letter">R</span>éservation
						</h2>
						<!-- <h1 class="headline headline-dark">Delight</h1> -->
						<div class="asterisk"><i class="fas fa-asterisk"></i></div>
					</div>
					<p>
						VENEZ PROFITER DE NOTRE HOSPITALITÉ
					</p>
					<a href="Reservation.php" class="btn body-btn">FAIRE UNE RÉSERVATION</a>
				</div>
				<div class="image-group">
					<img class="animate-top" src="images/Reserved.jpg">
					<img class="animate-bottom" src="images/table.jpg">
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
