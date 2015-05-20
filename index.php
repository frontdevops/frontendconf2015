<!DOCTYPE HTML>
<html lang="ru">
<head>
	<title>TypeScript: особенности разработки - Frontendconf 2015</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=792, user-scalable=no"/>
	<meta http-equiv="x-ua-compatible" content="ie=edge"/>
	<meta name="author" content="Alexander Majorov"/>
	<link rel="stylesheet" href="shower/themes/ribbon/styles/screen.css"/>
	<link rel="stylesheet" href="shower/themes/ribbon/styles/uds.css"/>
	<style>
		#myContacts {
			background:#fff url(assets/finish.jpg) 85% no-repeat;
		}

	</style>
	<link rel="stylesheet" href="bower_components/highlightjs/styles/github.css"/>
</head>
<body class="list">
	<header class="caption"><h1>TypeScript: особенности разработки</h1><p>Frontendconf 2015</p></header>
	<section class="slide cover _cover">
		<div>
			<h2>TypeScript</h2>
			<p>особенности разработки</p>
			<img src="assets/bg1.jpg" alt="." style="height: 150%"/>
		</div>
	</section>

	<script language="php">
		$a = [];
		foreach( glob(__DIR__ . '/slides/*.htm') as $slide) $a[ basename($slide) + 0 ] = $slide;
		foreach ($a as $v) include $v;
	</script>

	<section class="slide shout grow"><div><h2>Вопросы?</h2></div></section>
	<section class="slide" id="myContacts">
		<div>
			<h2>Александр Майоров</h2>
			<h3 style="margin-top: -5%; margin-bottom: 1.5%; font-size: 140%; font-weight: bold"><a href="http://tutu.ru">Tutu.ru</a></h3>
			<p>Контакты: <br/>
				&#9675; <a href="mailto:mayorov@tutu.ru">mayorov@tutu.ru</a><br/>
				&#9675; <a href="http://majorov.su">majorov.su</a>
			</p>
			<p>Презентация: <br/>
				&#9675; <a href="http://frontendconf.majorov.su/">frontendconf.majorov.su</a><br/>
				&#9675; <a href="https://github.com/i0z/frontendconf2015">github.com/i0z/frontendconf2015</a>
			</p>

		</div>
	</section>

	<p class="badge"><a href="http://alexander.majorov.su/">Александр Майоров</a></p>
	<div class="progress"><div></div></div>
	<script src="shower/shower.min.js"></script>
	<script src="bower_components/highlightjs/highlight.pack.js"></script>
	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			$('pre.hl').each(function(i, block) {
				hljs.highlightBlock(block);
			});
		});
	</script>
	<!-- Copyright ©2015, Alexander Majorov — majorov.su -->
</body></html>