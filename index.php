<?php 
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	$link="login.php";
	$text="Login";
}
else
{
	$link="_logout.php";
	$text="Logout";
	$logged='<li class="nav-item">
	<a class="nav-link white-txt" href="account.php">Account</a>
</li>';
}
if($_SESSION["role"]=="0"){
	$role='<li class="nav-item">
	<a class="nav-link white-txt" href="roles.php">Roles</a>
</li>';
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
					<button class="btn no-out-focus white-txt" onclick="location.href='<?php echo $link;?>'"><i class="bi bi-person-circle"></i> <?php echo $text;?></button>
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
									<?php echo $role.$logged;?>
								</ul>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</section>

		<section class="topics sect-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-4 main-author">
						<img src="images/test.jpg" class="autor" />
						<h4>Müller Péter</h4>
						<div class="attributes">
							<span class="tag">Cunoasterea naturii umane</span>
							<span class="tag">Prietenie</span>
							<!-- <span class="tag">Lorem ipsum</span> -->
						</div>
					</div>
					<div class="col-md-8">
						<p class="news">
							O idee bine formulată poate persista în timp, modelând și definind mentalitatea multor generații.
							Filosofia, "iubirea de înțelepciune", este pragmatismul înțelepților, care au înțeles adâncimea și
							înălțimea, atemporalitatea și aspațialitatea relativă a existenței noastre, răspunsul la întrebarea "a fi
							sau a nu fi", în spatele celor spuse, ceea ce nu se poate rosti. Viețile și experiențele noastre
							individuale și colective sunt modelate de filosofiile noastre individuale și colective de viață.
						</p>
					</div>
				</div>
			</div>
		</section>
		<section class="born_today sect-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h3>Autori nascuti in aceasta zi</h3>
						<p>In cautarea sensului si tesand idei ascunse Autorii nascuti azi, zambesc voiosi si mandrii:</p>
					</div>
					<div class="col-md-8">
						<div class="row">
						<?php
							include "authorstoday.php";
							if(mysqli_num_rows($author_bd) > 0){
								while($row=mysqli_fetch_assoc($author_bd))
								{
									$link=$row["id"];
								echo '<div class="col-md-3 autor-born-died">
								<a href="auth.php?id='.$link.'"><img src="images/test.jpg" alt="{autor name}" /></a>
								<span class="citate">'.$row["cnt"].' citate</span>
								<h5>'.$row["name"].'</h5>
								</div>';
								}
							}
						?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="dead_today sect-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h3>Autori care au decedat azi</h3>
						<p>Amintirea lor, o fantana de intelpciuni, in sufletul noastre, eterna sa ramana:</p>
					</div>
					<div class="col-md-8">
						<div class="row">
						<?php
							include "authorstoday.php";
							if(mysqli_num_rows($author_bd) > 0){
								while($row= mysqli_fetch_assoc($author_dd))
								{
									$link=$row["id"];
								echo '<div class="col-md-3 autor-born-died">
								<a href="auth.php?id='.$link.'"><img src="images/test.jpg" alt="{autor name}" /></a>
								<span class="citate">'.$row["cnt"].' citate</span>
								<h5>'.$row["name"].'</h5>
								</div>';
								}
							}
						?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="bcont cont-2-padding top-5-margin btm-5-margin">
			<span class="btext">Fiecare limbă este o viziune specifică aspura lumii.</span>

			<img src="images/b_home1.jpg" alt="" class="bimg">
			<img src="images/b_home2.jpg" alt="" class="bimg">
			<img src="images/b_home3.jpg" alt="" class="bimg">

		</section>

		<section class="sect-padding">
			<div class="container">
				<div class="row hello">
					<div class="col-md-4">
						<h3>Salut,</h3>
						<p>
							"Verba volant, Scripta manent"<br />
							"vorbele zboara, scrisul ramane"
						</p>
					</div>
					<div class="col-md-8">
						<div class="scroll">
							O idee bine formulată poate persista în timp, modelând și definind mentalitatea multor generații.
Filosofia, "iubirea de înțelepciune", este pragmatismul înțelepților, care au înțeles adâncimea și înălțimea, atemporalitatea și aspațialitatea relativă a existenței noastre, răspunsul la întrebarea "a fi sau a nu fi", în spatele celor spuse, ceea ce nu se poate rosti.
Viețile și experiențele noastre individuale și colective sunt modelate de filosofiile noastre individuale și colective de viață.
Explorați înțelepciunea veacurilor cu colecția noastră de citate filosofice. Descoperiți idei de la gânditori din toate secolele și contribuiți cu propriile dvs. traduceri în limbile lipsă. Alăturați-vă astăzi comunității noastre de exploratori filosofici!
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="sect-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h3>Donate</h3>
					</div>
					<div class="col-md-8 after-sect-padding">
						<p>
							By donating, you help us build a library and generate original online and offline(book, fine art) content.
						</p>
						<a href="donate.html"><i class="bi bi-arrow-right"></i> Citește mai mult...</a>
					</div>
				</div>
			</div>
		</section>
		<section class="banner">
			<div class="container">
				<img src="images/banner_2.jpg" />
			</div>
		</section>
		<section class="sponsors sect-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h3>Sponsors</h3>
						<span class="citate">Companii</span>
					</div>
					<div class="col-md-8">
						<p>We are proud to collaborate with companies that value sharing and supporting values.</p>
					</div>
				</div>
				<!-- NEW DYNAMIC CAROUSEL -->
				<div class="container mt-5">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<div class="row">
											<div class="col-md-3 sponsor">
												<h6>A&C Consulting Center</h6>
												<span>accc.ro</span>
											</div>
											<div class="col-md-3 sponsor">
												<h6>A&C Consulting Center</h6>
												<span>accc.ro</span>
											</div>
											<div class="col-md-3 sponsor">
												<h6>A&C Consulting Center</h6>
												<span>accc.ro</span>
											</div>
											<div class="col-md-3 sponsor">
												<h6>A&C Consulting Center</h6>
												<span>accc.ro</span>
											</div>
										</div>
									</div>
									<div class="carousel-item">
										<div class="row">
											<div class="col-md-3 sponsor">
												<h6>A&C Consulting Center</h6>
												<span>accc.ro</span>
											</div>
											<div class="col-md-3 sponsor">
												<h6>A&C Consulting Center</h6>
												<span>accc.ro</span>
											</div>
											<div class="col-md-3 sponsor">
												<h6>A&C Consulting Center</h6>
												<span>accc.ro</span>
											</div>
											<div class="col-md-3 sponsor">
												<h6>A&C Consulting Center</h6>
												<span>accc.ro</span>
											</div>
										</div>
									</div>
									<div class="carousel-item">
										<div class="row">
											<div class="col-md-3 sponsor">
												<h6>A&C Consulting Center</h6>
												<span>accc.ro</span>
											</div>
											<div class="col-md-3 sponsor">
												<h6>A&C Consulting Center</h6>
												<span>accc.ro</span>
											</div>
											<div class="col-md-3 sponsor">
												<h6>A&C Consulting Center</h6>
												<span>accc.ro</span>
											</div>
											<div class="col-md-3 sponsor">
												<h6>A&C Consulting Center</h6>
												<span>accc.ro</span>
											</div>
										</div>
									</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>

							<!-- Add more carousel items as needed -->
						</div>
						<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</section>
		<section class="about sect-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h3>About us</h3>
					</div>
					<div class="col-md-8">
						<p>Culturiile locale sunt de o importanta globala</p>
						<a href="about.php"><i class="bi bi-arrow-right"></i> Citește mai mult...</a>
					</div>
				</div>
			</div>
		</section>
		<section class="banner sect-padding">
			<div class="container">
				<img src="images/banner_3.jpg" />
			</div>
		</section>
		<section class="sponsors sect-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h3>Colaborare</h3>
					</div>
					<div class="col-md-8">
						<p>We are proud to collaborate with companies that value sharing and supporting values.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 sponsor">
						<h6>A&C Consulting Center</h6>
						<span>accc.ro</span>
					</div>
					<div class="col-md-3 sponsor">
						<h6>A&C Consulting Center</h6>
						<span>accc.ro</span>
					</div>
					<div class="col-md-3 sponsor">
						<h6>A&C Consulting Center</h6>
						<span>accc.ro</span>
					</div>
					<div class="col-md-3 sponsor">
						<h6>A&C Consulting Center</h6>
						<span>accc.ro</span>
					</div>
				</div>
			</div>
		</section>

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
