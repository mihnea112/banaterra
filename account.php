<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
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
						<option data-content="English">English</option>
						<option data-content="Español">Español</option>
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
										<a class="nav-link white-txt" href="editAuthors.php">Edit Authors</a>
									</li>
									<li class="nav-item">
										<a class="nav-link white-txt" href="topics.html">Topics</a>
									</li>
									<li class="nav-item">
										<a class="nav-link white-txt" href="editTopics.php">Edit Topics</a>
									</li>
									<li class="nav-item">
										<a class="nav-link white-txt" href="editquotes.html">Edit Quotes</a>
									</li>
									<li class="nav-item">
										<a class="nav-link white-txt" href="mm.html">MM</a>
									</li>
									<li class="nav-item">
										<a class="nav-link white-txt" href="learn.html">Learn</a>
									</li>
								</ul>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</section>

		<!-- NAVBAR END -->

		<!-- start MAIN PAGE CONTENT -->

		<section class="cont">
			<div class="container cont-5-padding">
				<div class="cell">
					<section class="highlighted cont-2-padding">
						<h1 class="page-heading">Contul meu</h1>
					</section>
					<section class="cont-2-padding text-center">
						<h5 class="font-news top-5-margin btm-5-margin">Login</h5>
						<form action="your_server_endpoint_here" method="post">
							<div class="form-group">
								<label for="username" class="form-label">Username</label>
								<input type="text" id="username" name="username" class="form-input" required />
							</div>
							<div class="form-group">
								<label for="email" class="form-label">Email</label>
								<input type="email" id="email" name="email" class="form-input" required />
							</div>
							<!-- <div class="form-group">
								<label for="password" class="form-label">Password</label>
								<input type="password" id="password" name="password" class="form-input" required />
							</div> -->
							<!-- <button type="submit" class="btn-submit">Sign Up</button> -->
						</form>
					</section>
					<section class="cont-2-padding text-center highlighted">
						<h5 class="font-news top-5-margin btm-5-margin">Parola</h5>
						<form action="your_server_endpoint_here" method="post">
							<div class="form-group">
								<label for="password-change" class="form-label">Schimbarea Parolei</label>
								<input type="password" id="password-change" name="password-change" class="form-input" required />
							</div>
							<div class="form-group">
								<label for="password-conf" class="form-label">Confirmati</label>
								<input type="password" id="password-conf" name="password-conf" class="form-input" required />
							</div>
							<!-- <div class="form-group">
								<label for="password" class="form-label">Password</label>
								<input type="password" id="password" name="password" class="form-input" required />
							</div> -->
							<!-- <button type="submit" class="btn-submit">Sign Up</button> -->
						</form>
					</section>
					<section class="cont-2-padding text-center">
						<h5 class="font-news top-5-margin btm-5-margin">Informații personale</h5>
						<form action="your_server_endpoint_here" method="post">
							<div class="form-group">
								<label for="gender" class="form-label">Gender</label>
								<select id="gender" name="gender" class="select-input">
									<option value="male">Male</option>
									<option value="female">Female</option>
									<option value="other">Other</option>
								</select>
							</div>
							<div class="form-group">
								<label for="date" class="form-label">Data nasterii</label>
								<input type="date" id="date" name="date" class="form-input" required />
							</div>
							<div class="form-group">
								<label for="country" class="form-label">Tara</label>
								<select id="country" name="county" class="select-input form-input">
									<option value="ro">Romania</option>
									<option value="de">Germania</option>
									<option value="ja">Japonia</option>
								</select>
							</div>
							<div class="form-group">
								<label for="lang" class="form-label">Tara</label>
								<select id="lang" name="lang" class="select-input form-input">
									<option value="ro">romana</option>
									<option value="de">germana</option>
									<option value="ja">japoneza</option>
								</select>
							</div>

							<div class="form-group bborder">
								<label for="languages" class="form-label">Known Languages</label>
								<div class="checkbox-group">
									<label class="checkbox-label">
										<input type="checkbox" name="languages[]" value="english" class="checkbox-input" /> English
									</label>
									<label class="checkbox-label">
										<input type="checkbox" name="languages[]" value="spanish" class="checkbox-input" /> Spanish
									</label>
									<label class="checkbox-label">
										<input type="checkbox" name="languages[]" value="french" class="checkbox-input" /> French
									</label>
									<label class="checkbox-label">
										<input type="checkbox" name="languages[]" value="german" class="checkbox-input" /> German
									</label>
									<label class="checkbox-label">
										<input type="checkbox" name="languages[]" value="english" class="checkbox-input" /> English
									</label>
									<label class="checkbox-label">
										<input type="checkbox" name="languages[]" value="spanish" class="checkbox-input" /> Spanish
									</label>
									<label class="checkbox-label">
										<input type="checkbox" name="languages[]" value="french" class="checkbox-input" /> French
									</label>
									<label class="checkbox-label">
										<input type="checkbox" name="languages[]" value="german" class="checkbox-input" /> German
									</label>
									<label class="checkbox-label">
										<input type="checkbox" name="languages[]" value="english" class="checkbox-input" /> English
									</label>
									<label class="checkbox-label">
										<input type="checkbox" name="languages[]" value="spanish" class="checkbox-input" /> Spanish
									</label>
									<label class="checkbox-label">
										<input type="checkbox" name="languages[]" value="french" class="checkbox-input" /> French
									</label>
									<label class="checkbox-label">
										<input type="checkbox" name="languages[]" value="german" class="checkbox-input" /> German
									</label>
								</div>
							</div>
							<button type="submit" class="btn-save top-5-margin btm-5-margin">Sign Up</button>
						</form>
					</section>

					<section class="cont-2-padding text-center highlighted">
						<h5 class="font-news top-5-margin btm-5-margin">Interesele tale</h5>
						<form action="your_server_endpoint_here" method="post">
							<div class="form-group bborder">
								<div class="checkbox-group">
									<label class="checkbox-label">
										<input type="checkbox" name="Dragoste" value="english" class="checkbox-input" /> Dragoste
									</label>
									<label class="checkbox-label">
										<input type="checkbox" name="Dragoste" value="english" class="checkbox-input" /> Dragoste
									</label>
									<label class="checkbox-label">
										<input type="checkbox" name="Dragoste" value="english" class="checkbox-input" /> Dragoste
									</label>
									<label class="checkbox-label">
										<input type="checkbox" name="Dragoste" value="english" class="checkbox-input" /> Dragoste
									</label>
									<label class="checkbox-label">
										<input type="checkbox" name="Dragoste" value="english" class="checkbox-input" /> Dragoste
									</label>
									<label class="checkbox-label">
										<input type="checkbox" name="Dragoste" value="english" class="checkbox-input" /> Dragoste
									</label>
									<label class="checkbox-label">
										<input type="checkbox" name="Dragoste" value="english" class="checkbox-input" /> Dragoste
									</label>
									<label class="checkbox-label">
										<input type="checkbox" name="Dragoste" value="english" class="checkbox-input" /> Dragoste
									</label>
								</div>
							</div>
							<button type="submit" class="btn-save top-5-margin btm-5-margin">Save</button>
						</form>
					</section>

					<section class="cont-2-padding text-center ">
						<h5 class="font-news top-5-margin btm-5-margin">Teme</h5>
						<form action="your_server_endpoint_here" method="post">
							<div class="form-group bborder">
								<div class="checkbox-group">
									<label class="checkbox-label">
										<input type="checkbox" name="Dragoste" value="english" class="checkbox-input" /> Zilele Lumii
									</label>
									<label class="checkbox-label">
										<input type="checkbox" name="Dragoste" value="english" class="checkbox-input" /> Zilele Lumii
									</label>
									<label class="checkbox-label">
										<input type="checkbox" name="Dragoste" value="english" class="checkbox-input" /> Zilele Lumii
									</label>
									<label class="checkbox-label">
										<input type="checkbox" name="Dragoste" value="english" class="checkbox-input" /> Zilele Lumii
									</label>
									<label class="checkbox-label">
										<input type="checkbox" name="Dragoste" value="english" class="checkbox-input" /> Zilele Lumii
									</label>
									<label class="checkbox-label">
										<input type="checkbox" name="Dragoste" value="english" class="checkbox-input" /> Zilele Lumii
									</label>
									<label class="checkbox-label">
										<input type="checkbox" name="Dragoste" value="english" class="checkbox-input" /> Zilele Lumii
									</label>
									<label class="checkbox-label">
										<input type="checkbox" name="Dragoste" value="english" class="checkbox-input" /> Zilele Lumii
									</label>
									<label class="checkbox-label">
										<input type="checkbox" name="Dragoste" value="english" class="checkbox-input" /> Zilele Lumii
									</label>
									<label class="checkbox-label">
										<input type="checkbox" name="Dragoste" value="english" class="checkbox-input" /> Zilele Lumii
									</label>
									<label class="checkbox-label">
										<input type="checkbox" name="Dragoste" value="english" class="checkbox-input" /> Zilele Lumii
									</label>
									
								</div>
							</div>
							<button type="submit" class="btn-save top-5-margin btm-5-margin">Save</button>
						</form>
					</section>
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
