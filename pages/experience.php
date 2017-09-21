<?php 
  require "../includes/config.php";
 ?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $config['title']; ?></title>
	
	<!-- favicon -->
	<link rel="icon" href="../static/images/favicon.ico" type="image/x-icon">
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




		<!-- FOOTER -->
	<?php include "../includes/footer.php"; ?>
	</div><!-- class="page-wrapper" -->
</body>
</html>