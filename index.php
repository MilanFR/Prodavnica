<!DOCTYPE html>
<html>
<head>
	<title>Prodavnica</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet"
	>
</head>
<body>
	<div class="main">
		<div class="top-bar">
			<a class="signin-btn" href="#">Sign in</a>
		</div>
		<div class="header">
			<h2>Prodavnica</h2>
			<p>Sve za vašu kuću</p>
		</div>
		<nav>
			<button onclick="drop()" class="nav-buttons menu">
				<img src="images/menu-hamburger.png">
			</button>
			<ul id="dropdown" class="dropdown-menu">
				<li>Početna</li>
				<li>Pretraži</li>
				<li>Rasprodaja</li>
				<li>Pomoć</li>
			</ul>
			<button style="float: right; " class="nav-buttons cart">
				<img style="padding-right: 2px;" src="images/cart.png">
			</button>
		</nav>
		<section>
			<!-- Slideshow container -->
			<div class="slideshow-container">
				<div class="mySlides fade">
					<img src="images/fabricsofa.jpg" style="width:100%">
					<div class="text">Caption Home</div>
				</div>

				<div class="mySlides fade">
					<img src="images/gardening.jpg" style="width:100%">
					<div class="text">Caption Garden</div>
				</div>

				<div class="mySlides fade">
					<img src="images/tools.jpg" style="width:100%">
					<div class="text">Caption Tools</div>
				</div>
			</div>

			<img id="popust-reklama" src="images/popust.jpg">

			<div class="custom-select">
	  			<select>
					<option value="0">Kategorija:</option>
					<option value="1">Kuća i bašta</option>
					<option value="2">Bazeni i oprema</option>
					<option value="3">Mašine i Alati</option>
					<option value="4">Lepota i zdravlje</option>
	  			</select>
	  			<div id="select-buttons">
	  				<button>Kuća i bašta</button>
	  				<button>Bazeni i oprema</button>
	  				<button>Mašine i Alati</button>
	  				<button>Lepota i zdravlje</button>
	  			</div>
			</div>
		</section>
		<div class=item-container>
			<div class="item">
				<img src="images/item-pliers.jpg" style="width:150px; height:150px">
				<p>Predmet</p>
				<p>Cena: 500 din</p>
			</div>
			<div class="item">
				<img src="images/telefon.jpg" style="width:150px; height:150px">
				<p>Predmet</p>
				<p>Cena: 5500 din</p>
			</div>
			<div class="item">
				<img src="images/telefon.jpg" style="width:150px; height:150px">
				<p>Predmet</p>
				<p>Cena: 5500 din</p>
			</div>
			<div class="item">
				<img src="images/telefon.jpg" style="width:150px; height:150px">
				<p>Predmet</p>
				<p>Cena: 5500 din</p>
			</div>
		</div>
		<div class="random-text">
			<h3>Besplatna isporuka</h3>
			<p>Besplatna isporuka na teritoriji Srbije za sve iznose preko 3000 RSD.</p>
			
		</div>
		<footer>
			<div class="upper-nav">
				<p style="border-bottom: 1px solid #685345"><span class="arrow"></span> Akcije</p>
				<p style="border-bottom: 1px solid #685345"><span class="arrow"></span> Način plaćanja</p>
				<p style="border-bottom: 1px solid #685345"><span class="arrow"></span> O nama</p>
				<p style="border-bottom: 1px solid #685345"><span class="arrow"></span> Korisne informacije</p>
				<p><span class="arrow"></span> Reklama</p>
			</div>
			<div class="bottom-nav">
				<span>2018</span>
				<div style="float: right; color:white;">
					<span onclick="window.scrollTo(0, 0);">Go to top |</span>
					<span>Contact us</span>
				</div>
			</div>
		</footer>

	</div>


</body>
<script src="main.js"></script>
</html>