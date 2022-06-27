<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login']) {
} else {
	header("Location: http://localhost/final%20project%20alagha/dashboard/login2.php");
}
if (isset($_SESSION['login']) && $_SESSION['login']) {
} else {
	header("Location: http://localhost/final%20project%20alagha/dashboard/login2.php");
}
include('dashboard/db_connection.php');

$category_select = "SELECT * FROM stories where category_id = $_GET[id]";
$qu = mysqli_query($con, $category_select);


?>
<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>All Stories</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
	
</head>

<body class="is-preload">
	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header">
			<div class="inner">

				<!-- Logo -->
				<?php $id = $_GET['id']; echo "<a href='public.php?id=$id' class='logo'>"; ?>
					<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">All Categories</span>
				</a>

				<!-- Nav -->
				<nav>
					<ul>
						<li><a href="#menu">Menu</a></li>
					</ul>
				</nav>

			</div>
		</header>

		<!-- Menu -->
		<?php include('menu.php') ?>


		<!-- Main -->
		<div id="main">
			<div class="inner">
				<header>
					<h1>All places of this category.</h1>
					<p>Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit amet nisi euismod sed cursus arcu elementum ipsum arcu vivamus quis venenatis orci lorem ipsum et magna feugiat veroeros aliquam. Lorem ipsum dolor sit amet nullam dolore.</p>
				</header>
				<section class="tiles">
				<?php
					if (mysqli_num_rows($qu) > 0) {
						while ($row = mysqli_fetch_assoc($qu)) {
							$str_id = $row['id'];
							$str_sn = $row['story_name'];
							$str_desc = $row['description'];
							$str_place = $row['place'];
							$str_phone = $row['phone_number'];
							$str_logo = $row['logo'];
							$cat_id = $row['category_id'];
							echo"
						  
							<article style='border-radius: 50%; width: 300px; height: 300px;' class='style3'>
							
						<span style='border-radius: 50%; width: 300px; height: 300px;' class='image'>".
						"<img src='http://localhost/final%20project%20alagha/dashboard/$str_logo' alt='' />
					
						".
						
					"</span>
						<a href='generic.php?id=$str_id'>
							<h2>$str_sn</h2>
							<div class='content'>
								<p>$str_desc.</p>
							</div>
						</a>
			
					</article>
							
							";

							}
						}
						
					?>
					
					
  



						
				</section>
			</div>
		</div>

		<!-- Footer -->
		<?php include('footer.php') ?>
		

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>