<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
if($_SESSION["role"]=="0"){
	$role='<li class="nav-item">
	<a class="nav-link white-txt" href="requests.php">Request</a>
</li>
<li class="nav-item">
	<a class="nav-link white-txt" href="users.php">Users</a>
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
		<link rel="stylesheet" href="css/cerculete.css" />
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

		<div class="blue-banner top-5-padding btm-5-padding">

			<section class="bcont cont-2-padding ">
				<span class="btext">Culturile locale sunt de o importanță globală.</span>
	
				<img src="images/b_home1.jpg" alt="" class="bimg">
				<img src="images/b_home2.jpg" alt="" class="bimg">
				<img src="images/b_home3.jpg" alt="" class="bimg">
	
			</section>
		</div>

		<section class="banaterra sect-padding">
			<div class="container">
				<h1 class></h1>
				<div class="row sect-padding">
					<div class="col-md-4">
						<h5>Din Banaterrra, spre sine</h5>
					</div>
					<div class="col-md-8">
						<p>
							Înca din cele mai vechi timpuri, cautarea sinelui a reprezentat un subiect marcant in existenta fiecărui
							individ. Cu totii ne sträduim s intelegem cine suntem cu adevärat si care este scopul nostru in aceasta
							viata, atingând deseori, prin reflectie, aspecte abstracte si profunde ale naturii umane.
						</p>
						<p>
							Cautarea sinelui nu este o calatorie usoar, iar raspunsurile nu sunt intotdeauna clare. Cu toate acestea,
							procesul in sine este valoros. Ne ajut sã crestem, s ne dezvoltm si sã ne aliniem cu adevărata noastra
							identitate. Când ne descoperim pe noi insine, suntem mai pregatiti sã ne asumăm responsabilitatea pentru
							propriile vieti si sã traim autentic.
						</p>
						<p>
							Banaterra se angajeaza sã reduca decalajele culturale si sã promoveze intelegerea interculturala, proces
							similar celui al orasului Timisoara, care a fost pionier in aducerea luminii in spatiile publice prin
							electricitate. Contribuind la iluminarea mintii si inimii fiecărui individ, putem aduce in spatiul
							personal mai mult intelegere si armonie.
						</p>
					</div>
				</div>
				<div class="row sect-padding">
					<div class="col-md-4">
						<h5>Povestea noastra</h5>
					</div>
					<div class="col-md-8">
						<p>
							Calatoria noastra a pornit in anul 2005, ca parte integrantã a proiectului Global Culture Network
							Ratsko.Net si reprezinta in prezent o comunitate aflata in contiuna dezvoltare, unde oricine este
							binevenit sa contribuie si sa se dezvolte indiferent de backgroundul din care provine. Vino asa cum esti
							si indrazneste sa-ti explorezi autenticitatea.
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<h5>Principiile care ne ghidează</h5>
					</div>
					<div class="col-md-8">
						<p>
							Reflecta aspiratile noastre interioare si orientarea noastra morala in lume. Aspecte precum respectul
							pentru demnitatea umană, libertatea individuala, egalitatea si solidaritatea sunt adânc inădacinate in
							etica si filosofia umanã si au fost dezvoltate de-a lungul istoriei pentru a ne ajuta sã intelegem mai
							bine ceea ce inseamnă sã fim o fiintã umana intr-o lume complexã.
						</p>
					</div>
				</div>
			</div>
		</section>
		<section class="valori banaterra sect-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h5>Valori care unesc</h5>
					</div>
					<div class="col-md-8">
						<p>
							Banaterra este spatiul neutru educativ, unde indiferent de limba, religie sau ideologie, valorile umane
							fundamentale universale ne aduc impreunã. Cream un mediu virtual unde invitam mintile curiose sã se
							descopere prin intermediul filosofie, artei si literaturi universale si sa isi aduca aportul in
							dezvoltarea Banaterrei pentru toti.
						</p>
					</div>
				</div>

				<div id="cerculete" class="cerculete cont-5-padding">
					<div id="cerc-1">
						<span>Cunoastere</span>
					</div>
					<div id="cerc-2">
						<span>Filozofie</span>
					</div>
					<div id="cerc-3">
						<span>Intelepciune</span>
					</div>
					<div id="cerc-4">
						<span>Educatie</span>
					</div>
					<div id="cerc-5">
						<span
							>Memorie<br />
							Colectiva
						</span>
					</div>
					<div id="cerc-6">
						<span>Metavers</span>
					</div>
				</div>
			</div>
		</section>

		<section class="comunitatea banaterra sect-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h5>Valori care unesc</h5>
					</div>
					<div class="col-md-8">
						<p>
							Comunitatea noastra este un loc in care diversitatea este binevenit, iar valorile universale sunt punctul
							de plecare pentru toti membrii săi. Intr-o lume in continua schimbare, unde tehnologia castiga tot mai
							mult spatiu si capacitatea de a retine informatie este tot mai redus, Banaterra oferã oportunităti pentru
							explorarea si intelegerea mai profundã a sinelui si a lumii din jurul nostru, aproape de sufletul celor
							care ii trec "pragul".
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<h5>
							Educatia - Cheia<br />
							Transformärii
						</h5>
					</div>
					<div class="col-md-8">
						<p>
							Suntem convinsi ca educatia este cheia schimbärii. Prin intermediul acesteia, amenii pot ajunge sã se
							cunoasca pe ei insisi si lumea din jurul lor mai profund. Un proverb sträin sugereaza ca in cautarea
							intelepciunii si spiritualitatii, putem gäsi o conexiune cu divinitatea si o intelegere mai profundă a
							propriei fiinte.
						</p>
						<p>
							Gândirea in afara cutiei, cunoscutã si sub denumirea de "thinking out of the box", reprezint o abordare
							intelectualã care subliniaza importanta explorrii si a transcenderi limitelor conventionale. Aceasta
							filosofie incurajeaza individul sã priveasca dincolo de constrângerile si paradigmele obisnuite, s
							investigheze adâncimile si înaltimile gândirii umane in cautarea adevärului si intelegerii profunde a
							lumii si a sinelui. "De ce suntem aici?". "Ce inseamnă sã fim liberi?" si "Care este scopul vietii?" sunt
							doar câteva dintre intrebarile care se aud atunci cand in interiorul nostru se lasã linistea.
						</p>
						<p>
							Banaterra vă invitã la introspectia profunda si explorarea filozofica a existentei umane, aducand lumină
							asupra intrebärilor esentiale care modeleazã perceptia noastrã asupra vietii. Cautarea sinelui nu se
							incheie niciodat. Suntem finte in continua evolutie, iar intelegerea noastra despre cine suntem se schimba
							pe măsura ce trecem prin experiente si lectii de viat, conectându-ne cu esenta si intelepciunea
							individualã si colectiva.
						</p>
					</div>
				</div>
			</div>
		</section>
		<footer>
			<div class="container cont-5-padding footer">
				<div class="row">
					<div class="col-md-3">
						<h5>
							Fa parte din lumea <br />
							BanaTerra
						</h5>
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
