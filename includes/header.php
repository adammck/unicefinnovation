<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<title>UNICEF Innovation</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="/stylesheets/style.css" type="text/css" />
		<!--[if IE]><link rel="stylesheet" href="/stylesheets/exploder.css" type="text/css" /><![endif]-->
	</head>
	<?php
		/* body class is the filename minus / and .php,
		 * to target css overrides to individual pages */
		$klass = preg_replace("/\/(.+)\.php$/", "\\1", $_SERVER["SCRIPT_NAME"]);
	?>
	<body class="<?php print $klass ?>">
		<div id="wrapper">
			<div id="header">
				<div id="masthead">
					<h1><a href="/"><span>UNICEF Innovation</span></a></h1>
					<!--<div id="tagline">We build <strong>Awesome Shit</strong> for children</div>-->
				</div>
				<ul id="nav-tabs">
					<?php if(!isset($tab)) $tab = ""; // dodge "undefined variable" warning ?>
					<li class="about<?php if($tab=="about") { ?> active<?php } ?>"><a href="/about.php">About</a></li>
					<li class="products<?php if($tab=="products") { ?> active<?php } ?>"><a href="/products.php">Products</a></li>
					<li class="home<?php if($tab=="home") { ?> active<?php } ?>"><a href="/">Home</a></li>
				</ul>
			</div>
<!-- header ends -->




