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
$auth_id=$_GET['id'];
include 'connection.php';
$sql = "SELECT * FROM autori WHERE id = $auth_id";
$result = mysqli_query($conn, $sql);
$row= mysqli_fetch_assoc($result);
$sql2="SELECT * FROM quotes WHERE aut_id = $auth_id";
$result2=mysqli_query($conn, $sql2);
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
				<button class="btn no-out-focus white-txt" onclick="location.href='<?php echo $link;?>'"><i class="bi bi-person-circle"></i> <?php echo $text;?></button>
					<select class="no-bg no-out-focus white-txt" data-width="fit">
					<?php
						include "lang.php";
						while($row10= mysqli_fetch_assoc($result))
						{
							echo '<option data-content="'.$row10["code"].'"';
							if($_SESSION["lang"]===$row10["lang_id"])
								echo"selected";
							echo '>'.$row10["name"].'</option>';
						}
						?>
					</select>
				</div>
				<div class="col-md-4 col-sm-4 col-4">
					<img class="logo-sm" src="images/logo.jpg" />
				</div>
				<div class="col-md-4 col-4 d-none d-md-block">
					<form class="d-flex" role="search">
						<button class="btn no-bg no-out-focus white-txt" type="submit">
							<i class="bi bi-search"></i>
						</button>
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

        <div class="white-bg">
            <section class=" banner container sect-padding after-sect-padding">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="page-heading "><?php echo $row["name"];?></h1>
                        <p>born <b style="font-weight: 700;"><?php echo $row["name"];?></b>, (<?php echo $row["b_date"].",".$row["d_date"]?>)</p>
                        <div class="attributes">
                            <span class="tag">Romana: 10</span>
                            <span class="tag">English: 100</span>
                            <span class="tag">German: 00</span>
                        </div>
                    </div>

                    <div class="col-lg-6 chooser">
                        <div class="">
                            <button class="btn" type="button" onclick="location.href='editAuthors.php?type=edit&id=<?php echo $auth_id;?>'">Edit Author</button>
                            <button class="btn" type="button" onclick="location.href='editQuotes.php?type=add&id=<?php echo $auth_id;?>'">Add Quotes</button>
                            <button class="btn" type="button">Login</button>
                        </div>
                    </div>

                </section>
                </div>
            </section>

        </div>

        <div class="container sect-padding after-sect-padding">
            <div class="row">
                <div class="col-md-4 px-auto">
                    <img src="images/test.jpg" alt="">
                </div>
                	<div class="col-md-8">
						<div class="scroll white-bg cont-5-padding">
							<?php
							echo $row["about"];
							?>
					</div>
				</div>
            </div>
        </div>


		<section class="banaterra sect-padding after-sect-padding">
			<div class="container">
						<?php
						include 'connection.php';
						while($row2= mysqli_fetch_assoc($result2))
							{	
								if($row2["active"]==1){
								echo '<div class="row">
								<div class="col-md-4 icons">
									<i class="bi bi-share"></i>
									
									<i class="bi bi-heart"></i>
			
									<i class="bi bi-music-note-beamed"></i>
			
									<button class="btn" onclick="location.href='."'editQuotes.php?type=edit&id=".$row2["id"]."'".'"><i class="bi bi-pencil-square"></i> Edit </button>
								</div>
								<div class="col-md-8">
								<p class="news">'.$row2["quote"].'</p>';
								$tag_id=$row2["tag_ids"];
								$sql4="SELECT * FROM tag WHERE id = $tag_id";
								$result4 = mysqli_query($conn, $sql4);
								$rows= mysqli_fetch_assoc($result4);
								if($rows!=NULL){
								echo '<div class="attributes">
								<span class="tag">'.$rows["name"].'</span><hr/></div>
								</div>';
								}
								}
							}
						?>
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
