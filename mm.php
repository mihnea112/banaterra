<?php 
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	$link="login.php";
	$text="Login";
	$displaylog="d-none";
}
else
{
	$link="_logout.php";
	$text="Logout";
	$display_logout="d-none";
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Banaterra</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
			crossorigin="anonymous" />
		<link
			rel="stylesheet"
			type="text/css"
			href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<script
			defer
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
			crossorigin="anonymous"></script>
	</head>
	<body>
		<section class="nav">
			<div class="row navrow">
				<div class="col-md-4 col-sm-4 col-4">
					<button class="btn no-out-focus white-txt" onclick="location.href='_logout.php'"><i class="bi bi-person-circle"></i> Logout</button>
					<select class="no-bg no-out-focus white-txt" data-width="fit">
					<?php
						include "lang.php";
						while($row= mysqli_fetch_assoc($result))
						{
							echo '<option data-content="'.$row["code"].'"';
							if($_SESSION["lang"]===$row["lang_id"])
								echo"selected";
							echo '>'.$row["name"].'</option>';
						}
					?>
					</select>
				</div>
				<div class="col-md-4 col-sm-4 col-4">
					<img class="logo-sm" src="images/logo.jpg" />
				</div>
				<div class="col-md-4 col-4 d-none d-md-block">
					<form class="d-flex" role="search">
						<button class="btn no-bg no-out-focus white-txt" type="submit"><i class="bi bi-search"></i></button>
						<input
							class="form-control me-2 no-out-focus no-bg white-txt"
							type="search"
							placeholder="Search"
							aria-label="Search" />
					</form>
				</div>
				<div class="col-md-4 col-4 col-sm-4 mx-auto">
					<nav class="navbar navbar-expand-lg bg-* justify-content-center">
						<div class="container-fluid">
							<button
								class="navbar-toggler ms-auto"
								type="button"
								data-bs-toggle="collapse"
								data-bs-target="#navbarSupportedContent"
								aria-controls="navbarSupportedContent"
								aria-expanded="false"
								aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"><i class="bi bi-list white-txt"></i></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav">
									<li class="nav-item">
										<a class="nav-link white-txt" href="/">Home</a>
									</li>
									<li class="nav-item">
										<a class="nav-link white-txt" href="authors.php">Authors</a>
									</li>
									<li class="nav-item">
										<a class="nav-link white-txt" href="topics.php">Topics</a>
									</li>
									<li class="nav-item">
										<a class="nav-link white-txt" href="mm.php">MM</a>
									</li>
									<li class="nav-item">
										<a class="nav-link white-txt" href="learn.php">Learn</a>
									</li>
									<?php echo $role?>
								</ul>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</section>

		<!-- NAVBAR END -->

		<!-- HERO START -->

		<section class="">
			<div class="container cont-2-padding">
				<h1 class="page-heading">Memento Mori</h1>
			</div>
		</section>

		<section class="banner">
			<img src="images/banner-mm.jpg" />
		</section>

		<!-- Hero End -->

		<!-- start MAIN PAGE CONTENT -->

		<section class="banaterra sect-padding after-sect-padding">
			<div class="container">
				<div class="row sect-padding">
					<div class="col-md-4">
						<h5>Nu uita că vei muri. trăiești acum, ca întotdeauna, în prezentul continuu nemărginit</h5>
					</div>
					<div class="col-md-8">
						<p>
							Studiază diferite puncte de vedere si găseste numitorul comun. Incercă întotdeauna sã vezii imaginea de
							ansamblu. Aceastã pagina este doar un exemplu matematic, cât se poate de personal. Date brute din
							perspective diametral opuse. Concentreaza-te pe linia subtire în care se intersecteazã "a fi sau a nu fi".
							Filosofia este pragmatismul omului
						</p>
						<p>Prezenta de spirit poate fi mereu prezent, in prezent. Acesta este starea de flow, mindfulness.</p>
						<p>
							O secunda frumos petrecuta este o secunda care nu este irosita. Crescând calitatea creste cantitatea.
							Investeste in tine insuti. Cunoaste-te pe tine insuti. Te ajuti pe tine, ajutând pe cel de lângã. Nu
							existã altii.
						</p>
					</div>
				</div>
				<div class="<?php echo $displaylog;?>">
				<div class="row sect-padding">
					<div class="col-md-4">
						<h5>Timpul tău petrecut pe pământ</h5>
						<span class="citate"
							>Știind exact ce oră este, unde Te afli pe harta TA, te poate ajuta să navighezi spre infinit și mai
							departe</span
						>
					</div>
					<div class="col-md-8">
						<p>69 years | 69 months | 69 days | 69 hours | 69 minutes and 69 seconds</p>
					</div>
				</div>
				<div class="row sect-padding">
					<div class="col-md-4">
						<h5>Timpul estimat de sosire la următorul destin</h5>
					</div>
					<div class="col-md-8">
						<div class="dropdown">
							<button
								class="btn dropdown-toggle btn-show-more"
								type="button"
								id="dropdownMenuButton2"
								data-toggle="dropdown"
								aria-haspopup="true"
								aria-expanded="false">
								Popular
							</button>
							<div class="dropdown-menu btn-show-more" aria-labelledby="dropdownMenuButton2">
								<a class="dropdown-item" href="#">Opt1</a>
								<a class="dropdown-item" href="#">Opt2</a>
								<a class="dropdown-item" href="#">Opt3</a>
							</div>
						</div>
						<p class="sect-padding">0 years | 0 months || 0 days | 0 hours | 0 minutes and 10 seconds</p>
					</div>
				</div>

				<div class="row sect-padding">
					<div class="col-md-4">
						<h5>Speranta de viatã pe tări</h5>
					</div>
					<div class="col-md-8">
						<img style="width:100%; height:auto" src="https://upload.wikimedia.org/wikipedia/commons/d/de/Life_Expectancy_2008_Estimates_CIA_World_Factbook.png" alt="Life Expectancy 2008 Estimates CIA World Factbook.png">
						<a href="https://commons.wikimedia.org/wiki/File:Life_Expectancy_2008_Estimates_CIA_World_Factbook.png#/media/Fișier:Life_Expectancy_2008_Estimates_CIA_World_Factbook.png">Source: Wikipedia</a>
					</div>
				</div>

				<div class="row sect-padding">
					<div class="col-md-4">
						<h5>Cei mai bătrâni oameni</h5>
					</div>
					<div class="col-md-8">
						
						
						<table class="lines">

						<thead>
							<tr class="bborder">
								<td>Nume</td>
								<td>Vârstă</td>
							</tr>
						</thead>

						<tbody>

							<tr>
								<td>Mihai Emimescu</td>
								<td>150 ani</td>
							</tr>

						</tbody>

						</table>

					</div>
				</div>

				<div class="row sect-padding">
					<div class="col-md-4">
						<h5>Longeviv biblice</h5>
					</div>
					<div class="col-md-8">
						<button class="btn btn-show-more">Afișează mai mult</button>
						
						<table class="lines">

						<thead>
							<tr class="bborder">
								<td>Nume</td>
								<td>Vârstă</td>
							</tr>
						</thead>

						<tbody>

							<tr>
								<td>Mihai Emimescu
									<br>
									<span>Poet</span>
								</td>
								<td>150 ani</td>
							</tr>

						</tbody>

						</table>

					</div>
				</div>

				<div class="row sect-padding">
					<div class="col-md-4">
						<h5>Animale</h5>
					</div>
					<div class="col-md-8">
						<button class="btn btn-show-more">Afișează mai mult</button>
						
						<table class="lines">

						<thead>
							<tr class="bborder">
								<td>Nume</td>
								<td>Vârstă</td>
							</tr>
						</thead>

						<tbody>

							<tr>
								<td>Mihai Emimescu
									<br>
									<span>Poet</span>
								</td>
								<td>150 ani</td>
							</tr>

						</tbody>

						</table>

					</div>
				</div>

				<div class="row sect-padding">
					<div class="col-md-4">
						<h5>Plante</h5>
					</div>
					<div class="col-md-8">
						<button class="btn btn-show-more">Afișează mai mult</button>
						
						<table class="lines">

						<thead>
							<tr class="bborder">
								<td>Nume</td>
								<td>Vârstă</td>
							</tr>
						</thead>

						<tbody>

							<tr>
								<td>Mihai Emimescu
									<br>
									<span>Poet</span>
								</td>
								<td>150 ani</td>
							</tr>

						</tbody>

						</table>

					</div>
				</div>




				<!-- SE TERMINA PAGINA - MESAJ TENQ -->
				<div class="row sect-padding">
					<div class="col-md-4">
						<h5>Vã multumim pentru timp, atentie, energie.</h5>
					</div>
					<div class="col-md-8">
						<p>
							Vã multumim ca sunteti Aici. In prezent. Pentru totdeauna. In functie de locatie, calculat pe baza
							mediilor sperantei de viatã. Mai degraba un avertisment decât o garantie.
						</p>
					</div>
				</div>
				</div>
				<div class="<?php echo $display_logout;?>">
				<div class="row sect-padding">
					<div class="col-md-4">
						<h5>Nu esti Autentificat</h5>
					</div>
					<div class="col-md-8">
						<a href="login.php">Login</a>
					</div>
				</div>
				</div>
			</div>
		</section>

		<!-- end MAIN PAGE CONTETN -->

		<!-- FOOTER -->

		<footer>
			<div class="container cont-5-padding footer">
				<div class="row">
					<div class="col-md-3">
						<h3>
							Fa parte din lumea <br />
							BanaTerra
						</h3>
						<img src="" />
					</div>
					<div class="col-md-3">
						<p>
							Inregistreaza-te si apratine comunitatii BanaTerra pentru a avea acces la caarcteristici si continut
							exclusiv.
						</p>
						<a href="register.php">Register area</a>
					</div>
					<div class="col-md-6" id="footer-menu">
						<div class="row menu">
							<div class="col-md-4">
								<h6>Sitemap</h6>
								<p><a class="footer-link" href="">Authors</a></p>
								<p><a class="footer-link" href="">Topics</a></p>
								<p><a class="footer-link" href="">Learn</a></p>
							</div>
							<div class="col-md-4">
								<h6>Contact</h6>
								<p>contact@bterra.ro</p>
								<p>+40735462000</p>
								<p>Str. Timotei Cipariu,</p>
								<p>nr.1, ap.2, Timisoara, RO</p>
							</div>
							<div class="col-md-4">
								<h6>Follow us</h6>
								<p>Instagram</p>
								<p>Facebook</p>
								<p>Youtube</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script
			type="text/javascript"
			src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
		<script
			type="text/javascript"
			src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/scripts.js"></script>
	</body>
</html>

<!-- MATEI EDITED -->
