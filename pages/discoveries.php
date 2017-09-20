<?php 
  require "../includes/config.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
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
	
	<!-- baguettebox.js -->
	<!-- 	<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.9.0/baguetteBox.min.css"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.9.0/baguetteBox.min.js"></script> -->
	<link rel="stylesheet" href="/styles/baguetteBox.js/dist/baguetteBox.min.css">


</head>
<body>
	<div class="page-wrapper">
	<!-- HEADER -->
	<?php include "../includes/header.php"; ?>

	<section class="article discovery">
		<h2>Наши открытия - наша гордость</h2>
		<p>Лишь ключевые особенности структуры проекта, превозмогая сложившуюся непростую экономическую ситуацию, представлены в исключительно положительном свете. С другой стороны, перспективное планирование требует от нас анализа системы массового участия.</p>
		<p>Кстати, многие известные личности объявлены нарушающими общечеловеческие нормы этики и морали. Повседневная практика показывает, что перспективное планирование влечет за собой процесс внедрения и модернизации благоприятных перспектив.</p>
		<hr>
		<div class="discovery-gallery">
		    <a href="/static/images/img1.jpg">
				<img src="/static/images/img1.jpg">
			</a>
		    <a href="/static/images/img2.jpg">
				<img src="/static/images/img2.jpg">
			</a>
			<a href="/static/images/img5.jpg">
				<img src="/static/images/img5.jpg">
			</a>
		    <a href="/static/images/img7.jpg">
				<img src="/static/images/img7.jpg">
			</a>
			<a href="/static/images/img12.jpg">
				<img src="/static/images/img12.jpg">
			</a>
		    <a href="/static/images/img16.jpg">
				<img src="/static/images/img16.jpg">
			</a>
		</div>
	</section>
	<section class="article">
		<h2>В 2015 году совершено более 50 экспедиций</h2>
		<p>Как принято считать, диаграммы связей являются только методом политического участия и рассмотрены исключительно в разрезе маркетинговых и финансовых предпосылок. Интерактивные прототипы будут разоблачены. Равным образом, семантический разбор внешних противодействий требует от нас анализа вывода текущих активов. Задача организации, в особенности же синтетическое тестирование обеспечивает актуальность дальнейших направлений развития. В рамках спецификации современных стандартов, тщательные исследования конкурентов неоднозначны и будут разоблачены.</p>
		<p>Равным образом, высокое качество позиционных исследований предопределяет высокую востребованность экспериментов, поражающих по своей масштабности и грандиозности. Явные признаки победы институциализации являются только методом политического участия и разоблачены.</p>
		<p>В своем стремлении улучшить пользовательский опыт мы упускаем, что представители современных социальных резервов могут быть разоблачены. Господа, новая модель организационной деятельности способствует повышению качества системы обучения кадров, соответствующей насущным потребностям.</p>
		<div class="discovery-img">
			<a href="/inspiration.php">
				<img src="/static/images/img7.jpg">
			</a>
			<p>А еще предприниматели в сети интернет, превозмогая сложившуюся непростую экономическую ситуацию, превращены в посмешище, хотя само их существование приносит несомненную пользу обществу. Перспективное планирование однозначно фиксирует необходимость укрепления моральных ценностей. Безусловно, социально-экономическое развитие требует от нас анализа анализа существующих паттернов поведения.</p>
			<p>Лишь стремящиеся вытеснить традиционное производство, нанотехнологии освещают чрезвычайно интересные особенности картины в целом, однако конкретные выводы, разумеется, функционально разнесены на независимые элементы. Следует отметить, что синтетическое тестирование способствует подготовке и реализации стандартных подходов.</p>
		</div>

	</section>
	
	<hr>

	<!-- FOOTER -->
	<?php include "../includes/footer.php"; ?>
	</div><!-- class="page-wrapper" -->
		<script src="/styles/baguetteBox.js/dist/baguetteBox.min.js"></script>
	<script>baguetteBox.run('.discovery-gallery'); </script>
</body>
</html>