<?php
session_start();
$_SESSION['user_id'] = $_GET['id'];
if (isset($_SESSION['login']) && $_SESSION['login']) {
} else {
	header("Location: http://localhost/final%20project%20alagha/dashboard/login_2.php");
}
include('dashboard/db_connection.php');

$category_select = "SELECT id ,category_name, description FROM category ";
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
	<title>All Categories</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
	<style>
		.form {
			border-radius: 5px;
			outline: none;
			border: none;
			border: 1px solid gray;
			height: 45px;
		}
		.strong{
			margin: 80px auto;
			text-align: center;
			width: 80%;
		}
		#str{
			width: 100% ;
			
		}
		#str img{
			height: 700px;
			width: 100% ;

		}
	</style>
</head>

<body class="is-preload">
	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header" style="position: absolute;">
			<div class="inner">
			
				<form action="" method="POST">
					<input type="search" name="search" class="form" placeholder="Search" style="background-color: transparent;">
					<input type="submit" name="btn_search" value="search">
				</form>

				<!-- Nav -->
				<nav>
					<ul>
						<li><a href="#menu">Menu</a></li>
					</ul>
				</nav>

			</div>


		</header>
	</div>
		<!-- Menu -->
	<?php include('menu.php') ?>

		<!-- Main -->
		<div id="str">
					<div class="imageses">
					<div class="img" >
			<img id="Sec" src="assets/fashion-history-and-how-it-developed.jpg" alt="">
        <div class="abs" style="position: absolute; top: 550px; left: 630px;">
        <p class="one" style="font-size: 32px; font-weight: bold; text-shadow: 0 0 10px #f2849e; color: white;margin: 0;position: relative;right: 35px;">Rate All Stories In Gaza</p>
        <div class="machine">
        <p style="font-size: 20px; text-shadow: 0 0 5px white; color: #f2849e;position: relative;right: 70px;" class="two"></p>
    </div>
    </div>
    </div>
					</div>
					
				</div>
				<div class="strong" >
					<h1>All items and categories of buying and selling in Gaza.</h1>
					<p>Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit amet nisi euismod sed cursus arcu elementum ipsum arcu vivamus quis venenatis orci lorem ipsum et magna feugiat veroeros aliquam. Lorem ipsum dolor sit amet nullam dolore.</p>
				</div>
		<div id="wrapper">
		<div id="main">
			<div class="inner">
				
				
				<section class="tiles">
					<?php
					
							if (isset($_POST['btn_search'])) {
								$search = $_POST['search'];
								$like = "SELECT category_name , id, description FROM category WHERE category_name LIKE  '%$search%' ";
									$loading_query = mysqli_query($con , $like);
								if (mysqli_num_rows($loading_query) > 0) {
									$rows = mysqli_fetch_assoc($loading_query);		
									$get_id2 = $rows['id'];
						
									echo	'<article style="position:relative;" class="style1">
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>' .
						
								"<a href='elements.php?id=$get_id2'>" .
								'<h2>' . $rows['category_name']  . '</h2>' .
						
								"<div class='content'>" .
								'<p>' .  $rows['description']  . '</p>'
								. "</div>
									</a>
								</article>";
							}

								}else{
									if (mysqli_num_rows($qu) > 0) {
										while ($row = mysqli_fetch_assoc($qu)) {
											$get_id = $row['id'];
									echo	'<article style="position:relative;" class="style1">
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>' .

								"<a href='elements.php?id=$get_id'>" .
								'<h2>' . $row['category_name']  . '</h2>' .

								"<div class='content'>" .
								'<p>' .  $row['description']  . '</p>'
								. "</div>
									</a>
								</article>";
								}
							
						}
					}


					?>
				</section>
			</div>
		</div>
		<!-- Footer -->
		<?php include('footer.php') ?>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="bootstrap.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
    <script>
  var myTxt ="The Best Stories And Favourate Categories In Gaza";
  var i = 0 ;
function Typing(){
  if(i<myTxt.length){
    document.querySelector('.two').innerHTML += myTxt.charAt(i);
    i++
    setTimeout(Typing , 100);
  }
}
Typing();
var MyImg = document.querySelector("#Sec");
// console.log(MyImg);
var arrImage = ["assets/00Cx7vFIetxCuKxQeqPf8mi-23.fit_lim.size_1200x630.v1643131202.jpg", "assets/ben-sweet-2LowviVHZ-E-unsplash-1.jpg", "assets/fashion-history-and-how-it-developed.jpg"];
console.log(MyImg[0]);

function imgSec(MyImg, arrImage) {
  "use strict";
  setInterval(() => {
    var algo = Math.floor(Math.random() * arrImage.length);
    MyImg.src = arrImage[algo];
console.log(algo);

  }, 3000);
}
imgSec(MyImg, arrImage);

    </script>
</body>

</html>