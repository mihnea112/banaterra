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
							echo '<option data-content="'.$row["code"].'">'.$row["name"].'</option>';
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
				<div class="row">
					<div class="col-md-4">
						<h1 class="page-heading">Teme populare</h1>
					</div>
					<div class="col-md-8 chooser">
						<div class="dropdown">
							<button
								class="btn dropdown-toggle"
								type="button"
								id="dropdownMenuButton"
								data-toggle="dropdown"
								aria-haspopup="true"
								aria-expanded="false">
								Vizualizati toate
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</div>
						<div class="dropdown">
							<button
								class="btn dropdown-toggle"
								type="button"
								id="dropdownMenuButton2"
								data-toggle="dropdown"
								aria-haspopup="true"
								aria-expanded="false">
								Popular
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Caca</a>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</div>
						<button class="btn" type="button">Login</button>
					</div>
				</div>
			</div>
		</section>

		<section class="banner">
			<img src="images/banner_topics.jpg" />
		</section>

		<!-- Hero End -->

		<!-- start MAIN PAGE CONTENT -->

		<section id="select-topics" class="cont-2-padding container">
			<a class="topic-selector selected-topic" href="[SECIFC LINK]">Cunoastere de sine</a> /
			<a class="topic-selector" href="[SPECIFC LINK]">Prietneie</a> /
			<a class="topic-selector" href="[SPECIFC LINK]">Fericire</a> /
			<a class="topic-selector" href="[SPECIFC LINK]">Intelepciune</a> /
			<a class="topic-selector" href="[SPECIFC LINK]">Succes</a> /
		</section>

		<section class="topics sect-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-4 main-author bborder">
						<img src="images/test.jpg" class="autor" />
						<h4>Müller Péter</h4>
						<div class="attributes">
							<span class="tag">Cunoasterea naturii umane</span>
							<span class="tag">Prietenie</span>
							<span class="tag">Lorem ipsum</span>
						</div>
						<div class="action-btns">
							<button class="btn">
								<i class="bi bi-heart"></i>
							</button>
							<button class="btn">
								<i class="bi bi-music-note-beamed"></i>
							</button>
							<button class="btn">
								<i class="bi bi-share"></i>
							</button>
						</div>
					</div>
					<div class="col-md-7 bborder">
						<p class="news">
							O idee bine formulată poate persista în timp, modelând și definind mentalitatea multor generații.
							Filosofia, "iubirea de înțelepciune", este pragmatismul înțelepților, care au înțeles adâncimea și
							înălțimea, atemporalitatea și aspațialitatea relativă a existenței noastre, răspunsul la întrebarea "a fi
							sau a nu fi", în spatele celor spuse, ceea ce nu se poate rosti. Viețile și experiențele noastre
							individuale și colective sunt modelate de filosofiile noastre individuale și colective de viață.
						</p>
					</div>
					<div class="col-md-1">
						<button class="btn">
							<i class="bi bi-pencil-square"> Edit</i>
						</button>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4 main-author bborder">
						<img src="images/test.jpg" class="autor" />
						<h4>Müller Péter</h4>
						<div class="attributes">
							<span class="tag">Cunoasterea naturii umane</span>
							<span class="tag">Prietenie</span>
							<span class="tag">Lorem ipsum</span>
						</div>
						<div class="action-btns">
							<button class="btn">
								<i class="bi bi-heart"></i>
							</button>
							<button class="btn">
								<i class="bi bi-music-note-beamed"></i>
							</button>
							<button class="btn">
								<i class="bi bi-share"></i>
							</button>
						</div>
					</div>
					<div class="col-md-7 bborder">
						<p class="news">
							O idee bine formulată poate persista în timp, modelând și definind mentalitatea multor generații.
							Filosofia, "iubirea de înțelepciune", este pragmatismul înțelepților, care au înțeles adâncimea și
							înălțimea, atemporalitatea și aspațialitatea relativă a existenței noastre, răspunsul la întrebarea "a fi
							sau a nu fi", în spatele celor spuse, ceea ce nu se poate rosti. Viețile și experiențele noastre
							individuale și colective sunt modelate de filosofiile noastre individuale și colective de viață.
						</p>
					</div>
					<div class="col-md-1">
						<button class="btn">
							<i class="bi bi-pencil-square"> Edit</i>
						</button>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4 main-author bborder">
						<img src="images/test.jpg" class="autor" />
						<h4>Müller Péter</h4>
						<div class="attributes">
							<span class="tag">Cunoasterea naturii umane</span>
							<span class="tag">Prietenie</span>
							<span class="tag">Lorem ipsum</span>
						</div>
						<div class="action-btns">
							<button class="btn">
								<i class="bi bi-heart"></i>
							</button>
							<button class="btn">
								<i class="bi bi-music-note-beamed"></i>
							</button>
							<button class="btn">
								<i class="bi bi-share"></i>
							</button>
						</div>
					</div>
					<div class="col-md-7 bborder">
						<p class="news">
							O idee bine formulată poate persista în timp, modelând și definind mentalitatea multor generații.
							Filosofia, "iubirea de înțelepciune", este pragmatismul înțelepților, care au înțeles adâncimea și
							înălțimea, atemporalitatea și aspațialitatea relativă a existenței noastre, răspunsul la întrebarea "a fi
							sau a nu fi", în spatele celor spuse, ceea ce nu se poate rosti. Viețile și experiențele noastre
							individuale și colective sunt modelate de filosofiile noastre individuale și colective de viață.
						</p>
					</div>
					<div class="col-md-1">
						<button class="btn">
							<i class="bi bi-pencil-square"> Edit</i>
						</button>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4 main-author bborder">
						<img src="images/test.jpg" class="autor" />
						<h4>Müller Péter</h4>
						<div class="attributes">
							<span class="tag">Cunoasterea naturii umane</span>
							<span class="tag">Prietenie</span>
							<span class="tag">Lorem ipsum</span>
						</div>
						<div class="action-btns">
							<button class="btn">
								<i class="bi bi-heart"></i>
							</button>
							<button class="btn">
								<i class="bi bi-music-note-beamed"></i>
							</button>
							<button class="btn">
								<i class="bi bi-share"></i>
							</button>
						</div>
					</div>
					<div class="col-md-7 bborder">
						<p class="news">
							O idee bine formulată poate persista în timp, modelând și definind mentalitatea multor generații.
							Filosofia, "iubirea de înțelepciune", este pragmatismul înțelepților, care au înțeles adâncimea și
							înălțimea, atemporalitatea și aspațialitatea relativă a existenței noastre, răspunsul la întrebarea "a fi
							sau a nu fi", în spatele celor spuse, ceea ce nu se poate rosti. Viețile și experiențele noastre
							individuale și colective sunt modelate de filosofiile noastre individuale și colective de viață.
						</p>
					</div>
					<div class="col-md-1">
						<button class="btn">
							<i class="bi bi-pencil-square"> Edit</i>
						</button>
					</div>
				</div>
			</div>
		</section>

		<!-- end MAIN PAGE CONTETN -->

		<div class="cont-5-padding"></div>

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