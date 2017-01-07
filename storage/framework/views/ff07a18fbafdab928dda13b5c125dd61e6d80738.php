<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">
	<title><?php echo $__env->yieldContent('title'); ?></title>
	<link href="http://allfont.net/allfont.css?fonts=montserrat-light" rel="stylesheet" type="text/css" />
	<link href="http://allfont.net/allfont.css?fonts=montserrat-hairline" rel="stylesheet" type="text/css" />
	<link href="http://allfont.net/allfont.css?fonts=montserrat-bold" rel="stylesheet" type="text/css" />
	<link href="http://allfont.net/allfont.css?fonts=old-standard-tt-italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="/theme/css/style.css">
	<link type="text/css" rel="stylesheet" href="/theme/css/smallscreens.css">
	<link href="/theme/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="/theme/js/jquery-3.1.0.min.js"></script>
</head>

<body>
<div class="background">
<header>
	<nav class="navbar navbar-inverse">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
					<a class="navbar-brand" href="index.html" style="margin-right: 13%;"><!--<img src="" alt="logo" class="img-responsive">-->TORNADO</a>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav" id="navigacija">
							<li><a href="">POČETNA</a></li>
							<li><a href="">O NAMA</a></li>
							<li><a href="">NAJZANIMLJIVIJI KOMENTARI</a></li>
							<li><a href="">NAJNOVIJI KOMENTARI</a></li>
							<li><a href="">AKTUELNO</a></li>
							<li><a href="">TEST</a></li>
						</ul>
					</div> <!--end div #myNavbar-->
				</nav>
</header>
<?php echo $__env->yieldContent('body'); ?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="/theme/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/theme/js/jq.js"></script>
</body>
</html>