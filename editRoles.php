<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
$type=$_GET["type"];
$role_id=$_GET["id"];
if($type==="edit")
{
	include 'connection.php';
	$sql = "SELECT * FROM roles WHERE id = $role_id";
	$result = mysqli_query($conn, $sql);
	$row= mysqli_fetch_assoc($result);
    if($row["edit"]=="1")
    {
        $edit="checked";
    }
    if($row["plus"]=="1")
    {
        $add="checked";
    }
    if($row["del"]=="1")
    {
        $delete="checked";
    }
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

		<!-- start MAIN PAGE CONTENT -->

		<section class="cont">
			<div class="container cont-5-padding">
				<div class="cell">
					<section class="highlighted cont-2-padding">
						<h1 class="page-heading"><?php echo $type;?> Roles</h1>
					</section>
					<section class="cont-2-padding text-center">
						<form action="_editRoles.php?type=<?php echo $type;?>&id=<?php echo $role_id;?>" method="post">
							<div class="form-group">
								<label for="name" class="form-label">Nume</label>
								<input type="text" id="name" name="name" class="form-input" <?php if($role_id!=0){echo 'value="'.$row["name"].'"';}?>required />
							</div>
							<label for="add" class="form-label">Add
								<input type="checkbox" id="add" name="add" class="checkbox-input" value="1"  <?php echo $add;?>/></label>
                            <label for="edit" class="form-label">Edit
								<input type="checkbox" id="edit" name="edit" class="checkbox-input" value="1"   <?php echo $edit;?>/></label>
                            <label for="delete" class="form-label">Delete
								<input type="checkbox" id="delete" name="delete" class="checkbox-input" value="1" <?php echo $delete;?>/></label>
							<label for="languages" class="form-label">Limba</label>
								<div class="checkbox-group">
                                <?php
						            include "lang.php";
						            while($row4= mysqli_fetch_assoc($result))
						            {
                                        if($row["lang"]==$row4["lang_id"]){
                                            $ch="checked";
                                        }
							            echo '<label class="checkbox-label">
										<input type="radio" name="languages[]" value="'.$row4["lang_id"].'" class="checkbox-input"'.$ch.' />'.$row4["name"].'</label>';
						            }
                                ?>
								</div>
                            <label for="tag" class="form-label">Tag</label>
								<div class="checkbox-group">
                                <?php
						            include "_tag.php";
						            while($row2= mysqli_fetch_assoc($result))
						            {
                                        if($row["tag"]==$row2["id"]){
                                            $ch2="checked";
                                        }
							            echo '<label class="checkbox-label">
										<input type="radio" name="tag[]" value="'.$row2["id"].'" class="checkbox-input"'.$ch2.' />'.$row2["name"].'</label>';
						            }
                                ?>
								</div>
							<button type="submit" class="btn-save top-5-margin btm-5-margin"><?php echo $type;?></button>
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
