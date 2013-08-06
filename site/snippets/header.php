<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8">
		<title><?php echo $site->title(); ?> » <?php echo $page->title(); ?></title>
		
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		
		<meta name="description" content="<?php echo $site->description(); ?>">
		<link rel="index" title="<?php echo $site->title(); ?>" href="<?php echo url('/'); ?>">
		
		<?php echo css('assets/css/main.css'); ?>
		<?php echo js('assets/base/js/jquery.vendor.js#1.9.1'); ?>
		<?php echo js('assets/base/js/prefixfree/prefixfree.min.js#1.0.7'); ?>
		<?php echo js('assets/js/main.js'); ?>
		
		<link rel="shortcut icon" href="http://stuff.plusp.lu/Images/Team/favicon.ico">
		<link rel="apple-touch-icon" sizes="144x144" href="http://stuff.plusp.lu/Images/Team/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="114x114" href="http://stuff.plusp.lu/Images/Team/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="http://stuff.plusp.lu/Images/Team/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" href="http://stuff.plusp.lu/Images/Team/apple-touch-icon.png">
	</head>
	<body>
		<div class="wrapper">
			<header>
				<div class="center">
					<h1><a href="<?php echo url('/'); ?>"><img src="http://stuff.plusp.lu/Images/Team/logo_notext.png" alt="<?php echo $site->title(); ?>"></a></h1>
				</div>
