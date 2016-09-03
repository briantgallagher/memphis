<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<meta name="keywords" content="web developer, web designer, html, css, php, sass, javascript, jquery" />
		<meta name="description" content="Brian T. Gallagher is a versatile web developer and designer. He specializes in front-end development, including HTML, CSS, JavaScript (jQuery) and PHP." />
		
		<title><?php echo htmlspecialchars($title); ?> | Brian T. Gallagher</title>

		<script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>

		<link rel="icon" type="image/png" href="/images/favicon-96x96.png" />

		<link rel="stylesheet" type="text/css" href="/css/base.css" />

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-19651763-1', 'auto');
		  ga('send', 'pageview');

		</script>
	</head>

	<?php
		$page = NULL;
		
		if($_SERVER['REQUEST_URI'] !== '/') {
			$page = end(explode('/', $_SERVER['REQUEST_URI']));	
		} else {
			$page = 'homepage';
		}

		$d = $_SERVER['DOCUMENT_ROOT'];
	?>
	<body data-page="<?php echo $page;?>">
		<div id="wrap">
			<header>
				<div id="header-logo">
					<h1>Brian T. Gallagher</h1>
					<a href="/">
						<div id="header-logo-small">
							<?php if(file_exists($d . '/images/header-small.svg')) { echo file_get_contents($d . '/images/header-small.svg'); } ?>
						</div>

						<div id="header-logo-large">
							<?php if(file_exists($d . '/images/header-large.svg')) { echo file_get_contents($d . '/images/header-large.svg'); } ?>
						</div>
					</a>
				</div>

				<div id="mobile-header">
					<a href="#" id="menu-link"></a>
				</div>
				
				<?php include("_menu.php"); ?>
			</header>