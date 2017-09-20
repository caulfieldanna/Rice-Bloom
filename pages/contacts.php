<?php 
  require "../includes/config.php";
 ?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $config['title']; ?></title>
	
	<!-- favicon -->
	<link rel="icon" href="/static/images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"> 

	<!-- styles -->
	<link rel="stylesheet" type="text/css" href="/styles/css/style.1382.css">
	<link rel="stylesheet" type="text/css" href="/styles/css/style.1024.css">
	<link rel="stylesheet" type="text/css" href="/styles/css/style.768.css">
	<link rel="stylesheet" type="text/css" href="/styles/css/style.480.css">
	<link rel="stylesheet" type="text/css" href="/styles/css/style.320.css">
	<link rel="stylesheet" type="text/css" href="/styles/css/preloader.css">

	<!-- font-awesome -->
	<link rel="stylesheet" href="/styles/font-awesome-4.7.0/css/font-awesome.css">

	<!-- bootstrap -->
	<link rel="stylesheet" href="/styles/bootstrap/bootstrap.css">

	<!-- owl carousel -->
	<link rel="stylesheet" href="/styles/OwlCarousel2-2.2.1/dist/assets/owl.carousel.min.css"/>
	<link rel="stylesheet" href="/styles/OwlCarousel2-2.2.1/dist/assets/owl.theme.default.css"/>
	
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
	<script src="/styles/js/jquery.vide.js"></script>
</head>
<body>
	<div class="page-wrapper">
	<!-- HEADER -->
	<?php include "../includes/header.php"; ?>
	
	<section class="article contacts">
	<h2>Наши контакты</h2>
		<div class="row">
			<div class="col-md-6">
				<ul>
		          <li><h5>Наш адрес</h5></li>
		          <li>Санкт-Петербург,  улица Восстания 8</li>
		          <li>тел. +7-999-888-77-66 </li>
		        </ul>
			</div>
			<div class="col-md-6">
				<ul>
		          <li><h5>Время работы</h5></li>
		          <li>ПН-ПТ 10:00 - 20:00</li>
		          <li>СБ-ВС 11:00 - 22:00</li>
		        </ul>
			</div>
		</div>
		<div class="row">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1998.8772567253493!2d30.35697991587719!3d59.93417888187458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x469631a375e02635%3A0x4eb2fd08a7a91551!2z0YPQuy4g0JLQvtGB0YHRgtCw0L3QuNGPLCA4LCDQodCw0L3QutGCLdCf0LXRgtC10YDQsdGD0YDQsywgMTkxMDE0!5e0!3m2!1sru!2sru!4v1504684445705" max-width="800" height="300" text-align="center" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</section>
	
	</div><!-- class="page-wrapper" -->
</body>
</html>