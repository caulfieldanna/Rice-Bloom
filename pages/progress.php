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
	
	<!-- jqplot -->
	<script type="text/javascript" src="/styles/jqPlot/jquery.jqplot.js"></script>
	<script type="text/javascript" src="/styles/jqPlot/plugins/jqplot.pieRenderer.js"></script>
	<script type="text/javascript" src="/styles/jqPlot/plugins/jqplot.dateAxisRenderer.js"></script>
	<script type="text/javascript" src="/styles/jqPlot/plugins/jqplot.logAxisRenderer.js"></script>
	<script type="text/javascript" src="/styles/jqPlot/plugins/jqplot.canvasTextRenderer.js"></script>
	<script type="text/javascript" src="/styles/jqPlot/plugins/jqplot.canvasAxisTickRenderer.js"></script>
	<script type="text/javascript" src="/styles/jqPlot/plugins/jqplot.highlighter.js"></script>
	<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/smoothness/jquery-ui.css" />
	<link rel="stylesheet" type="text/css" href="/styles/jqPlot/jquery.jqplot.css" />
</head>
<body>
	<div class="page-wrapper">
	<!-- HEADER -->
	<?php include "../includes/header.php"; ?>

	<section class="article ">
		<h2>Эти достижения не могут не впечатлить</h2>
		<p>Внезапно, акционеры крупнейших компаний и по сей день остаются уделом либералов, которые жаждут быть своевременно верифицированы. В целом, конечно, убежденность некоторых оппонентов играет определяющее значение для экономической целесообразности принимаемых решений. Активно развивающиеся страны третьего мира будут преданы социально-демократической анафеме. В частности, выбранный нами инновационный путь позволяет оценить значение своевременного выполнения сверхзадачи. Разнообразный и богатый опыт говорит нам, что перспективное планирование создает необходимость включения в производственный план целого ряда внеочередных мероприятий с учетом комплекса своевременного выполнения сверхзадачи.</p>
		<p>А еще стремящиеся вытеснить традиционное производство, нанотехнологии формируют глобальную экономическую сеть и при этом - заблокированы в рамках своих собственных рациональных ограничений! Предварительные выводы неутешительны: выбранный нами инновационный путь играет определяющее значение для приоретизации разума над эмоциями.</p>
	</section>
	
	<div id="diagram-2015" style="max-height:300px; max-width:350px;"></div>
	<script>
		$(document).ready(function(){
		  jQuery.jqplot.config.enablePlugins = true;
		  plot7 = jQuery.jqplot('diagram-2015', 
		    [[['Метеорит', 7], 
		    ['Опал', 6],['Рубин', 5], ['Слюда', 4], ['Уголь', 3], ['Руда', 2]]], 
		    {
		      title: ' Диаграмма по данным добычи минералов на 2015 год ', 
		      seriesDefaults: {shadow: true, renderer: jQuery.jqplot.PieRenderer, rendererOptions: { showDataLabels: true } }, 
		      legend: { show:true }
		    }
		  );
		});
	</script>

	<div id="diagram-2016" style="max-height:300px; max-width:350px;"></div>
	<script>
		$(document).ready(function(){
		  jQuery.jqplot.config.enablePlugins = true;
		  plot7 = jQuery.jqplot('diagram-2016', 
		    [[['Метеорит', 7], 
		    ['Опал', 6],['Рубин', 5], ['Слюда', 4], ['Уголь', 3], ['Руда', 2], ['Гранит', 1]]], 
		    {
		      title: ' Диаграмма по данным добычи минералов на 2016 год ', 
		      seriesDefaults: {shadow: true, renderer: jQuery.jqplot.PieRenderer, rendererOptions: { showDataLabels: true } }, 
		      legend: { show:true }
		    }
		  );
		});
	</script>



<!-- 	<script>
		$(document).ready(function(){
		  jQuery.jqplot.config.enablePlugins = true;
		  plot9 = jQuery.jqplot('chart9', 
		    [[['Verwerkende industrie', 9],['Retail', 8], ['Primaire producent', 7], 
		    ['Out of home', 6],['Groothandel', 5], ['Grondstof', 4], ['Consument', 3], ['Bewerkende industrie', 2]]], 
		    {
		      title: ' ', 
		      seriesDefaults: {shadow: true, renderer: jQuery.jqplot.PieRenderer, rendererOptions: { 
		          fill: false, 
		          sliceMargin: 4, 
		          showDataLabels: true
		          } 
		      }, 
		      legend: { show:true }
		    }
		  );
		});
	</script> -->
	<section class="article">
		<i><q>Убежденность некоторых оппонентов обеспечивает широкому кругу (специалистов) участие в формировании инновационных методов управления процессами!</q></i>
		<br><br>
		<p>Таким образом, экономическая повестка сегодняшнего дня позволяет выполнить важные задания по разработке дальнейших направлений развития. Повседневная практика показывает, что укрепление и развитие внутренней структуры предоставляет широкие возможности для форм воздействия. Равным образом, сплоченность команды профессионалов однозначно фиксирует необходимость приоретизации разума над эмоциями.</p>
		<p>Безусловно, базовый вектор развития позволяет оценить значение кластеризации усилий. Сплоченность команды профессионалов однозначно фиксирует необходимость модели развития. Предприниматели в сети интернет, вне зависимости от их уровня, должны быть указаны как претенденты на роль ключевых факторов. Современные технологии достигли такого уровня, что разбавленное изрядной долей эмпатии, рациональное мышление в значительной степени обусловливает важность распределения внутренних резервов и ресурсов.</p>
	</section>

	<div id="diagram-all" style="max-height: 400px; max-width: 600px;"></div>

	<script>
		$(document).ready(function () {
    $.jqplot._noToImageButton = true;
    var prevYear = [["2016-08-01",398], ["2016-08-02",255.25], ["2016-08-03",263.9], ["2016-08-04",154.24], 
    ["2016-08-05",210.18], ["2016-08-06",109.73], ["2016-08-07",166.91], ["2016-08-08",330.27], ["2016-08-09",546.6], 
    ["2016-08-10",260.5], ["2016-08-11",330.34], ["2016-08-12",464.32], ["2016-08-13",432.13], ["2016-08-14",197.78], 
    ["2016-08-15",311.93], ["2016-08-16",650.02], ["2016-08-17",486.13], ["2016-08-18",330.99], ["2016-08-19",504.33], 
    ["2016-08-20",773.12], ["2016-08-21",296.5], ["2016-08-22",280.13], ["2016-08-23",428.9], ["2016-08-24",469.75], 
    ["2016-08-25",628.07], ["2016-08-26",516.5], ["2016-08-27",405.81], ["2016-08-28",367.5], ["2016-08-29",492.68], 
    ["2016-08-30",700.79], ["2016-08-31",588.5], ["2016-09-01",511.83], ["2016-09-02",721.15], ["2016-09-03",649.62], 
    ["2016-09-04",653.14], ["2016-09-06",900.31], ["2016-09-07",803.59], ["2016-09-08",851.19], ["2016-09-09",2059.24], 
    ["2016-09-10",994.05], ["2016-09-11",742.95], ["2016-09-12",1340.98], ["2016-09-13",839.78], ["2016-09-14",1769.21], 
    ["2016-09-15",1559.01], ["2016-09-16",2099.49], ["2016-09-17",1510.22], ["2016-09-18",1691.72], 
    ["2016-09-19",1074.45], ["2016-09-20",1529.41], ["2016-09-21",1876.44], ["2016-09-22",1986.02], 
    ["2016-09-23",1461.91], ["2016-09-24",1460.3], ["2016-09-25",1392.96], ["2016-09-26",2164.85], 
    ["2016-09-27",1746.86], ["2016-09-28",2220.28], ["2016-09-29",2617.91], ["2016-09-30",3236.63]];
 
    var currYear = [["2016-08-01",796.01], ["2016-08-02",510.5], ["2016-08-03",527.8], ["2016-08-04",308.48], 
    ["2016-08-05",420.36], ["2016-08-06",219.47], ["2016-08-07",333.82], ["2016-08-08",660.55], ["2016-08-09",1093.19], 
    ["2016-08-10",521], ["2016-08-11",660.68], ["2016-08-12",928.65], ["2016-08-13",864.26], ["2016-08-14",395.55], 
    ["2016-08-15",623.86], ["2016-08-16",1300.05], ["2016-08-17",972.25], ["2016-08-18",661.98], ["2016-08-19",1008.67], 
    ["2016-08-20",1546.23], ["2016-08-21",593], ["2016-08-22",560.25], ["2016-08-23",857.8], ["2016-08-24",939.5], 
    ["2016-08-25",1256.14], ["2016-08-26",1033.01], ["2016-08-27",811.63], ["2016-08-28",735.01], ["2016-08-29",985.35], 
    ["2016-08-30",1401.58], ["2016-08-31",1177], ["2016-09-01",1023.66], ["2016-09-02",1442.31], ["2016-09-03",1299.24], 
    ["2016-09-04",1306.29], ["2016-09-06",1800.62], ["2016-09-07",1607.18], ["2016-09-08",1702.38], 
    ["2016-09-09",4118.48], ["2016-09-10",1988.11], ["2016-09-11",1485.89], ["2016-09-12",2681.97], 
    ["2016-09-13",1679.56], ["2016-09-14",3538.43], ["2016-09-15",3118.01], ["2016-09-16",4198.97], 
    ["2016-09-17",3020.44], ["2016-09-18",3383.45], ["2016-09-19",2148.91], ["2016-09-20",3058.82], 
    ["2016-09-21",3752.88], ["2016-09-22",3972.03], ["2016-09-23",2923.82], ["2016-09-24",2920.59], 
    ["2016-09-25",2785.93], ["2016-09-26",4329.7], ["2016-09-27",3493.72], ["2016-09-28",4440.55], 
    ["2016-09-29",5235.81], ["2016-09-30",6473.25]];
 
    var plot1 = $.jqplot("diagram-all", [prevYear, currYear], {
        seriesColors: ["#4BB2C5", "rgb(211, 235, 59)"],
        title: 'Pice Bloom - это большие возможности',
        highlighter: {
            show: true,
            sizeAdjust: 1,
            tooltipOffset: 9
        },
        grid: {
            background: 'rgba(57,57,57,0.0)',
            drawBorder: false,
            shadow: false,
            gridLineColor: '#666666',
            gridLineWidth: 2
        },
        legend: {
            show: true,
            placement: 'outside'
        },
        seriesDefaults: {
            rendererOptions: {
                smooth: true,
                animation: {
                    show: true
                }
            },
            showMarker: false
        },
        series: [
            {
                fill: true,
                label: '2015'
            },
            {
                label: '2016'
            }
        ],
        axesDefaults: {
            rendererOptions: {
                baselineWidth: 1.5,
                baselineColor: '#444444',
                drawBaseline: false
            }
        },
        axes: {
            xaxis: {
                renderer: $.jqplot.DateAxisRenderer,
                tickRenderer: $.jqplot.CanvasAxisTickRenderer,
                tickOptions: {
                    formatString: "%b %e",
                    angle: -30,
                    textColor: '#777'
                },
                min: "2016-08-01",
                max: "2016-09-30",
                tickInterval: "7 days",
                drawMajorGridlines: false
            },
            yaxis: {
                renderer: $.jqplot.LogAxisRenderer,
                pad: 0,
                rendererOptions: {
                    minorTicks: 1
                },
                tickOptions: {
                    formatString: "$%'d",
                    showMark: false
                }
            }
        }
    });
 
      $('.jqplot-highlighter-tooltip').addClass('ui-corner-all')
});
	</script>
		<section class="article">
		<h4>Структура организации требует дальнейших направлений развития.</h4>
		<p>Задача организации, в особенности же синтетическое тестирование в значительной степени обусловливает важность направлений прогрессивного развития. В рамках спецификации современных стандартов, независимые государства, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут ограничены исключительно образом мышления.</p>
		<p>Реплицированные с зарубежных источников, современные исследования лишь добавляют фракционных разногласий и призваны к ответу. Внезапно, непосредственные участники технического прогресса лишь добавляют фракционных разногласий и в равной степени предоставлены сами себе. Идейные соображения высшего порядка, а также перспективное планирование выявляет срочную потребность первоочередных требований.</p>
		<p>Современные технологии достигли такого уровня, что повышение уровня гражданского сознания, в своем классическом представлении, допускает внедрение анализа существующих паттернов поведения. Идейные соображения высшего порядка, а также сложившаяся структура организации прекрасно подходит для реализации существующих финансовых и административных условий.</p>
	</section>
		<!-- FOOTER -->
	<?php include "../includes/footer.php"; ?>
	</div><!-- class="page-wrapper" -->
</body>
</html>